<?php

namespace App\Http\Controllers\Airline\Amadeus;

use Amadeus\Client;
use Amadeus\Client\RequestOptions\FareMasterPricerCalendarOptions;
use Amadeus\Client\RequestOptions\FareMasterPricerTbSearch;
use Amadeus\Client\RequestOptions\Fare\MPDate;
use Amadeus\Client\RequestOptions\Fare\MPItinerary;
use Amadeus\Client\RequestOptions\Fare\MPLocation;
use Amadeus\Client\RequestOptions\Fare\MPPassenger;
use Amadeus\Client\Result;
use App\Http\Controllers\Airline\AirportiatacodesController;
use App\Http\Controllers\Airline\Amadeus\AmadeusHeaderController;
use App\Http\Controllers\Airline\Galileo\AuthenticateController;
use App\Http\Controllers\Controller;
use App\Models\CurrencyConverter;
use App\Models\Airline\Airportiatacode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use  Illuminate\Support\Facades\DB;
use App\Models\VisitorGeolocation;
// use App\Http\Controllers\searchAirIataCode;

// ------- Calendar --------------------------------

class SearchflightController extends Controller
{

    public function OnewayFlight($reqDeparture, $reqArrival, $reqDepartDate) {
        
        $HeaderController = new AmadeusHeaderController;
        $params = $HeaderController->State(false);
        $client = new Client($params);
        // $currency = VisitorGeolocation::geolocationInfo();
        // $currency = $this->getvisitorcountrycurrency();
        $body = new FareMasterPricerTbSearch([
            'nrOfRequestedResults' => 200,
            'nrOfRequestedPassengers' => 1,
            'passengers' => [
                new MPPassenger([
                    'type' => MPPassenger::TYPE_ADULT,
                    'count' => 1,
                ]),
            ],
            'itinerary' => [
                new MPItinerary([
                    'departureLocation' => new MPLocation(['city' => $reqDeparture]),
                    'arrivalLocation' => new MPLocation(['city' => $reqArrival]),
                    'date' => new MPDate([
                        'dateTime' => new \DateTime($reqDepartDate, new \DateTimeZone('UTC')),
                    ]),
                    'airlineOptions' => [
                        MPItinerary::AIRLINEOPT_EXCLUDED => ['H1'],
                    ],
                ]),
            ],
                    'currencyOverride' => 'INR'
        ]);

        $data = $client->fareMasterPricerTravelBoardSearch($body);
        // dd($data);
        if ($data->status === Result::STATUS_OK) {
            return $data;
        } else {
            return redirect()->route('no-flight')->with('message', 'Not Ablable on this route Sagment.');
        }
    }

    public function Fare_MasterPricerTravelBoardSearch(Request $request)
    {
        $AuthenticateController = new AuthenticateController;

        $AirPortCodeController = new AirportiatacodesController;

        $HeaderController = new AmadeusHeaderController;
        $params = $HeaderController->State(false);
        $client = new Client($params);

        $travellers = ['noOfAdults' => $request['noOfAdults'], 'noOfChilds' => $request['noOfChilds'], 'noOfInfants' => $request['noOfInfants']];
        $departure = Airportiatacode::where("iata", $request['departure'])->first();
        $arrival = Airportiatacode::where("iata", $request['arrival'])->first();
        Session::put('segments', [
            'departure' => $departure, 'arrival' => $arrival,
            'departDate' => $request['departDate'], 'returnDate' => $request['returnDate'],
            'triptype' => $request['trip-type'], 'cabinClass' => $request['cabinClass'],
            'traveller' => $travellers,
        ]);



        if ($request['trip-type'] === "oneway") {
            $dep = strip_tags(trim($AirPortCodeController->getCountry($request['departure'])));
            $ari = strip_tags(trim($AirPortCodeController->getCountry($request['arrival'])));

            if ($dep == "India" && $ari == "India") {
                $tripType = 1;
            } else {
                $tripType = 2;
            }

            $data = $this->OnewayFlight($request['departure'], $request['arrival'], $request['departDate']);
            if(isset($data->response)){
                $oneways = $data->response;
            }else{
                $oneways = [];
            }

            $availability = $AuthenticateController->Availability($tripType, $request['trip-type'], $request['departDate'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants'], $request['departure'], $request['arrival'], ucfirst($request['cabinClass']));
            $currencyconversion = VisitorGeolocation::geolocationInfo();
            $currency = !empty($request->session()->get('currency')) ? $request->session()->get('currency') : 'INR';
            //  dd($availability['Availibilities'][0]['Availibility'][0]);
                    if($currency[0] != 'INR'){
                        //calling our converter api

                        $params = array($currency[0] , 'INR');
                        $conversion_Rate = $currencyconversion;       // as we fetch all data from amedues and galileo in rupees
                        if(empty($conversion_Rate)){
                            $params = array('USD' , 'INR');
                            $conversion_Rate = CurrencyConverter::convert($params);
                        }
                    }
                    else{
                        $conversion_Rate  = ['code' => 'INR' , 'value' => 1];
                    }            
            if(isset($data->response)){
                $oneways = $data->response;
                if ($data->status === Result::STATUS_OK && $availability["Status"] === "Success") {
                    return view('flight-pages.oneway-flight-pages.flight-search', compact('oneways', 'travellers', 'availability' , 'conversion_Rate' , 'currency'));
                } elseif ($data->status != Result::STATUS_OK && $availability["Status"] === "Success") {

                    $oneways = [];

                    return view('flight-pages.oneway-flight-pages.flight-search', compact('oneways', 'travellers', 'availability' ,'conversion_Rate' ,  'currency'));
                } elseif ($availability["Status"] != "Success" && $data->status === Result::STATUS_OK) {

                    $availability = [];

                    return view('flight-pages.oneway-flight-pages.flight-search', compact('oneways', 'travellers', 'availability','conversion_Rate' ,'currency'));
                } else {
                    return redirect()->route('no-flight')->with('message', 'Not available on this route Sagment.');
                }
            }else{
                $oneways = [];
                if ( $availability["Status"] === "Success") {
                    return view('flight-pages.oneway-flight-pages.flight-search', compact('oneways', 'travellers', 'availability' ,'conversion_Rate' ,'currency'));
                }  else {
                    return redirect()->route('no-flight')->with('message', 'Not available on this route Sagment.');
                }
                
            }
        } elseif ($request['trip-type'] === "roundtrip") {
            $conversion = VisitorGeolocation::geolocationInfo();
            $code = !empty($conversion['code']) ? $conversion['code'] : 'INR';
            $cvalue = !empty($conversion['value']) ? $conversion['value'] : 1;
            
            $opt = new FareMasterPricerTbSearch([
                'nrOfRequestedResults' => 200,
                'nrOfRequestedPassengers' => 1,
                'passengers' => [
                    new MPPassenger([
                        'type' => MPPassenger::TYPE_ADULT,
                        'count' => 1,
                    ]),
                ],
                'itinerary' => [
                    new MPItinerary([
                        'departureLocation' => new MPLocation(['city' => $request['departure']]),
                        'arrivalLocation' => new MPLocation(['city' => $request['arrival']]),
                        'date' => new MPDate([
                            'dateTime' => new \DateTime($request['departDate'], new \DateTimeZone('UTC')),
                        ]),
                    ]),

                    new MPItinerary([
                        'departureLocation' => new MPLocation(['city' => $request['arrival']]),
                        'arrivalLocation' => new MPLocation(['city' => $request['departure']]),
                        'date' => new MPDate([
                            'dateTime' => new \DateTime($request['returnDate'], new \DateTimeZone('UTC')),
                        ]),
                    ]),
                ],
                    'currencyOverride' => 'INR'                
            ]);
                                 
            if ($AirPortCodeController->getCountry($request['departure']) == "India" && $AirPortCodeController->getCountry($request['arrival']) == "India") {

                $availabilityOutbounds = $AuthenticateController->Availability(1, 'oneway', $request['departDate'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants'], $request['departure'], $request['arrival'], ucfirst($request['cabinClass']));

                $availabilityInbounds = $AuthenticateController->Availability(1, 'oneway', $request['returnDate'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants'], $request['arrival'], $request['departure'], ucfirst($request['cabinClass']));

                $roundtripOutbounds = $this->OnewayFlight($request['departure'], $request['arrival'], $request['departDate']);

                $roundtripInbounds = $this->OnewayFlight($request['arrival'], $request['departure'], $request['returnDate']);

                $roundtripdomestic = $client->fareMasterPricerTravelBoardSearch($opt);
                $availabilitys = $AuthenticateController->AvailabilityRound(1, 'roundtrip', $request['departDate'], $request['returnDate'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants'], $request['departure'], $request['arrival'], ucfirst($request['cabinClass']));
                // dd( $roundtripdomestic ,  $availabilitys,["gail" => [$availabilityOutbounds, $availabilityInbounds], "amd" => [$roundtripOutbounds, $roundtripInbounds]]);
                if ($roundtripdomestic->status === Result::STATUS_OK) {
                    $roundtrips = $roundtripdomestic->response;
                    return view('flight-pages.roundtrip-flight-pages.domestic-flight-pages.flight-search', compact('roundtripOutbounds', 'roundtripInbounds', 'travellers', 'availabilityOutbounds', 'availabilityInbounds' , 'code' , 'cvalue'));
                } elseif (($roundtripdomestic->status == "ERR") && ( $availabilitys['Status'] == "Success")) {
                    return view('flight-pages.roundtrip-flight-pages.domestic-flight-pages.flight-search', compact('roundtripOutbounds', 'roundtripInbounds', 'travellers', 'availabilityOutbounds', 'availabilityInbounds' , 'code' , 'cvalue'));
                    // return redirect()->route('no-flight')->with('message', 'No Available on this route Sagment.');
                } else {
                    return redirect()->route('no-flight')->with('message', 'No Available on this route Sagment.');
                }
            } else {

                $roundtripInternational = $client->fareMasterPricerTravelBoardSearch($opt);
                
                $availabilitys = $AuthenticateController->AvailabilityRound(2, 'roundtrip', $request['departDate'], $request['returnDate'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants'], $request['departure'], $request['arrival'], $request['cabinClass']);
                
                    // dd($roundtripInternational , $availabilitys);
                if ($roundtripInternational->status === Result::STATUS_OK) {

                    $roundtrips = $roundtripInternational->response;
                    return view('flight-pages.roundtrip-flight-pages.internation-flight-pages.flight-search', compact('roundtrips', 'travellers', 'availabilitys', 'code' , 'cvalue'));
                } else {
                    return redirect()->route('no-flight')->with('message', 'No Available on this route Sagment.');
                }
            }
        }

        //dd($opt);
        //  else if ($request->trip == "multicity") {

        //         if ($AirPortCodeController->getCountry($request['departure']) == "India" && $AirPortCodeController->getCountry($request['arrival']) == "India") {

        //         $availabilityOutbounds = $AuthenticateController->Availability(1, 'oneway', $request['departDate'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants'], $request['departure'], $request['arrival']);

        //         $availabilityInbounds = $AuthenticateController->Availability(1, 'oneway', $request['returnDate'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants'], $request['arrival'], $request['departure']);

        //         $roundtripOutbounds = $this->OnewayFlight($request['departure'], $request['arrival'], $request['departDate']);

        //         $roundtripInbounds = $this->OnewayFlight($request['arrival'], $request['departure'], $request['returnDate']);

        //         // dd(["gail" => [$availabilityOutbounds, $availabilityInbounds], "amd" => [$roundtripOutbounds, $roundtripInbounds]]);

        //         return view('flight-pages.roundtrip-flight-pages.domestic-flight-pages.flight-search', compact('roundtripOutbounds', 'roundtripInbounds', 'travellers', 'availabilityOutbounds', 'availabilityInbounds'));

        //     } else {

        //         $opt = new FareMasterPricerTbSearch([
        //             'nrOfRequestedResults' => 200,
        //             'nrOfRequestedPassengers' => 1,
        //             'passengers' => [
        //                 new MPPassenger([
        //                     'type' => MPPassenger::TYPE_ADULT,
        //                     'count' => 1,
        //                 ]),
        //             ],
        //             'itinerary' => [
        //                 new MPItinerary([
        //                     'departureLocation' => new MPLocation(['city' => $request['departure']]),
        //                     'arrivalLocation' => new MPLocation(['city' => $request['arrival']]),
        //                     'date' => new MPDate([
        //                         'dateTime' => new \DateTime($request['departDate'], new \DateTimeZone('UTC')),
        //                     ]),
        //                 ]),

        //                 new MPItinerary([
        //                     'departureLocation' => new MPLocation(['city' => $request['arrival']]),
        //                     'arrivalLocation' => new MPLocation(['city' => $request['departure']]),
        //                     'date' => new MPDate([
        //                         'dateTime' => new \DateTime($request['returnDate'], new \DateTimeZone('UTC')),
        //                     ]),
        //                 ]),
        //             ],
        //         ]);

        //         $roundtripInternational = $client->fareMasterPricerTravelBoardSearch($opt);
        //         $availabilitys = $AuthenticateController->AvailabilityRound(2, 'roundtrip', $request['departDate'], $request['returnDate'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants'], $request['departure'], $request['arrival']);

        //         if ($roundtripInternational->status === Result::STATUS_OK) {
        //             $roundtrips = $roundtripInternational->response;
        //             return view('flight-pages.roundtrip-flight-pages.internation-flight-pages.flight-search', compact('roundtrips', 'travellers', 'availabilitys'));
        //         } else {
        //             return redirect()->route('no-flight')->with('message', 'Not Ablable on this route Sagment.');
        //         }
        //     }
        // }
    }
    public static function getvisitorcountrycurrency(){
        $session = !empty(Session::get('currency')) ? Session::get('currency') : '';
        if(empty($session)){
        $ip = $_SERVER['REMOTE_ADDR'];    
        $loc = Http::get('http://api.ipstack.com/'.$ip.'?access_key=528d7ed0b65ea7d1f694af15b0ced1a4')->json();
        $cncode = 'IN';
        if(!empty($loc)){
            if(isset($loc['country_code'])){
                $cncode = $loc['country_code'];
            }
        }
        if($cncode == 'US'){
            $currency = 'USD';
            $currency_symbol = '$';
        }
        else if($cncode == 'IN'){
            $currency = 'INR';  
            $currency_symbol = '₹';
        }
        else{
            $currency = DB::table('country_currency')
                          ->where('country' , $cncode)
                          ->first();
            $currency = $currency->currency;
            $currency_symbol = $currency->symbol;
        }
        Session::forget('currency');
        Session::push('currency' ,$currency);
        Session::forget('currency_symbol');
        Session::push('currency_symbol' , $currency_symbol);
        return $currency;
        }
        else{
            $currency = 'INR';
            if(!empty($session)){
                $key_cn = $session;
                $currency = ($key_cn) ? $key_cn[0] : $key_cn;  
            }   
            else{
                $currency = 'INR'; 
            }
            return $currency;
        }
    }    
}

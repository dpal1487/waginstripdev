<?php

namespace App\Http\Controllers\Airline\Amadeus;

use Amadeus\Client;
use Amadeus\Client\RequestOptions\AirSellFromRecommendationOptions;
use Amadeus\Client\RequestOptions\Air\SellFromRecommendation\Itinerary;
use Amadeus\Client\RequestOptions\Air\SellFromRecommendation\Segment as AirSegment;
use Amadeus\Client\RequestOptions\FareInformativePricingWithoutPnrOptions;
use Amadeus\Client\RequestOptions\Fare\InformativePricing\Passenger;
use Amadeus\Client\RequestOptions\Fare\InformativePricing\PricingOptions;
use Amadeus\Client\RequestOptions\Fare\InformativePricing\Segment as FareSegment;
use Amadeus\Client\Result;
use App\Http\Controllers\Airline\AirportiatacodesController;
use App\Http\Controllers\Airline\Amadeus\AmadeusHeaderController;
use Amadeus\Client\RequestOptions\FareConvertCurrencyOptions;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use  Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;
use Amadeus\Client\RequestOptions\Fare\PricePnr\PaxSegRef;
use App\Models\VisitorGeolocation;

class Air_SellFromRecommendationController extends Controller
{

    public function passenger($ADT, $CHD, $INF)
    {
        $passengers = [];
        if ($ADT > 0) {
            $requestAdults = [];
            for ($i = 1; $i <= $ADT; $i++) {
                array_push($requestAdults, $i);
            }
            $passengersAdt = new Passenger([
                'tattoos' => $requestAdults,
                'type' => Passenger::TYPE_ADULT,
            ]);
            array_push($passengers, $passengersAdt);
        }
         
        if ($CHD > 0) {
            $requestChilds = [];
            for ($i = 1; $i <= $CHD; $i++) {
                array_push($requestChilds, array_sum([$ADT, $i]));
            }
            $passengerschd = new Passenger([
                'tattoos' => $requestChilds,
                'type' => Passenger::TYPE_CHILD,
            ]);
            array_push($passengers, $passengerschd);
        }

        if ($INF > 0) {
            $requestInfants = [];
            for ($i = 1; $i <= $INF; $i++) {
                array_push($requestInfants, $i);
            }
            $passengersInf = new Passenger([
                'tattoos' => $requestInfants,
                'type' => Passenger::TYPE_INFANT,
            ]);
            array_push($passengers, $passengersInf);
        }


        return $passengers;
    }



    public function GlOnestopReview($SessionID, $Key, $Pricingkey, $ResultIndex, $Provider)
    {

        $config = Config::get('configuration.Galileo');
        // chmod 777 -R  storage
        $body = json_encode([
            "ClientCode" => 'MakeTrueTrip',
            "SessionID" => $SessionID,
            "Key" => $Key,
            "Pricingkey" => $Pricingkey,
            "Provider" => $Provider,
            "ResultIndex" => $ResultIndex,
        ], true);

        $response = Http::withHeaders([
            "Content-Type" => "application/json",
        ])->send("POST", $config['url'] . "Pricing", [
            "body" => $body,
        ])->json();
        if ($response['Status'] != "Success") {
            // return redirect()->route('home');

            return redirect()->route('error')->with('msg', 'Flight Unable to sell');
        }
        return $response;
    }

    public function OnewayTwostop($marketingCompany_1, $marketingCompany_2, $marketingCompany_3, $operatingCompany_1, $operatingCompany_2, $operatingCompany_3, $arrivalingTime, $arrivalDate_1, $arrivalDate_2, $arrivalDate_3, $departure_1, $departure_2, $departure_3, $arrival_1, $arrival_2, $arrival_3, $departureDate_1, $departureDate_2, $departureDate_3, $departureTime_1, $departureTime_2, $departureTime_3, $flightNumber_1, $flightNumber_2, $flightNumber_3, $bookingClass_1, $bookingClass_2, $bookingClass_3, $noOfAdults, $noOfChilds, $noOfInfants)
    {
        $HeaderController = new AmadeusHeaderController;
        $AirPortCodeController = new AirportiatacodesController;
        $params = $HeaderController->State(true);
        $paramsFalse = $HeaderController->State(false);
        $client = new Client($params);
        $clientFalse = new Client($paramsFalse);

        $otherInformation = ['marketingCompany_1' => $marketingCompany_1, 'marketingCompany_2' => $marketingCompany_2, 'marketingCompany_3' => $marketingCompany_3, 'operatingCompany_1' => $operatingCompany_1, 'operatingCompany_2' => $operatingCompany_2, 'operatingCompany_3' => $operatingCompany_3, 'arrivalingTime' => $arrivalingTime, 'arrivalDate_1' => $arrivalDate_1, 'arrivalDate_2' => $arrivalDate_2, 'arrivalDate_3' => $arrivalDate_3];

        $opt = new AirSellFromRecommendationOptions([
            'itinerary' => [
                new Itinerary([
                    'from' => $departure_1,
                    'to' => $arrival_3,
                    'segments' => [
                        new AirSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy', $departureDate_1, new \DateTimeZone('UTC')),
                            'from' => $departure_1,
                            'to' => $arrival_1,
                            'companyCode' => $marketingCompany_1,
                            'flightNumber' => $flightNumber_1,
                            'bookingClass' => $bookingClass_1,
                            'nrOfPassengers' => array_sum([$noOfAdults, $noOfChilds]),
                            'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                        ]),
                        new AirSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy', $departureDate_2, new \DateTimeZone('UTC')),
                            'from' => $departure_2,
                            'to' => $arrival_2,
                            'companyCode' => $marketingCompany_2,
                            'flightNumber' => $flightNumber_2,
                            'bookingClass' => $bookingClass_2,
                            'nrOfPassengers' => array_sum([$noOfAdults, $noOfChilds]),
                            'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                        ]),
                        new AirSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy', $departureDate_3, new \DateTimeZone('UTC')),
                            'from' => $departure_3,
                            'to' => $arrival_3,
                            'companyCode' => $marketingCompany_3,
                            'flightNumber' => $flightNumber_3,
                            'bookingClass' => $bookingClass_3,
                            'nrOfPassengers' => array_sum([$noOfAdults, $noOfChilds]),
                            'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                        ]),
                    ],
                ]),
            ],
        ]);

        $sellResult = $client->airSellFromRecommendation($opt);
        $passengers = $this->passenger($noOfAdults, $noOfChilds, $noOfInfants);
        $getsession = $client->getSessionData();


        $fareInformative = $clientFalse->fareInformativePricingWithoutPnr(
            new FareInformativePricingWithoutPnrOptions([
                'passengers' => $passengers,
                'segments' => [
                    new FareSegment([
                        'departureDate' => \DateTime::createFromFormat('dmy Hi', $departureDate_1 . " " . $departureTime_1),
                        'from' => $departure_1,
                        'to' => $arrival_1,
                        'marketingCompany' => $marketingCompany_1,
                        'operatingCompany' => $operatingCompany_1,
                        'flightNumber' => $flightNumber_1,
                        'bookingClass' => $bookingClass_1,
                        'segmentTattoo' => 1,
                        'groupNumber' => 1,
                    ]),
                    new FareSegment([
                        'departureDate' => \DateTime::createFromFormat('dmy Hi', $departureDate_2 . " " . $departureTime_2),
                        'from' => $departure_2,
                        'to' => $arrival_2,
                        'marketingCompany' => $marketingCompany_2,
                        'operatingCompany' => $operatingCompany_2,
                        'flightNumber' => $flightNumber_2,
                        'bookingClass' => $bookingClass_2,
                        'segmentTattoo' => 2,
                        'groupNumber' => 1,
                    ]),
                    new FareSegment([
                        'departureDate' => \DateTime::createFromFormat('dmy Hi', $departureDate_3 . " " . $departureTime_3),
                        'from' => $departure_3,
                        'to' => $arrival_3,
                        'marketingCompany' => $marketingCompany_3,
                        'operatingCompany' => $operatingCompany_3,
                        'flightNumber' => $flightNumber_3,
                        'bookingClass' => $bookingClass_3,
                        'segmentTattoo' => 3,
                        'groupNumber' => 1,
                    ]),

                ],
                'pricingOptions' => new PricingOptions([
                    'overrideOptions' => [
                        PricingOptions::OVERRIDE_FARETYPE_PUB,
                    ],
                    'currencyOverride' => 'INR',
                ]),
            ])
        );

        $data = ['sellResult' => $sellResult, 'fareInformative' => $fareInformative, 'otherInformation' => $otherInformation, 'getsession' => $getsession];
        return $data;
    }

    public function OnewayOnestop($marketingCompany_1, $marketingCompany_2, $operatingCompany_1, $operatingCompany_2, $arrivalingTime, $arrivalDate_1, $arrivalDate_2, $departure_1, $departure_2, $arrival_1, $arrival_2, $departureDate_1, $departureDate_2, $departureTime_1, $departureTime_2, $flightNumber_1, $flightNumber_2, $bookingClass_1, $bookingClass_2, $noOfAdults, $noOfChilds, $noOfInfants)
    {
        $HeaderController = new AmadeusHeaderController;
        $AirPortCodeController = new AirportiatacodesController;
        $params = $HeaderController->State(true);
        $paramsFalse = $HeaderController->State(false);
        $client = new Client($params);
        $clientFalse = new Client($paramsFalse);

        $otherInformation = ['marketingCompany_1' => $marketingCompany_1, 'marketingCompany_2' => $marketingCompany_2, 'operatingCompany_1' => $operatingCompany_1, 'operatingCompany_2' => $operatingCompany_2, 'arrivalingTime' => $arrivalingTime, 'arrivalDate_1' => $arrivalDate_1, 'arrivalDate_2' => $arrivalDate_2];

        $opt = new AirSellFromRecommendationOptions([
            'itinerary' => [
                new Itinerary([
                    'from' => $departure_1,
                    'to' => $arrival_2,
                    'segments' => [
                        new AirSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy', $departureDate_1, new \DateTimeZone('UTC')),
                            'from' => $departure_1,
                            'to' => $arrival_1,
                            'companyCode' => $marketingCompany_1,
                            'flightNumber' => $flightNumber_1,
                            'bookingClass' => $bookingClass_1,
                            'nrOfPassengers' => array_sum([$noOfAdults, $noOfChilds]),
                            'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                        ]),
                        new AirSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy', $departureDate_2, new \DateTimeZone('UTC')),
                            'from' => $departure_2,
                            'to' => $arrival_2,
                            'companyCode' => $marketingCompany_2,
                            'flightNumber' => $flightNumber_2,
                            'bookingClass' => $bookingClass_2,
                            'nrOfPassengers' => array_sum([$noOfAdults, $noOfChilds]),
                            'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                        ]),
                    ],
                ]),
            ],
        ]);

        $sellResult = $client->airSellFromRecommendation($opt);

        $passengers = $this->passenger($noOfAdults, $noOfChilds, $noOfInfants);
        $getsession = $client->getSessionData();

        $fareInformative = $clientFalse->fareInformativePricingWithoutPnr(
            new FareInformativePricingWithoutPnrOptions([
                'passengers' => $passengers,
                'segments' => [
                    new FareSegment([
                        'departureDate' => \DateTime::createFromFormat('dmy Hi', $departureDate_1 . " " . $departureTime_1),
                        'from' => $departure_1,
                        'to' => $arrival_1,
                        'marketingCompany' => $marketingCompany_1,
                        'operatingCompany' => $operatingCompany_1,
                        'flightNumber' => $flightNumber_1,
                        'bookingClass' => $bookingClass_1,
                        'segmentTattoo' => 1,
                        'groupNumber' => 1,
                    ]),
                    new FareSegment([
                        'departureDate' => \DateTime::createFromFormat('dmy Hi', $departureDate_2 . " " . $departureTime_2),
                        'from' => $departure_2,
                        'to' => $arrival_2,
                        'marketingCompany' => $marketingCompany_2,
                        'operatingCompany' => $operatingCompany_2,
                        'flightNumber' => $flightNumber_2,
                        'bookingClass' => $bookingClass_2,
                        'segmentTattoo' => 2,
                        'groupNumber' => 1,
                    ]),

                ],
                'pricingOptions' => new PricingOptions([
                    'overrideOptions' => [
                        PricingOptions::OVERRIDE_FARETYPE_PUB,
                    ],
                    'currencyOverride' => 'INR',
                ]),
            ])
        );

        $data = ['sellResult' => $sellResult, 'fareInformative' => $fareInformative, 'otherInformation' => $otherInformation, 'getsession' => $getsession];
        return $data;
    }

    public function OnewayNonstop($marketingCompany, $operatingCompany, $arrivalingTime, $arrivalDate, $departure, $arrival, $departureDate, $departureTime, $flightNumber, $bookingClass, $noOfAdults, $noOfChilds, $noOfInfants)
    {
        $HeaderController = new AmadeusHeaderController;
        $AirPortCodeController = new AirportiatacodesController;
        $params = $HeaderController->State(true);
        $paramsFalse = $HeaderController->State(false);
        $client = new Client($params);
        $clientFalse = new Client($paramsFalse);

        $otherInformation = ['marketingCompany' => $marketingCompany, 'operatingCompany' => $operatingCompany, 'arrivalingTime' => $arrivalingTime, 'arrivalDate' => $arrivalDate];

        $opt = new AirSellFromRecommendationOptions([
            'itinerary' => [
                new Itinerary([
                    'from' => $departure,
                    'to' => $arrival,
                    'segments' => [
                        new AirSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy', $departureDate, new \DateTimeZone('UTC')),
                            'arrivalDate' => \DateTime::createFromFormat('dmy', $arrivalDate, new \DateTimeZone('UTC')),
                            'from' => $departure,
                            'to' => $arrival,
                            'companyCode' => $marketingCompany,
                            'flightNumber' => $flightNumber,
                            'bookingClass' => $bookingClass,
                            'nrOfPassengers' => array_sum([$noOfAdults, $noOfChilds]),
                            'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                        ]),
                    ],
                ]),
            ],
        ]);

        $sellResult = $client->airSellFromRecommendation($opt);

        $passengers = $this->passenger($noOfAdults, $noOfChilds, $noOfInfants);

        $getsession = $client->getSessionData();

        $fareInformative = $clientFalse->fareInformativePricingWithoutPnr(
            new FareInformativePricingWithoutPnrOptions([
                'passengers' => $passengers,
                'segments' => [
                    new FareSegment([
                        'departureDate' => \DateTime::createFromFormat('dmy Hi', $departureDate . " " . $departureTime),
                        'from' => $departure,
                        'to' => $arrival,
                        'marketingCompany' => $marketingCompany,
                        'operatingCompany' => $operatingCompany,
                        'flightNumber' => $flightNumber,
                        'bookingClass' => $bookingClass,
                        'segmentTattoo' => 1,
                        'groupNumber' => 1,
                    ]),
                ],
            ])
        );

        $data = ['sellResult' => $sellResult, 'fareInformative' => $fareInformative, 'otherInformation' => $otherInformation, 'getsession' => $getsession];
        return $data;
    }

    public function Air_SellFromRecommendation(Request $request)
    {
        $HeaderController = new AmadeusHeaderController;
        $AirPortCodeController = new AirportiatacodesController;
        $params = $HeaderController->State(true);
        $paramsFalse = $HeaderController->State(false);
        $client = new Client($params);
        $clientFalse = new Client($paramsFalse);




        $travellers = ['noOfAdults' => $request['noOfAdults'], 'noOfChilds' => $request['noOfChilds'], 'noOfInfants' => $request['noOfInfants']];
        $paramsFalse = $HeaderController->State(false);
        $conversion = VisitorGeolocation::geolocationInfo();
        if(!empty($conversion)){
            $code = $conversion['code'];
            $cvalue = $conversion['value'];
        }
        else{
            $code = 'INR';
            $cvalue = 1;
        }
        if (isset($request['onewayNonstop'])) {
            $otherInformation = ['marketingCompany' => $request['marketingCompany'], 'operatingCompany' => $request['operatingCompany'], 'arrivalingTime' => $request['arrivalingTime'], 'arrivalDate' => $request['arrivalDate']];
            $opt = new AirSellFromRecommendationOptions([
                'itinerary' => [
                    new Itinerary([
                        'from' => $request['departure'],
                        'to' => $request['arrival'],
                        'segments' => [
                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['departureDate'], new \DateTimeZone('UTC')),
                                'arrivalDate' => \DateTime::createFromFormat('dmy', $request['arrivalDate'], new \DateTimeZone('UTC')),
                                'from' => $request['departure'],
                                'to' => $request['arrival'],
                                'companyCode' => $request['marketingCompany'],
                                'flightNumber' => $request['flightNumber'],
                                'bookingClass' => $request['bookingClass'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),
                        ],
                    ]),
                ],
            ]);

            $sellResult = $client->airSellFromRecommendation($opt);


            if ($sellResult->status === Result::STATUS_OK) {

                $passengers = $this->passenger($request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);

                $getsession = $client->getSessionData();


                // $curr_default = 'INR';
                // $curr_arr = $request->session()->get('currency');
                // if(!empty($curr_arr)){
                //     if(isset($curr_arr[0])){
                //         $curr_default = $curr_arr[0];
                //     }
                // }
                // if($curr_default != 'INR'){
                    $informativePricingResponse = $clientFalse->fareInformativePricingWithoutPnr(
                        new FareInformativePricingWithoutPnrOptions([
                            'passengers' => $passengers,
                            'segments' => [
                                new FareSegment([
                                    'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['departureDate'] . " " . $request['departureTime']),
                                    'from' => $request['departure'],
                                    'to' => $request['arrival'],
                                    'marketingCompany' => $request['marketingCompany'],
                                    'operatingCompany' => $request['operatingCompany'],
                                    'flightNumber' => $request['flightNumber'],
                                    'bookingClass' => $request['bookingClass'],
                                    'segmentTattoo' => 1,
                                    'groupNumber' => 1, 
                                ]),
                            ],    
                                    // 'pricingOptions' => new PricingOptions([
                                    //     'currencyOverride' => 'USD',
                                    // ])                        
                        ])
                    );
                // }
                // if($curr_default == 'INR'){
                //     $informativePricingResponse = $clientFalse->fareInformativePricingWithoutPnr(
                //         new FareInformativePricingWithoutPnrOptions([
                //             'passengers' => $passengers,
                //             'segments' => [
                //                 new FareSegment([
                //                     'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['departureDate'] . " " . $request['departureTime']),
                //                     'from' => $request['departure'],
                //                     'to' => $request['arrival'],
                //                     'marketingCompany' => $request['marketingCompany'],
                //                     'operatingCompany' => $request['operatingCompany'],
                //                     'flightNumber' => $request['flightNumber'],
                //                     'bookingClass' => $request['bookingClass'],
                //                     'segmentTattoo' => 1,
                //                     'groupNumber' => 1, 
                //                 ]),
                //             ],                     
                //         ])
                //     );
                // }                
                if ($informativePricingResponse->status === Result::STATUS_OK) {
      
                    $onewayNonstop = $sellResult->response;
                    $fare = $informativePricingResponse->response;
                    // $rulesResponse = $client->fareConvertCurrency(
                    //         new FareConvertCurrencyOptions([
                    //             'from' => 'EUR',
                    //             'to' => 'USD',
                    //             'amount' => '200',
                    //         ])
                    //     );
    

                    
                    // if($curr_default =='INR'){
                    // return view('flight-pages.oneway-flight-pages.flight-review', compact('onewayNonstop', 'travellers', 'fare', 'otherInformation', 'getsession'));
                    // }
                    // else{
                        return view('flight-pages.oneway-flight-pages.flight-review', compact('onewayNonstop', 'travellers', 'fare', 'otherInformation'  , 'code' , 'cvalue' , 'getsession'));
                    // }
                } else {
                    return redirect()->route('error')->with('message', $informativePricingResponse->messages[0]->text);
                }
            } else {
                return redirect()->route('error')->with('message', $sellResult->messages[0]->text);
            }
        } elseif (isset($request['onewayOnestop'])) {

            $otherInformation = ['marketingCompany_1' => $request['marketingCompany_1'], 'marketingCompany_2' => $request['marketingCompany_2'], 'operatingCompany_1' => $request['operatingCompany_1'], 'operatingCompany_2' => $request['operatingCompany_2'], 'arrivalingTime' => $request['arrivalingTime'], 'arrivalDate_1' => $request['arrivalDate_1'], 'arrivalDate_2' => $request['arrivalDate_2']];

            $opt = new AirSellFromRecommendationOptions([
                'itinerary' => [
                    new Itinerary([
                        'from' => $request['departure_1'],
                        'to' => $request['arrival_2'],
                        'segments' => [
                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['departureDate_1'], new \DateTimeZone('UTC')),
                                'from' => $request['departure_1'],
                                'to' => $request['arrival_1'],
                                'companyCode' => $request['marketingCompany_1'],
                                'flightNumber' => $request['flightNumber_1'],
                                'bookingClass' => $request['bookingClass_1'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),
                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['departureDate_2'], new \DateTimeZone('UTC')),
                                'from' => $request['departure_2'],
                                'to' => $request['arrival_2'],
                                'companyCode' => $request['marketingCompany_2'],
                                'flightNumber' => $request['flightNumber_2'],
                                'bookingClass' => $request['bookingClass_2'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),
                        ],
                    ]),
                ],
            ]);

            $sellResult = $client->airSellFromRecommendation($opt);

            if ($sellResult->status === Result::STATUS_OK) {

                $passengers = $this->passenger($request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);
                $getsession = $client->getSessionData();

                $informativePricingResponse = $clientFalse->fareInformativePricingWithoutPnr(
                    new FareInformativePricingWithoutPnrOptions([
                        'passengers' => $passengers,
                        'segments' => [
                            new FareSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['departureDate_1'] . " " . $request['departureTime_1']),
                                'from' => $request['departure_1'],
                                'to' => $request['arrival_1'],
                                'marketingCompany' => $request['marketingCompany_1'],
                                'operatingCompany' => $request['operatingCompany_1'],
                                'flightNumber' => $request['flightNumber_1'],
                                'bookingClass' => $request['bookingClass_1'],
                                'segmentTattoo' => 1,
                                'groupNumber' => 1,
                            ]),
                            new FareSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['departureDate_2'] . " " . $request['departureTime_2']),
                                'from' => $request['departure_2'],
                                'to' => $request['arrival_2'],
                                'marketingCompany' => $request['marketingCompany_2'],
                                'operatingCompany' => $request['operatingCompany_2'],
                                'flightNumber' => $request['flightNumber_2'],
                                'bookingClass' => $request['bookingClass_2'],
                                'segmentTattoo' => 2,
                                'groupNumber' => 1,
                            ]),

                        ],
                        // 'pricingOptions' => new PricingOptions([
                        //     'overrideOptions' => [
                        //         PricingOptions::OVERRIDE_FARETYPE_PUB,
                        //     ],
                        //     'currencyOverride' => 'INR',
                        // ]),
                    ])
                );

                if ($informativePricingResponse->status === Result::STATUS_OK) {
                    $onewayOnestop = $sellResult->response;
                    $fare = $informativePricingResponse->response;
               
                    return view('flight-pages.oneway-flight-pages.flight-review', compact('onewayOnestop', 'travellers', 'fare', 'otherInformation', 'getsession', 'cvalue' , 'code'));
                } else {
                    return redirect()->route('error')->with('message', $informativePricingResponse->messages[0]->text);
                }
            } else {
                return redirect()->route('error')->with('message', $sellResult->messages[0]->text);
            }
        } elseif (isset($request['onewayTwostop'])) {

            $otherInformation = ['marketingCompany_1' => $request['marketingCompany_1'], 'marketingCompany_2' => $request['marketingCompany_2'], 'marketingCompany_3' => $request['marketingCompany_3'], 'operatingCompany_1' => $request['operatingCompany_1'], 'operatingCompany_2' => $request['operatingCompany_2'], 'operatingCompany_3' => $request['operatingCompany_3'], 'arrivalingTime' => $request['arrivalingTime'], 'arrivalDate_1' => $request['arrivalDate_1'], 'arrivalDate_2' => $request['arrivalDate_2'], 'arrivalDate_3' => $request['arrivalDate_3']];

            $opt = new AirSellFromRecommendationOptions([
                'itinerary' => [
                    new Itinerary([
                        'from' => $request['departure_1'],
                        'to' => $request['arrival_3'],
                        'segments' => [
                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['departureDate_1'], new \DateTimeZone('UTC')),
                                'from' => $request['departure_1'],
                                'to' => $request['arrival_1'],
                                'companyCode' => $request['marketingCompany_1'],
                                'flightNumber' => $request['flightNumber_1'],
                                'bookingClass' => $request['bookingClass_1'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),
                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['departureDate_2'], new \DateTimeZone('UTC')),
                                'from' => $request['departure_2'],
                                'to' => $request['arrival_2'],
                                'companyCode' => $request['marketingCompany_2'],
                                'flightNumber' => $request['flightNumber_2'],
                                'bookingClass' => $request['bookingClass_2'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),
                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['departureDate_3'], new \DateTimeZone('UTC')),
                                'from' => $request['departure_3'],
                                'to' => $request['arrival_3'],
                                'companyCode' => $request['marketingCompany_3'],
                                'flightNumber' => $request['flightNumber_3'],
                                'bookingClass' => $request['bookingClass_3'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),
                        ],
                    ]),
                ],
            ]);

            $sellResult = $client->airSellFromRecommendation($opt);

            if ($sellResult->status === Result::STATUS_OK) {

                $passengers = $this->passenger($request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);
                $getsession = $client->getSessionData();

                $informativePricingResponse = $clientFalse->fareInformativePricingWithoutPnr(
                    new FareInformativePricingWithoutPnrOptions([
                        'passengers' => $passengers,
                        'segments' => [
                            new FareSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['departureDate_1'] . " " . $request['departureTime_1']),
                                'from' => $request['departure_1'],
                                'to' => $request['arrival_1'],
                                'marketingCompany' => $request['marketingCompany_1'],
                                'operatingCompany' => $request['operatingCompany_1'],
                                'flightNumber' => $request['flightNumber_1'],
                                'bookingClass' => $request['bookingClass_1'],
                                'segmentTattoo' => 1,
                                'groupNumber' => 1,
                            ]),
                            new FareSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['departureDate_2'] . " " . $request['departureTime_2']),
                                'from' => $request['departure_2'],
                                'to' => $request['arrival_2'],
                                'marketingCompany' => $request['marketingCompany_2'],
                                'operatingCompany' => $request['operatingCompany_2'],
                                'flightNumber' => $request['flightNumber_2'],
                                'bookingClass' => $request['bookingClass_2'],
                                'segmentTattoo' => 2,
                                'groupNumber' => 1,
                            ]),
                            new FareSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['departureDate_3'] . " " . $request['departureTime_3']),
                                'from' => $request['departure_3'],
                                'to' => $request['arrival_3'],
                                'marketingCompany' => $request['marketingCompany_3'],
                                'operatingCompany' => $request['operatingCompany_3'],
                                'flightNumber' => $request['flightNumber_3'],
                                'bookingClass' => $request['bookingClass_3'],
                                'segmentTattoo' => 3,
                                'groupNumber' => 1,
                            ]),

                        ],
                        // 'pricingOptions' => new PricingOptions([
                        //     'overrideOptions' => [
                        //         PricingOptions::OVERRIDE_FARETYPE_PUB,
                        //     ],
                        //     'currencyOverride' => 'INR',
                        // ]),
                    ])
                );

                if ($informativePricingResponse->status === Result::STATUS_OK) {
                    $onewayTwostop = $sellResult->response;
                    $fare = $informativePricingResponse->response;

                    return view('flight-pages.oneway-flight-pages.flight-review', compact('onewayTwostop', 'travellers', 'fare', 'otherInformation', 'getsession' , 'cvalue' , 'code'));
                } else {
                    return redirect()->route('error')->with('message', $informativePricingResponse->messages[0]->text);
                }
            } else {
                return redirect()->route('error')->with('message', $sellResult->messages[0]->text);
            }
        } elseif (isset($request['dom_outbound_nonstop']) && isset($request['dom_inbound_nonstop'])) {

            $domesticOutboundNonstop = $this->OnewayNonstop($request['outbound_nonstop_marketingCompany'], $request['outbound_nonstop_operatingCompany'], $request['outbound_nonstop_arrivalingTime'], $request['outbound_nonstop_arrivalDate'], $request['outbound_nonstop_departure'], $request['outbound_nonstop_arrival'], $request['outbound_nonstop_departureDate'], $request['outbound_nonstop_departureTime'], $request['outbound_nonstop_flightNumber'], $request['outbound_nonstop_bookingClass'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);

            $domesticInboundNonstop = $this->OnewayNonstop($request['inbound_nonstop_marketingCompany'], $request['inbound_nonstop_operatingCompany'], $request['inbound_nonstop_arrivalingTime'], $request['inbound_nonstop_arrivalDate'], $request['inbound_nonstop_departure'], $request['inbound_nonstop_arrival'], $request['inbound_nonstop_departureDate'], $request['inbound_nonstop_departureTime'], $request['inbound_nonstop_flightNumber'], $request['inbound_nonstop_bookingClass'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);

            if ($domesticOutboundNonstop['sellResult']->status === Result::STATUS_OK && $domesticOutboundNonstop['fareInformative']->status === Result::STATUS_OK && $domesticInboundNonstop['sellResult']->status === Result::STATUS_OK && $domesticInboundNonstop['fareInformative']->status === Result::STATUS_OK) {

                $roundtripNonstopNonstop = (object) ['itineraryDetails' => [$domesticOutboundNonstop['sellResult']->response->itineraryDetails, $domesticInboundNonstop['sellResult']->response->itineraryDetails]];
                $fare = ['fareOutbound' => $domesticOutboundNonstop['fareInformative']->response, 'fareInbound' => $domesticInboundNonstop['fareInformative']->response];
                $getsession = ['sessionOutbound' => $domesticOutboundNonstop['getsession'], 'sessionInbound' => $domesticInboundNonstop['getsession']];
                $otherInformation = ['otherInfoOutbound' => $domesticOutboundNonstop['otherInformation'], 'otherInfoInbound' => $domesticInboundNonstop['otherInformation']];

                return view('flight-pages.roundtrip-flight-pages.domestic-flight-pages.flight-review', compact('roundtripNonstopNonstop', 'travellers', 'fare', 'otherInformation', 'getsession' , 'cvalue' , 'code'));
            } else {

                return redirect()->route('error')->with('message', 'error');
            }
        } elseif (isset($request['dom_outbound_nonstop']) && isset($request['dom_inbound_onestop'])) {
            $domesticOutboundNonstop = $this->OnewayNonstop($request['outbound_nonstop_marketingCompany'], $request['outbound_nonstop_operatingCompany'], $request['outbound_nonstop_arrivalingTime'], $request['outbound_nonstop_arrivalDate'], $request['outbound_nonstop_departure'], $request['outbound_nonstop_arrival'], $request['outbound_nonstop_departureDate'], $request['outbound_nonstop_departureTime'], $request['outbound_nonstop_flightNumber'], $request['outbound_nonstop_bookingClass'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);

            $domesticInboundOnestop = $this->OnewayOnestop($request['inbound_onestop_marketingCompany_1'], $request['inbound_onestop_marketingCompany_2'], $request['inbound_onestop_operatingCompany_1'], $request['inbound_onestop_operatingCompany_2'], $request['inbound_onestop_arrivalingTime'], $request['inbound_onestop_arrivalDate_1'], $request['inbound_onestop_arrivalDate_2'], $request['inbound_onestop_departure_1'], $request['inbound_onestop_departure_2'], $request['inbound_onestop_arrival_1'], $request['inbound_onestop_arrival_2'], $request['inbound_onestop_departureDate_1'], $request['inbound_onestop_departureDate_2'], $request['inbound_onestop_departureTime_1'], $request['inbound_onestop_departureTime_2'], $request['inbound_onestop_flightNumber_1'], $request['inbound_onestop_flightNumber_2'], $request['inbound_onestop_bookingClass_1'], $request['inbound_onestop_bookingClass_2'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);
            if ($domesticOutboundNonstop['sellResult']->status === Result::STATUS_OK && $domesticOutboundNonstop['fareInformative']->status === Result::STATUS_OK && $domesticInboundOnestop['sellResult']->status === Result::STATUS_OK && $domesticInboundOnestop['fareInformative']->status === Result::STATUS_OK) {

                $roundtripNonstopOnestop = (object) ['itineraryDetails' => [$domesticOutboundNonstop['sellResult']->response->itineraryDetails, $domesticInboundOnestop['sellResult']->response->itineraryDetails]];
                $fare = ['fareOutbound' => $domesticOutboundNonstop['fareInformative']->response, 'fareInbound' => $domesticInboundOnestop['fareInformative']->response];
                $getsession = ['sessionOutbound' => $domesticOutboundNonstop['getsession'], 'sessionInbound' => $domesticInboundOnestop['getsession']];
                $otherInformation = ['otherInfoOutbound' => $domesticOutboundNonstop['otherInformation'], 'otherInfoInbound' => $domesticInboundOnestop['otherInformation']];

                return view('flight-pages.roundtrip-flight-pages.domestic-flight-pages.flight-review', compact('roundtripNonstopOnestop', 'travellers', 'fare', 'otherInformation', 'getsession' , 'code' , 'cvalue'));
            } else {

                return redirect()->route('error')->with('message', $sellResult->messages[0]->text);
            }
        } elseif (isset($request['dom_outbound_onestop']) && isset($request['dom_inbound_nonstop'])) {
            $domesticOutboundOnestop = $this->OnewayOnestop($request['outbound_onestop_marketingCompany_1'], $request['outbound_onestop_marketingCompany_2'], $request['outbound_onestop_operatingCompany_1'], $request['outbound_onestop_operatingCompany_2'], $request['outbound_onestop_arrivalingTime'], $request['outbound_onestop_arrivalDate_1'], $request['outbound_onestop_arrivalDate_2'], $request['outbound_onestop_departure_1'], $request['outbound_onestop_departure_2'], $request['outbound_onestop_arrival_1'], $request['outbound_onestop_arrival_2'], $request['outbound_onestop_departureDate_1'], $request['outbound_onestop_departureDate_2'], $request['outbound_onestop_departureTime_1'], $request['outbound_onestop_departureTime_2'], $request['outbound_onestop_flightNumber_1'], $request['outbound_onestop_flightNumber_2'], $request['outbound_onestop_bookingClass_1'], $request['outbound_onestop_bookingClass_2'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);

            $domesticInboundNonstop = $this->OnewayNonstop($request['inbound_nonstop_marketingCompany'], $request['inbound_nonstop_operatingCompany'], $request['inbound_nonstop_arrivalingTime'], $request['inbound_nonstop_arrivalDate'], $request['inbound_nonstop_departure'], $request['inbound_nonstop_arrival'], $request['inbound_nonstop_departureDate'], $request['inbound_nonstop_departureTime'], $request['inbound_nonstop_flightNumber'], $request['inbound_nonstop_bookingClass'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);

            if ($domesticOutboundOnestop['sellResult']->status === Result::STATUS_OK && $domesticOutboundOnestop['fareInformative']->status === Result::STATUS_OK && $domesticInboundNonstop['sellResult']->status === Result::STATUS_OK && $domesticInboundNonstop['fareInformative']->status === Result::STATUS_OK) {

                $roundtripOnestopNonstop = (object) ['itineraryDetails' => [$domesticOutboundOnestop['sellResult']->response->itineraryDetails, $domesticInboundNonstop['sellResult']->response->itineraryDetails]];
                $fare = ['fareOutbound' => $domesticOutboundOnestop['fareInformative']->response, 'fareInbound' => $domesticInboundNonstop['fareInformative']->response];
                $getsession = ['sessionOutbound' => $domesticOutboundOnestop['getsession'], 'sessionInbound' => $domesticInboundNonstop['getsession']];
                $otherInformation = ['otherInfoOutbound' => $domesticOutboundOnestop['otherInformation'], 'otherInfoInbound' => $domesticInboundNonstop['otherInformation']];
                
                return view('flight-pages.roundtrip-flight-pages.domestic-flight-pages.flight-review', compact('roundtripOnestopNonstop', 'travellers', 'fare', 'otherInformation', 'getsession', 'code' , 'cvalue'));
            } else {

                return redirect()->route('error')->with('message', $sellResult->messages[0]->text);
            }
        } elseif (isset($request['dom_outbound_onestop']) && isset($request['dom_inbound_onestop'])) {
            $domesticOutboundOnestop = $this->OnewayOnestop($request['outbound_onestop_marketingCompany_1'], $request['outbound_onestop_marketingCompany_2'], $request['outbound_onestop_operatingCompany_1'], $request['outbound_onestop_operatingCompany_2'], $request['outbound_onestop_arrivalingTime'], $request['outbound_onestop_arrivalDate_1'], $request['outbound_onestop_arrivalDate_2'], $request['outbound_onestop_departure_1'], $request['outbound_onestop_departure_2'], $request['outbound_onestop_arrival_1'], $request['outbound_onestop_arrival_2'], $request['outbound_onestop_departureDate_1'], $request['outbound_onestop_departureDate_2'], $request['outbound_onestop_departureTime_1'], $request['outbound_onestop_departureTime_2'], $request['outbound_onestop_flightNumber_1'], $request['outbound_onestop_flightNumber_2'], $request['outbound_onestop_bookingClass_1'], $request['outbound_onestop_bookingClass_2'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);

            $domesticInboundOnestop = $this->OnewayOnestop($request['inbound_onestop_marketingCompany_1'], $request['inbound_onestop_marketingCompany_2'], $request['inbound_onestop_operatingCompany_1'], $request['inbound_onestop_operatingCompany_2'], $request['inbound_onestop_arrivalingTime'], $request['inbound_onestop_arrivalDate_1'], $request['inbound_onestop_arrivalDate_2'], $request['inbound_onestop_departure_1'], $request['inbound_onestop_departure_2'], $request['inbound_onestop_arrival_1'], $request['inbound_onestop_arrival_2'], $request['inbound_onestop_departureDate_1'], $request['inbound_onestop_departureDate_2'], $request['inbound_onestop_departureTime_1'], $request['inbound_onestop_departureTime_2'], $request['inbound_onestop_flightNumber_1'], $request['inbound_onestop_flightNumber_2'], $request['inbound_onestop_bookingClass_1'], $request['inbound_onestop_bookingClass_2'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);

            if ($domesticOutboundOnestop['sellResult']->status === Result::STATUS_OK && $domesticOutboundOnestop['fareInformative']->status === Result::STATUS_OK && $domesticInboundOnestop['sellResult']->status === Result::STATUS_OK && $domesticInboundOnestop['fareInformative']->status === Result::STATUS_OK) {

                $roundtripOnestopOnestop = (object) ['itineraryDetails' => [$domesticOutboundOnestop['sellResult']->response->itineraryDetails, $domesticInboundOnestop['sellResult']->response->itineraryDetails]];
                $fare = ['fareOutbound' => $domesticOutboundOnestop['fareInformative']->response, 'fareInbound' => $domesticInboundOnestop['fareInformative']->response];
                $getsession = ['sessionOutbound' => $domesticOutboundOnestop['getsession'], 'sessionInbound' => $domesticInboundOnestop['getsession']];
                $otherInformation = ['otherInfoOutbound' => $domesticOutboundOnestop['otherInformation'], 'otherInfoInbound' => $domesticInboundOnestop['otherInformation']];
                    
                return view('flight-pages.roundtrip-flight-pages.domestic-flight-pages.flight-review', compact('roundtripOnestopOnestop', 'travellers', 'fare', 'otherInformation', 'getsession' , 'code' , 'cvalue'));
            } else {

                return redirect()->route('error')->with('message', $sellResult->messages[0]->text);
            }
        } elseif (isset($request['dom_outbound_nonstop']) && isset($request['dom_inbound_twostop'])) {
            $domesticOutboundNonstop = $this->OnewayNonstop($request['outbound_nonstop_marketingCompany'], $request['outbound_nonstop_operatingCompany'], $request['outbound_nonstop_arrivalingTime'], $request['outbound_nonstop_arrivalDate'], $request['outbound_nonstop_departure'], $request['outbound_nonstop_arrival'], $request['outbound_nonstop_departureDate'], $request['outbound_nonstop_departureTime'], $request['outbound_nonstop_flightNumber'], $request['outbound_nonstop_bookingClass'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);

            $domesticInboundTwostop = $this->OnewayTwostop($request['inbound_twostop_marketingCompany_1'], $request['inbound_twostop_marketingCompany_2'], $request['inbound_twostop_marketingCompany_3'], $request['inbound_twostop_operatingCompany_1'], $request['inbound_twostop_operatingCompany_2'], $request['inbound_twostop_operatingCompany_3'], $request['inbound_twostop_arrivalingTime'], $request['inbound_twostop_arrivalDate_1'], $request['inbound_twostop_arrivalDate_2'], $request['inbound_twostop_arrivalDate_3'], $request['inbound_twostop_departure_1'], $request['inbound_twostop_departure_2'], $request['inbound_twostop_departure_3'], $request['inbound_twostop_arrival_1'], $request['inbound_twostop_arrival_2'], $request['inbound_twostop_arrival_3'], $request['inbound_twostop_departureDate_1'], $request['inbound_twostop_departureDate_2'], $request['inbound_twostop_departureDate_3'], $request['inbound_twostop_departureTime_1'], $request['inbound_twostop_departureTime_2'], $request['inbound_twostop_departureTime_3'], $request['inbound_twostop_flightNumber_1'], $request['inbound_twostop_flightNumber_2'], $request['inbound_twostop_flightNumber_3'], $request['inbound_twostop_bookingClass_1'], $request['inbound_twostop_bookingClass_2'], $request['inbound_twostop_bookingClass_3'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);

            if ($domesticOutboundNonstop['sellResult']->status === Result::STATUS_OK && $domesticOutboundNonstop['fareInformative']->status === Result::STATUS_OK && $domesticInboundTwostop['sellResult']->status === Result::STATUS_OK && $domesticInboundTwostop['fareInformative']->status === Result::STATUS_OK) {

                $roundtripNonstopTwostop = (object) ['itineraryDetails' => [$domesticOutboundNonstop['sellResult']->response->itineraryDetails, $domesticInboundTwostop['sellResult']->response->itineraryDetails]];
                $fare = ['fareOutbound' => $domesticOutboundNonstop['fareInformative']->response, 'fareInbound' => $domesticInboundTwostop['fareInformative']->response];
                $getsession = ['sessionOutbound' => $domesticOutboundNonstop['getsession'], 'sessionInbound' => $domesticInboundTwostop['getsession']];
                $otherInformation = ['otherInfoOutbound' => $domesticOutboundNonstop['otherInformation'], 'otherInfoInbound' => $domesticInboundTwostop['otherInformation']];

                return view('flight-pages.roundtrip-flight-pages.domestic-flight-pages.flight-review', compact('roundtripNonstopTwostop', 'travellers', 'fare', 'otherInformation', 'getsession' , 'code' , 'cvalue'));
            } else {

                return redirect()->route('error')->with('message', $sellResult->messages[0]->text);
            }
        } elseif (isset($request['dom_outbound_onestop']) && isset($request['dom_inbound_twostop'])) {
            $domesticOutboundOnestop = $this->OnewayOnestop($request['outbound_onestop_marketingCompany_1'], $request['outbound_onestop_marketingCompany_2'], $request['outbound_onestop_operatingCompany_1'], $request['outbound_onestop_operatingCompany_2'], $request['outbound_onestop_arrivalingTime'], $request['outbound_onestop_arrivalDate_1'], $request['outbound_onestop_arrivalDate_2'], $request['outbound_onestop_departure_1'], $request['outbound_onestop_departure_2'], $request['outbound_onestop_arrival_1'], $request['outbound_onestop_arrival_2'], $request['outbound_onestop_departureDate_1'], $request['outbound_onestop_departureDate_2'], $request['outbound_onestop_departureTime_1'], $request['outbound_onestop_departureTime_2'], $request['outbound_onestop_flightNumber_1'], $request['outbound_onestop_flightNumber_2'], $request['outbound_onestop_bookingClass_1'], $request['outbound_onestop_bookingClass_2'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);

            $domesticInboundTwostop = $this->OnewayTwostop($request['inbound_twostop_marketingCompany_1'], $request['inbound_twostop_marketingCompany_2'], $request['inbound_twostop_marketingCompany_3'], $request['inbound_twostop_operatingCompany_1'], $request['inbound_twostop_operatingCompany_2'], $request['inbound_twostop_operatingCompany_3'], $request['inbound_twostop_arrivalingTime'], $request['inbound_twostop_arrivalDate_1'], $request['inbound_twostop_arrivalDate_2'], $request['inbound_twostop_arrivalDate_3'], $request['inbound_twostop_departure_1'], $request['inbound_twostop_departure_2'], $request['inbound_twostop_departure_3'], $request['inbound_twostop_arrival_1'], $request['inbound_twostop_arrival_2'], $request['inbound_twostop_arrival_3'], $request['inbound_twostop_departureDate_1'], $request['inbound_twostop_departureDate_2'], $request['inbound_twostop_departureDate_3'], $request['inbound_twostop_departureTime_1'], $request['inbound_twostop_departureTime_2'], $request['inbound_twostop_departureTime_3'], $request['inbound_twostop_flightNumber_1'], $request['inbound_twostop_flightNumber_2'], $request['inbound_twostop_flightNumber_3'], $request['inbound_twostop_bookingClass_1'], $request['inbound_twostop_bookingClass_2'], $request['inbound_twostop_bookingClass_3'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);

            if ($domesticOutboundOnestop['sellResult']->status === Result::STATUS_OK && $domesticOutboundOnestop['fareInformative']->status === Result::STATUS_OK && $domesticInboundTwostop['sellResult']->status === Result::STATUS_OK && $domesticInboundTwostop['fareInformative']->status === Result::STATUS_OK) {

                $roundtripOnestopTwostop = (object) ['itineraryDetails' => [$domesticOutboundOnestop['sellResult']->response->itineraryDetails, $domesticInboundTwostop['sellResult']->response->itineraryDetails]];
                $fare = ['fareOutbound' => $domesticOutboundOnestop['fareInformative']->response, 'fareInbound' => $domesticInboundTwostop['fareInformative']->response];
                $getsession = ['sessionOutbound' => $domesticOutboundOnestop['getsession'], 'sessionInbound' => $domesticInboundTwostop['getsession']];
                $otherInformation = ['otherInfoOutbound' => $domesticOutboundOnestop['otherInformation'], 'otherInfoInbound' => $domesticInboundTwostop['otherInformation']];

                return view('flight-pages.roundtrip-flight-pages.domestic-flight-pages.flight-review', compact('roundtripOnestopTwostop', 'travellers', 'fare', 'otherInformation', 'getsession' , 'code' , 'cvalue'));
            } else {

                return redirect()->route('error')->with('message', $sellResult->messages[0]->text);
            }
        } elseif (isset($request['dom_outbound_twostop']) && isset($request['dom_inbound_nonstop'])) {
            $domesticOutboundTwostop = $this->OnewayTwostop($request['outbound_twostop_marketingCompany_1'], $request['outbound_twostop_marketingCompany_2'], $request['outbound_twostop_marketingCompany_3'], $request['outbound_twostop_operatingCompany_1'], $request['outbound_twostop_operatingCompany_2'], $request['outbound_twostop_operatingCompany_3'], $request['outbound_twostop_arrivalingTime'], $request['outbound_twostop_arrivalDate_1'], $request['outbound_twostop_arrivalDate_2'], $request['outbound_twostop_arrivalDate_3'], $request['outbound_twostop_departure_1'], $request['outbound_twostop_departure_2'], $request['outbound_twostop_departure_3'], $request['outbound_twostop_arrival_1'], $request['outbound_twostop_arrival_2'], $request['outbound_twostop_arrival_3'], $request['outbound_twostop_departureDate_1'], $request['outbound_twostop_departureDate_2'], $request['outbound_twostop_departureDate_3'], $request['outbound_twostop_departureTime_1'], $request['outbound_twostop_departureTime_2'], $request['outbound_twostop_departureTime_3'], $request['outbound_twostop_flightNumber_1'], $request['outbound_twostop_flightNumber_2'], $request['outbound_twostop_flightNumber_3'], $request['outbound_twostop_bookingClass_1'], $request['outbound_twostop_bookingClass_2'], $request['outbound_twostop_bookingClass_3'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);

            $domesticInboundNonstop = $this->OnewayNonstop($request['inbound_nonstop_marketingCompany'], $request['inbound_nonstop_operatingCompany'], $request['inbound_nonstop_arrivalingTime'], $request['inbound_nonstop_arrivalDate'], $request['inbound_nonstop_departure'], $request['inbound_nonstop_arrival'], $request['inbound_nonstop_departureDate'], $request['inbound_nonstop_departureTime'], $request['inbound_nonstop_flightNumber'], $request['inbound_nonstop_bookingClass'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);

            if ($domesticOutboundTwostop['sellResult']->status === Result::STATUS_OK && $domesticOutboundTwostop['fareInformative']->status === Result::STATUS_OK && $domesticInboundNonstop['sellResult']->status === Result::STATUS_OK && $domesticInboundNonstop['fareInformative']->status === Result::STATUS_OK) {

                $roundtripTwostopNonstop = (object) ['itineraryDetails' => [$domesticOutboundTwostop['sellResult']->response->itineraryDetails, $domesticInboundNonstop['sellResult']->response->itineraryDetails]];
                $fare = ['fareOutbound' => $domesticOutboundTwostop['fareInformative']->response, 'fareInbound' => $domesticInboundNonstop['fareInformative']->response];
                $getsession = ['sessionOutbound' => $domesticOutboundTwostop['getsession'], 'sessionInbound' => $domesticInboundNonstop['getsession']];
                $otherInformation = ['otherInfoOutbound' => $domesticOutboundTwostop['otherInformation'], 'otherInfoInbound' => $domesticInboundNonstop['otherInformation']];

                return view('flight-pages.roundtrip-flight-pages.domestic-flight-pages.flight-review', compact('roundtripTwostopNonstop', 'travellers', 'fare', 'otherInformation', 'getsession' , 'code' , 'cvalue'));
            } else {

                return redirect()->route('error')->with('message', $sellResult->messages[0]->text);
            }
        } elseif (isset($request['dom_outbound_twostop']) && isset($request['dom_inbound_onestop'])) {
            $domesticOutboundTwostop = $this->OnewayTwostop($request['outbound_twostop_marketingCompany_1'], $request['outbound_twostop_marketingCompany_2'], $request['outbound_twostop_marketingCompany_3'], $request['outbound_twostop_operatingCompany_1'], $request['outbound_twostop_operatingCompany_2'], $request['outbound_twostop_operatingCompany_3'], $request['outbound_twostop_arrivalingTime'], $request['outbound_twostop_arrivalDate_1'], $request['outbound_twostop_arrivalDate_2'], $request['outbound_twostop_arrivalDate_3'], $request['outbound_twostop_departure_1'], $request['outbound_twostop_departure_2'], $request['outbound_twostop_departure_3'], $request['outbound_twostop_arrival_1'], $request['outbound_twostop_arrival_2'], $request['outbound_twostop_arrival_3'], $request['outbound_twostop_departureDate_1'], $request['outbound_twostop_departureDate_2'], $request['outbound_twostop_departureDate_3'], $request['outbound_twostop_departureTime_1'], $request['outbound_twostop_departureTime_2'], $request['outbound_twostop_departureTime_3'], $request['outbound_twostop_flightNumber_1'], $request['outbound_twostop_flightNumber_2'], $request['outbound_twostop_flightNumber_3'], $request['outbound_twostop_bookingClass_1'], $request['outbound_twostop_bookingClass_2'], $request['outbound_twostop_bookingClass_3'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);

            $domesticInboundOnestop = $this->OnewayOnestop($request['inbound_onestop_marketingCompany_1'], $request['inbound_onestop_marketingCompany_2'], $request['inbound_onestop_operatingCompany_1'], $request['inbound_onestop_operatingCompany_2'], $request['inbound_onestop_arrivalingTime'], $request['inbound_onestop_arrivalDate_1'], $request['inbound_onestop_arrivalDate_2'], $request['inbound_onestop_departure_1'], $request['inbound_onestop_departure_2'], $request['inbound_onestop_arrival_1'], $request['inbound_onestop_arrival_2'], $request['inbound_onestop_departureDate_1'], $request['inbound_onestop_departureDate_2'], $request['inbound_onestop_departureTime_1'], $request['inbound_onestop_departureTime_2'], $request['inbound_onestop_flightNumber_1'], $request['inbound_onestop_flightNumber_2'], $request['inbound_onestop_bookingClass_1'], $request['inbound_onestop_bookingClass_2'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);

            if ($domesticOutboundTwostop['sellResult']->status === Result::STATUS_OK && $domesticOutboundTwostop['fareInformative']->status === Result::STATUS_OK && $domesticInboundOnestop['sellResult']->status === Result::STATUS_OK && $domesticInboundOnestop['fareInformative']->status === Result::STATUS_OK) {

                $roundtripTwostopOnestop = (object) ['itineraryDetails' => [$domesticOutboundTwostop['sellResult']->response->itineraryDetails, $domesticInboundOnestop['sellResult']->response->itineraryDetails]];
                $fare = ['fareOutbound' => $domesticOutboundTwostop['fareInformative']->response, 'fareInbound' => $domesticInboundOnestop['fareInformative']->response];
                $getsession = ['sessionOutbound' => $domesticOutboundTwostop['getsession'], 'sessionInbound' => $domesticInboundOnestop['getsession']];
                $otherInformation = ['otherInfoOutbound' => $domesticOutboundTwostop['otherInformation'], 'otherInfoInbound' => $domesticInboundOnestop['otherInformation']];

                return view('flight-pages.roundtrip-flight-pages.domestic-flight-pages.flight-review', compact('roundtripTwostopOnestop', 'travellers', 'fare', 'otherInformation', 'getsession' , 'code' , 'cvalue'));
            } else {

                return redirect()->route('error')->with('message', $domesticInboundOnestop['sellResult']->messages[0]->text);
            }
        } elseif (isset($request['dom_outbound_twostop']) && isset($request['dom_inbound_twostop'])) {

            $domesticOutboundTwostop = $this->OnewayTwostop($request['outbound_twostop_marketingCompany_1'], $request['outbound_twostop_marketingCompany_2'], $request['outbound_twostop_marketingCompany_3'], $request['outbound_twostop_operatingCompany_1'], $request['outbound_twostop_operatingCompany_2'], $request['outbound_twostop_operatingCompany_3'], $request['outbound_twostop_arrivalingTime'], $request['outbound_twostop_arrivalDate_1'], $request['outbound_twostop_arrivalDate_2'], $request['outbound_twostop_arrivalDate_3'], $request['outbound_twostop_departure_1'], $request['outbound_twostop_departure_2'], $request['outbound_twostop_departure_3'], $request['outbound_twostop_arrival_1'], $request['outbound_twostop_arrival_2'], $request['outbound_twostop_arrival_3'], $request['outbound_twostop_departureDate_1'], $request['outbound_twostop_departureDate_2'], $request['outbound_twostop_departureDate_3'], $request['outbound_twostop_departureTime_1'], $request['outbound_twostop_departureTime_2'], $request['outbound_twostop_departureTime_3'], $request['outbound_twostop_flightNumber_1'], $request['outbound_twostop_flightNumber_2'], $request['outbound_twostop_flightNumber_3'], $request['outbound_twostop_bookingClass_1'], $request['outbound_twostop_bookingClass_2'], $request['outbound_twostop_bookingClass_3'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);

            $domesticInboundTwostop = $this->OnewayTwostop($request['inbound_twostop_marketingCompany_1'], $request['inbound_twostop_marketingCompany_2'], $request['inbound_twostop_marketingCompany_3'], $request['inbound_twostop_operatingCompany_1'], $request['inbound_twostop_operatingCompany_2'], $request['inbound_twostop_operatingCompany_3'], $request['inbound_twostop_arrivalingTime'], $request['inbound_twostop_arrivalDate_1'], $request['inbound_twostop_arrivalDate_2'], $request['inbound_twostop_arrivalDate_3'], $request['inbound_twostop_departure_1'], $request['inbound_twostop_departure_2'], $request['inbound_twostop_departure_3'], $request['inbound_twostop_arrival_1'], $request['inbound_twostop_arrival_2'], $request['inbound_twostop_arrival_3'], $request['inbound_twostop_departureDate_1'], $request['inbound_twostop_departureDate_2'], $request['inbound_twostop_departureDate_3'], $request['inbound_twostop_departureTime_1'], $request['inbound_twostop_departureTime_2'], $request['inbound_twostop_departureTime_3'], $request['inbound_twostop_flightNumber_1'], $request['inbound_twostop_flightNumber_2'], $request['inbound_twostop_flightNumber_3'], $request['inbound_twostop_bookingClass_1'], $request['inbound_twostop_bookingClass_2'], $request['inbound_twostop_bookingClass_3'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);

            if ($domesticOutboundTwostop['sellResult']->status === Result::STATUS_OK && $domesticOutboundTwostop['fareInformative']->status === Result::STATUS_OK && $domesticInboundTwostop['sellResult']->status === Result::STATUS_OK && $domesticInboundTwostop['fareInformative']->status === Result::STATUS_OK) {

                $roundtripTwostopTwostop = (object) ['itineraryDetails' => [$domesticOutboundTwostop['sellResult']->response->itineraryDetails, $domesticInboundTwostop['sellResult']->response->itineraryDetails]];
                $fare = ['fareOutbound' => $domesticOutboundTwostop['fareInformative']->response, 'fareInbound' => $domesticInboundTwostop['fareInformative']->response];
                $getsession = ['sessionOutbound' => $domesticOutboundTwostop['getsession'], 'sessionInbound' => $domesticInboundTwostop['getsession']];
                $otherInformation = ['otherInfoOutbound' => $domesticOutboundTwostop['otherInformation'], 'otherInfoInbound' => $domesticInboundTwostop['otherInformation']];

                return view('flight-pages.roundtrip-flight-pages.domestic-flight-pages.flight-review', compact('roundtripTwostopTwostop', 'travellers', 'fare', 'otherInformation', 'getsession' , 'code' , 'cvalue'));
            } else {

                return redirect()->route('error')->with('message', $sellResult->messages[0]->text);
            }
        } elseif (isset($request['dom_gl_outbound_nonstop']) && isset($request['dom_gl_inbound_nonstop'])) {

            $gl_outbound_nonstop = $this->GlOnestopReview($request['OutboundSessionID'], $request['OutboundKey'], $request['OutboundPricingkey'], $request['OutboundResultIndex'], $request['OutboundProvider']);
            
            $gl_inbound_nonstop = $this->GlOnestopReview($request['InboundSessionID'], $request['InboundKey'], $request['InboundPricingkey'], $request['InboundResultIndex'], $request['InboundProvider']);

            $GlRoundtripNonstopNonstop = [$gl_outbound_nonstop, $gl_inbound_nonstop];


            $Sessions = ['OutboundSessionID' => $request['OutboundSessionID'], 'InboundSessionID' => $request['InboundSessionID']];


            if ($gl_outbound_nonstop['Status'] == "Success" && $gl_inbound_nonstop['Status'] == "Success") {

                return view('flight-pages.roundtrip-flight-pages.domestic-flight-pages.flight-gl-review', compact('GlRoundtripNonstopNonstop', 'travellers', 'Sessions' ,'code' , 'cvalue'));
            } else {

                return redirect()->route('error')->with('message', $sellResult->messages[0]->text);
            }
        } elseif (isset($request['dom_gl_outbound_nonstop']) && isset($request['dom_gl_inbound_onestop'])) {

            $gl_outbound_nonstop = $this->GlOnestopReview($request['OutboundSessionID'], $request['OutboundKey'], $request['OutboundPricingkey'], $request['OutboundResultIndex'], $request['OutboundProvider']);

            $gl_inbound_onestop = $this->GlOnestopReview($request['InboundSessionID'], $request['InboundKey'], $request['InboundPricingkey'], $request['InboundResultIndex'], $request['InboundProvider']);

            $GlRoundtripNonstopOnestop = [$gl_outbound_nonstop, $gl_inbound_onestop];

            $Sessions = ['OutboundSessionID' => $request['OutboundSessionID'], 'InboundSessionID' => $request['InboundSessionID']];

            if ($gl_outbound_nonstop['Status'] == "Success" && $gl_inbound_onestop['Status'] == "Success") {

                return view('flight-pages.roundtrip-flight-pages.domestic-flight-pages.flight-gl-review', compact('GlRoundtripNonstopOnestop', 'travellers', 'Sessions' , 'code' , 'cvalue'));
            } else {

                return redirect()->route('error')->with('message', "someting wrong???");
            }
        } elseif (isset($request['dom_gl_outbound_onestop']) && isset($request['dom_gl_inbound_nonstop'])) {
            
            
            
            $gl_outbound_onestop = $this->GlOnestopReview($request['OutboundSessionID'], $request['OutboundKey'], $request['OutboundPricingkey'], $request['OutboundResultIndex'], $request['OutboundProvider']);

            $gl_inbound_nonstop = $this->GlOnestopReview($request['InboundSessionID'], $request['InboundKey'], $request['InboundPricingkey'], $request['InboundResultIndex'], $request['InboundProvider']);

            $GlRoundtripOnestopNonstop = [$gl_outbound_onestop, $gl_inbound_nonstop];
            //($GlRoundtripOnestopNonstop);
            $Sessions = ['OutboundSessionID' => $request['OutboundSessionID'], 'InboundSessionID' => $request['InboundSessionID']];

            if ($gl_outbound_onestop['Status'] == "Success" && $gl_inbound_nonstop['Status'] == "Success") {

                return view('flight-pages.roundtrip-flight-pages.domestic-flight-pages.flight-gl-review', compact('GlRoundtripOnestopNonstop', 'travellers', 'Sessions' , 'code' , 'cvalue'));
            } else {

                return redirect()->route('error')->with('message', $sellResult->messages[0]->text);
            }
        } elseif (isset($request['dom_gl_outbound_onestop']) && isset($request['dom_gl_inbound_onestop'])) {

            $gl_outbound_onestop = $this->GlOnestopReview($request['OutboundSessionID'], $request['OutboundKey'], $request['OutboundPricingkey'], $request['OutboundResultIndex'], $request['OutboundProvider']);

            $gl_inbound_onestop = $this->GlOnestopReview($request['InboundSessionID'], $request['InboundKey'], $request['InboundPricingkey'], $request['InboundResultIndex'], $request['InboundProvider']);

            $GlRoundtripOnestopOnestop = [$gl_outbound_onestop, $gl_inbound_onestop];


            $Sessions = ['OutboundSessionID' => $request['OutboundSessionID'], 'InboundSessionID' => $request['InboundSessionID']];


            if (print_r($gl_outbound_onestop['Status'] == "Success" && $gl_inbound_onestop['Status'] == "Success")) {

                return view('flight-pages.roundtrip-flight-pages.domestic-flight-pages.flight-gl-review', compact('GlRoundtripOnestopOnestop', 'travellers', 'Sessions' ,'code' , 'cvalue'));
            } else {

                return redirect()->route('error')->with('message', $sellResult->messages[0]->text);
            }
        } elseif (isset($request['dom_gl_outbound_nonstop']) && isset($request['dom_inbound_nonstop'])) {

            $dom_gl_outbound_nonstop = $this->GlOnestopReview($request['OutboundSessionID'], $request['OutboundKey'], $request['OutboundPricingkey'], $request['OutboundResultIndex'], $request['OutboundProvider']);
            $dom_inbound_nonstop = $this->OnewayNonstop($request['inbound_nonstop_marketingCompany'], $request['inbound_nonstop_operatingCompany'], $request['inbound_nonstop_arrivalingTime'], $request['inbound_nonstop_arrivalDate'], $request['inbound_nonstop_departure'], $request['inbound_nonstop_arrival'], $request['inbound_nonstop_departureDate'], $request['inbound_nonstop_departureTime'], $request['inbound_nonstop_flightNumber'], $request['inbound_nonstop_bookingClass'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);
            $SessionID = $request['OutboundSessionID'];
            if ($dom_inbound_nonstop['sellResult']->status === Result::STATUS_OK && $dom_gl_outbound_nonstop['Status'] === "Success" && $dom_inbound_nonstop['fareInformative']->status === Result::STATUS_OK) {

                $MixRoundtripGalNonstopAmdNonstop =  [$dom_gl_outbound_nonstop, $dom_inbound_nonstop];

                return view('flight-pages.roundtrip-flight-pages.domestic-flight-pages.flight-mix-review', compact('MixRoundtripGalNonstopAmdNonstop', 'SessionID', 'travellers' ,'code' , 'cvalue'));
            } else {

                return redirect()->route('error')->with('message', 'Something Error Galelio And Amadues');
            }
        } elseif (isset($request['dom_gl_outbound_nonstop']) && isset($request['dom_inbound_onestop'])) {

            $dom_gl_outbound_nonstop = $this->GlOnestopReview($request['OutboundSessionID'], $request['OutboundKey'], $request['OutboundPricingkey'], $request['OutboundResultIndex'], $request['OutboundProvider']);
            $dom_inbound_onestop = $this->OnewayOnestop($request['inbound_onestop_marketingCompany_1'], $request['inbound_onestop_marketingCompany_2'], $request['inbound_onestop_operatingCompany_1'], $request['inbound_onestop_operatingCompany_2'], $request['inbound_onestop_arrivalingTime'], $request['inbound_onestop_arrivalDate_1'], $request['inbound_onestop_arrivalDate_2'], $request['inbound_onestop_departure_1'], $request['inbound_onestop_departure_2'], $request['inbound_onestop_arrival_1'], $request['inbound_onestop_arrival_2'], $request['inbound_onestop_departureDate_1'], $request['inbound_onestop_departureDate_2'], $request['inbound_onestop_departureTime_1'], $request['inbound_onestop_departureTime_2'], $request['inbound_onestop_flightNumber_1'], $request['inbound_onestop_flightNumber_2'], $request['inbound_onestop_bookingClass_1'], $request['inbound_onestop_bookingClass_2'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);
            $SessionID = $request['OutboundSessionID'];

            if ($dom_inbound_onestop['sellResult']->status === Result::STATUS_OK && $dom_gl_outbound_nonstop['Status'] === "Success" && $dom_inbound_onestop['fareInformative']->status === Result::STATUS_OK) {

                $MixRoundtripGalNonstopAmdOnestop = [$dom_gl_outbound_nonstop, $dom_inbound_onestop];

                return view('flight-pages.roundtrip-flight-pages.domestic-flight-pages.flight-mix-review', compact('MixRoundtripGalNonstopAmdOnestop', 'SessionID', 'travellers' ,'code' , 'cvalue'));
            } else {

                return redirect()->route('error')->with('message', 'Something Error Galelio And Amadues');
            }
        } elseif (isset($request['dom_gl_outbound_nonstop']) && isset($request['dom_inbound_twostop'])) {
            $dom_gl_outbound_nonstop = $this->GlOnestopReview($request['OutboundSessionID'], $request['OutboundKey'], $request['OutboundPricingkey'], $request['OutboundResultIndex'], $request['OutboundProvider']);
            $dom_inbound_twostop = $this->OnewayTwostop($request['inbound_twostop_marketingCompany_1'], $request['inbound_twostop_marketingCompany_2'], $request['inbound_twostop_marketingCompany_3'], $request['inbound_twostop_operatingCompany_1'], $request['inbound_twostop_operatingCompany_2'], $request['inbound_twostop_operatingCompany_3'], $request['inbound_twostop_arrivalingTime'], $request['inbound_twostop_arrivalDate_1'], $request['inbound_twostop_arrivalDate_2'], $request['inbound_twostop_arrivalDate_3'], $request['inbound_twostop_departure_1'], $request['inbound_twostop_departure_2'], $request['inbound_twostop_departure_3'], $request['inbound_twostop_arrival_1'], $request['inbound_twostop_arrival_2'], $request['inbound_twostop_arrival_3'], $request['inbound_twostop_departureDate_1'], $request['inbound_twostop_departureDate_2'], $request['inbound_twostop_departureDate_3'], $request['inbound_twostop_departureTime_1'], $request['inbound_twostop_departureTime_2'], $request['inbound_twostop_departureTime_3'], $request['inbound_twostop_flightNumber_1'], $request['inbound_twostop_flightNumber_2'], $request['inbound_twostop_flightNumber_3'], $request['inbound_twostop_bookingClass_1'], $request['inbound_twostop_bookingClass_2'], $request['inbound_twostop_bookingClass_3'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);
            $SessionID = $request['OutboundSessionID'];

            if ($dom_inbound_twostop['sellResult']->status === Result::STATUS_OK && $dom_gl_outbound_nonstop['Status'] === "Success" && $dom_inbound_twostop['fareInformative']->status === Result::STATUS_OK) {

                $MixRoundtripGalNonstopAmdTwostop = [$dom_gl_outbound_nonstop, $dom_inbound_twostop];

                return view('flight-pages.roundtrip-flight-pages.domestic-flight-pages.flight-mix-review', compact('MixRoundtripGalNonstopAmdTwostop', 'SessionID', 'travellers' ,'code' , 'cvalue'));
            } else {

                return redirect()->route('error')->with('message', 'Something Error Galelio And Amadues');
            }
        } elseif (isset($request['dom_outbound_nonstop']) && isset($request['dom_gl_inbound_nonstop'])) {

            $dom_outbound_nonstop = $this->OnewayNonstop($request['outbound_nonstop_marketingCompany'], $request['outbound_nonstop_operatingCompany'], $request['outbound_nonstop_arrivalingTime'], $request['outbound_nonstop_arrivalDate'], $request['outbound_nonstop_departure'], $request['outbound_nonstop_arrival'], $request['outbound_nonstop_departureDate'], $request['outbound_nonstop_departureTime'], $request['outbound_nonstop_flightNumber'], $request['outbound_nonstop_bookingClass'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);
            $dom_gl_inbound_nonstop = $this->GlOnestopReview($request['InboundSessionID'], $request['InboundKey'], $request['InboundPricingkey'], $request['InboundResultIndex'], $request['InboundProvider']);
            $SessionID = $request['InboundSessionID'];

            if ($dom_outbound_nonstop['sellResult']->status === Result::STATUS_OK && $dom_gl_inbound_nonstop['Status'] === "Success" && $dom_outbound_nonstop['fareInformative']->status === Result::STATUS_OK) {

                $MixRoundtripAmdNonstopGalNonstop = [$dom_outbound_nonstop, $dom_gl_inbound_nonstop];

                return view('flight-pages.roundtrip-flight-pages.domestic-flight-pages.flight-mix-review', compact('MixRoundtripAmdNonstopGalNonstop', 'SessionID', 'travellers' ,'code' , 'cvalue'));
            } else {

                return redirect()->route('error')->with('message', 'Something Error Galelio And Amadues');
            }
        } elseif (isset($request['dom_outbound_onestop']) && isset($request['dom_gl_inbound_nonstop'])) {


            $domesticOutboundOnestop = $this->OnewayOnestop($request['outbound_onestop_marketingCompany_1'], $request['outbound_onestop_marketingCompany_2'], $request['outbound_onestop_operatingCompany_1'], $request['outbound_onestop_operatingCompany_2'], $request['outbound_onestop_arrivalingTime'], $request['outbound_onestop_arrivalDate_1'], $request['outbound_onestop_arrivalDate_2'], $request['outbound_onestop_departure_1'], $request['outbound_onestop_departure_2'], $request['outbound_onestop_arrival_1'], $request['outbound_onestop_arrival_2'], $request['outbound_onestop_departureDate_1'], $request['outbound_onestop_departureDate_2'], $request['outbound_onestop_departureTime_1'], $request['outbound_onestop_departureTime_2'], $request['outbound_onestop_flightNumber_1'], $request['outbound_onestop_flightNumber_2'], $request['outbound_onestop_bookingClass_1'], $request['outbound_onestop_bookingClass_2'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);
            $dom_gl_inbound_nonstop = $this->GlOnestopReview($request['InboundSessionID'], $request['InboundKey'], $request['InboundPricingkey'], $request['InboundResultIndex'], $request['InboundProvider']);
            $SessionID = $request['InboundSessionID'];

            if ($domesticOutboundOnestop['sellResult']->status === Result::STATUS_OK && $dom_gl_inbound_nonstop['Status'] === "Success"  && $domesticOutboundOnestop['fareInformative']->status === Result::STATUS_OK) {

                $MixRoundtripAmdOnestopGalNonstop = [$domesticOutboundOnestop, $dom_gl_inbound_nonstop];


                return view('flight-pages.roundtrip-flight-pages.domestic-flight-pages.flight-mix-review', compact('MixRoundtripAmdOnestopGalNonstop', 'SessionID', 'travellers' ,'code' , 'cvalue'));
            } else {

                return redirect()->route('error')->with('message', 'Something Error Galelio And Amadues');
            }
        } elseif (isset($request['dom_outbound_twostop']) && isset($request['dom_gl_inbound_nonstop'])) {

            $dom_outbound_twostop = $this->OnewayTwostop($request['outbound_twostop_marketingCompany_1'], $request['outbound_twostop_marketingCompany_2'], $request['outbound_twostop_marketingCompany_3'], $request['outbound_twostop_operatingCompany_1'], $request['outbound_twostop_operatingCompany_2'], $request['outbound_twostop_operatingCompany_3'], $request['outbound_twostop_arrivalingTime'], $request['outbound_twostop_arrivalDate_1'], $request['outbound_twostop_arrivalDate_2'], $request['outbound_twostop_arrivalDate_3'], $request['outbound_twostop_departure_1'], $request['outbound_twostop_departure_2'], $request['outbound_twostop_departure_3'], $request['outbound_twostop_arrival_1'], $request['outbound_twostop_arrival_2'], $request['outbound_twostop_arrival_3'], $request['outbound_twostop_departureDate_1'], $request['outbound_twostop_departureDate_2'], $request['outbound_twostop_departureDate_3'], $request['outbound_twostop_departureTime_1'], $request['outbound_twostop_departureTime_2'], $request['outbound_twostop_departureTime_3'], $request['outbound_twostop_flightNumber_1'], $request['outbound_twostop_flightNumber_2'], $request['outbound_twostop_flightNumber_3'], $request['outbound_twostop_bookingClass_1'], $request['outbound_twostop_bookingClass_2'], $request['outbound_twostop_bookingClass_3'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);
            $dom_gl_inbound_nonstop = $this->GlOnestopReview($request['InboundSessionID'], $request['InboundKey'], $request['InboundPricingkey'], $request['InboundResultIndex'], $request['InboundProvider']);
            $SessionID = $request['InboundSessionID'];

            if ($dom_outbound_twostop['sellResult']->status === Result::STATUS_OK && $dom_gl_inbound_nonstop['Status'] === "Success" && $dom_outbound_twostop['fareInformative']->status === Result::STATUS_OK) {
                $MixRoundtripAmdTwostopGalNonstop = [$dom_outbound_twostop, $dom_gl_inbound_nonstop];

                return view('flight-pages.roundtrip-flight-pages.domestic-flight-pages.flight-mix-review', compact('MixRoundtripAmdTwostopGalNonstop', 'SessionID', 'travellers' ,'code' , 'cvalue'));
            } else {

                return redirect()->route('error')->with('message', 'Something Error Galelio And Amadues');
            }
        } elseif (isset($request['dom_gl_outbound_onestop']) && isset($request['dom_inbound_nonstop'])) {

            $dom_gl_outbound_onestop = $this->GlOnestopReview($request['OutboundSessionID'], $request['OutboundKey'], $request['OutboundPricingkey'], $request['OutboundResultIndex'], $request['OutboundProvider']);
            $dom_inbound_nonstop = $this->OnewayNonstop($request['inbound_nonstop_marketingCompany'], $request['inbound_nonstop_operatingCompany'], $request['inbound_nonstop_arrivalingTime'], $request['inbound_nonstop_arrivalDate'], $request['inbound_nonstop_departure'], $request['inbound_nonstop_arrival'], $request['inbound_nonstop_departureDate'], $request['inbound_nonstop_departureTime'], $request['inbound_nonstop_flightNumber'], $request['inbound_nonstop_bookingClass'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);
            $SessionID = $request['OutboundSessionID'];

            if ($dom_inbound_nonstop['sellResult']->status === Result::STATUS_OK && $dom_gl_outbound_onestop['Status'] === "Success" && $dom_inbound_nonstop['fareInformative']->status === Result::STATUS_OK) {

                $MixRoundtripGalOnestopAmdNonstop = [$dom_gl_outbound_onestop, $dom_inbound_nonstop];

                return view('flight-pages.roundtrip-flight-pages.domestic-flight-pages.flight-mix-review', compact('MixRoundtripGalOnestopAmdNonstop', 'SessionID', 'travellers' ,'code' , 'cvalue'));
            } else {

                return redirect()->route('error')->with('message', 'Something Error Galelio And Amadues');
            }
        } elseif (isset($request['dom_gl_outbound_onestop']) && isset($request['dom_inbound_onestop'])) {

            $dom_gl_outbound_onestop = $this->GlOnestopReview($request['OutboundSessionID'], $request['OutboundKey'], $request['OutboundPricingkey'], $request['OutboundResultIndex'], $request['OutboundProvider']);
            $dom_inbound_onestop = $this->OnewayOnestop($request['inbound_onestop_marketingCompany_1'], $request['inbound_onestop_marketingCompany_2'], $request['inbound_onestop_operatingCompany_1'], $request['inbound_onestop_operatingCompany_2'], $request['inbound_onestop_arrivalingTime'], $request['inbound_onestop_arrivalDate_1'], $request['inbound_onestop_arrivalDate_2'], $request['inbound_onestop_departure_1'], $request['inbound_onestop_departure_2'], $request['inbound_onestop_arrival_1'], $request['inbound_onestop_arrival_2'], $request['inbound_onestop_departureDate_1'], $request['inbound_onestop_departureDate_2'], $request['inbound_onestop_departureTime_1'], $request['inbound_onestop_departureTime_2'], $request['inbound_onestop_flightNumber_1'], $request['inbound_onestop_flightNumber_2'], $request['inbound_onestop_bookingClass_1'], $request['inbound_onestop_bookingClass_2'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);
            $SessionID = $request['OutboundSessionID'];

            if ($dom_inbound_onestop['sellResult']->status === Result::STATUS_OK && $dom_gl_outbound_onestop['Status'] === "Success" && $dom_inbound_onestop['fareInformative']->status === Result::STATUS_OK) {

                $MixRoundtripGalOnestopAmdOnestop = [$dom_gl_outbound_onestop, $dom_inbound_onestop];

                return view('flight-pages.roundtrip-flight-pages.domestic-flight-pages.flight-mix-review', compact('MixRoundtripGalOnestopAmdOnestop', 'SessionID', 'travellers' ,'code' , 'cvalue'));
            } else {

                return redirect()->route('error')->with('message', 'Something Error Galelio And Amadues');
            }
        } elseif (isset($request['dom_gl_outbound_onestop']) && isset($request['dom_inbound_twostop'])) {

            $dom_gl_outbound_onestop = $this->GlOnestopReview($request['OutboundSessionID'], $request['OutboundKey'], $request['OutboundPricingkey'], $request['OutboundResultIndex'], $request['OutboundProvider']);
            $dom_inbound_twostop = $this->OnewayTwostop($request['inbound_twostop_marketingCompany_1'], $request['inbound_twostop_marketingCompany_2'], $request['inbound_twostop_marketingCompany_3'], $request['inbound_twostop_operatingCompany_1'], $request['inbound_twostop_operatingCompany_2'], $request['inbound_twostop_operatingCompany_3'], $request['inbound_twostop_arrivalingTime'], $request['inbound_twostop_arrivalDate_1'], $request['inbound_twostop_arrivalDate_2'], $request['inbound_twostop_arrivalDate_3'], $request['inbound_twostop_departure_1'], $request['inbound_twostop_departure_2'], $request['inbound_twostop_departure_3'], $request['inbound_twostop_arrival_1'], $request['inbound_twostop_arrival_2'], $request['inbound_twostop_arrival_3'], $request['inbound_twostop_departureDate_1'], $request['inbound_twostop_departureDate_2'], $request['inbound_twostop_departureDate_3'], $request['inbound_twostop_departureTime_1'], $request['inbound_twostop_departureTime_2'], $request['inbound_twostop_departureTime_3'], $request['inbound_twostop_flightNumber_1'], $request['inbound_twostop_flightNumber_2'], $request['inbound_twostop_flightNumber_3'], $request['inbound_twostop_bookingClass_1'], $request['inbound_twostop_bookingClass_2'], $request['inbound_twostop_bookingClass_3'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);
            $SessionID = $request['OutboundSessionID'];

            if ($dom_inbound_twostop['sellResult']->status === Result::STATUS_OK && $dom_gl_outbound_onestop['Status'] === "Success" && $dom_inbound_twostop['fareInformative']->status === Result::STATUS_OK) {

                $MixRoundtripGalOnestopAmdTwostop = [$dom_gl_outbound_onestop, $dom_inbound_twostop];

                return view('flight-pages.roundtrip-flight-pages.domestic-flight-pages.flight-mix-review', compact('MixRoundtripGalOnestopAmdTwostop', 'SessionID', 'travellers' ,'code' , 'cvalue'));
            } else {

                return redirect()->route('error')->with('message', 'Something Error Galelio And Amadues');
            }
        } elseif (isset($request['dom_outbound_nonstop']) && isset($request['dom_gl_inbound_onestop'])) {

            $dom_outbound_nonstop = $this->OnewayNonstop($request['outbound_nonstop_marketingCompany'], $request['outbound_nonstop_operatingCompany'], $request['outbound_nonstop_arrivalingTime'], $request['outbound_nonstop_arrivalDate'], $request['outbound_nonstop_departure'], $request['outbound_nonstop_arrival'], $request['outbound_nonstop_departureDate'], $request['outbound_nonstop_departureTime'], $request['outbound_nonstop_flightNumber'], $request['outbound_nonstop_bookingClass'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);
            $dom_gl_inbound_onestop = $this->GlOnestopReview($request['InboundSessionID'], $request['InboundKey'], $request['InboundPricingkey'], $request['InboundResultIndex'], $request['InboundProvider']);
            $SessionID = $request['InboundSessionID'];

            if ($dom_outbound_nonstop['sellResult']->status === Result::STATUS_OK && $dom_gl_inbound_onestop['Status'] === "Success" && $dom_outbound_nonstop['fareInformative']->status === Result::STATUS_OK) {

                $MixRoundtripAmdNonstopGalOnestop = [$dom_outbound_nonstop, $dom_gl_inbound_onestop];

                return view('flight-pages.roundtrip-flight-pages.domestic-flight-pages.flight-mix-review', compact('MixRoundtripAmdNonstopGalOnestop', 'SessionID', 'travellers','code' , 'cvalue'));
            } else {

                return redirect()->route('error')->with('message', 'Something Error Galelio And Amadues');
            }
        } elseif (isset($request['dom_outbound_onestop']) && isset($request['dom_gl_inbound_onestop'])) {

            $dom_outbound_onestop = $this->OnewayOnestop($request['outbound_onestop_marketingCompany_1'], $request['outbound_onestop_marketingCompany_2'], $request['outbound_onestop_operatingCompany_1'], $request['outbound_onestop_operatingCompany_2'], $request['outbound_onestop_arrivalingTime'], $request['outbound_onestop_arrivalDate_1'], $request['outbound_onestop_arrivalDate_2'], $request['outbound_onestop_departure_1'], $request['outbound_onestop_departure_2'], $request['outbound_onestop_arrival_1'], $request['outbound_onestop_arrival_2'], $request['outbound_onestop_departureDate_1'], $request['outbound_onestop_departureDate_2'], $request['outbound_onestop_departureTime_1'], $request['outbound_onestop_departureTime_2'], $request['outbound_onestop_flightNumber_1'], $request['outbound_onestop_flightNumber_2'], $request['outbound_onestop_bookingClass_1'], $request['outbound_onestop_bookingClass_2'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);
            $dom_gl_inbound_onestop = $this->GlOnestopReview($request['InboundSessionID'], $request['InboundKey'], $request['InboundPricingkey'], $request['InboundResultIndex'], $request['InboundProvider']);
            $SessionID = $request['InboundSessionID'];

            if ($dom_outbound_onestop['sellResult']->status === Result::STATUS_OK && $dom_gl_inbound_onestop['Status'] === "Success" && $dom_outbound_onestop['fareInformative']->status === Result::STATUS_OK) {

                $MixRoundtripAmdOnestopGalOnestop = [$dom_outbound_onestop, $dom_gl_inbound_onestop];

                return view('flight-pages.roundtrip-flight-pages.domestic-flight-pages.flight-mix-review', compact('MixRoundtripAmdOnestopGalOnestop', 'SessionID', 'travellers','code' , 'cvalue'));
            } else {

                return redirect()->route('error')->with('message', 'Something Error Galelio And Amadues');
            }
        } elseif (isset($request['dom_outbound_twostop']) && isset($request['dom_gl_inbound_onestop'])) {

            $dom_outbound_twostop = $this->OnewayTwostop($request['outbound_twostop_marketingCompany_1'], $request['outbound_twostop_marketingCompany_2'], $request['outbound_twostop_marketingCompany_3'], $request['outbound_twostop_operatingCompany_1'], $request['outbound_twostop_operatingCompany_2'], $request['outbound_twostop_operatingCompany_3'], $request['outbound_twostop_arrivalingTime'], $request['outbound_twostop_arrivalDate_1'], $request['outbound_twostop_arrivalDate_2'], $request['outbound_twostop_arrivalDate_3'], $request['outbound_twostop_departure_1'], $request['outbound_twostop_departure_2'], $request['outbound_twostop_departure_3'], $request['outbound_twostop_arrival_1'], $request['outbound_twostop_arrival_2'], $request['outbound_twostop_arrival_3'], $request['outbound_twostop_departureDate_1'], $request['outbound_twostop_departureDate_2'], $request['outbound_twostop_departureDate_3'], $request['outbound_twostop_departureTime_1'], $request['outbound_twostop_departureTime_2'], $request['outbound_twostop_departureTime_3'], $request['outbound_twostop_flightNumber_1'], $request['outbound_twostop_flightNumber_2'], $request['outbound_twostop_flightNumber_3'], $request['outbound_twostop_bookingClass_1'], $request['outbound_twostop_bookingClass_2'], $request['outbound_twostop_bookingClass_3'], $request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);
            $gl_inbound_onestop = $this->GlOnestopReview($request['InboundSessionID'], $request['InboundKey'], $request['InboundPricingkey'], $request['InboundResultIndex'], $request['InboundProvider']);
            $SessionID = $request['InboundSessionID'];

            if ($dom_outbound_twostop['sellResult']->status === Result::STATUS_OK && $dom_gl_inbound_onestop['Status'] === "Success" && $dom_outbound_twostop['fareInformative']->status === Result::STATUS_OK) {

                $MixRoundtripAmdTwostopGalOnestop = [$dom_outbound_twostop, $dom_gl_inbound_onestop];

                return view('flight-pages.roundtrip-flight-pages.domestic-flight-pages.flight-mix-review', compact('MixRoundtripAmdTwostopGalOnestop', 'SessionID', 'travellers','code' , 'cvalue'));
            } else {

                return redirect()->route('error')->with('message', 'Something Error Galelio And Amadues');
            }
        } elseif (isset($request['roundtrip_outbound_nonstop']) && isset($request['roundtrip_inbound_nonstop'])) {

            $otherInformation = ['outbound_marketingCompany' => $request['outbound_nonstop_marketingCompany'], 'outbound_operatingCompany' => $request['outbound_nonstop_operatingCompany'], 'outbound_arrivalingTime' => $request['outbound_nonstop_arrivalingTime'], 'outbound_arrivalDate' => $request['outbound_nonstop_arrivalDate'], 'inbound_marketingCompany' => $request['inbound_nonstop_marketingCompany'], 'inbound_operatingCompany' => $request['inbound_nonstop_operatingCompany'], 'inbound_arrivalingTime' => $request['inbound_nonstop_arrivalingTime'], 'inbound_arrivalDate' => $request['inbound_nonstop_arrivalDate']];

            $opt = new AirSellFromRecommendationOptions([
                'itinerary' => [
                    new Itinerary([
                        'from' => $request['outbound_nonstop_departure'],
                        'to' => $request['outbound_nonstop_arrival'],
                        'segments' => [
                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['outbound_nonstop_departureDate'], new \DateTimeZone('UTC')),
                                'arrivalDate' => \DateTime::createFromFormat('dmy', $request['outbound_nonstop_arrivalDate'], new \DateTimeZone('UTC')),
                                'from' => $request['outbound_nonstop_departure'],
                                'to' => $request['outbound_nonstop_arrival'],
                                'companyCode' => $request['outbound_nonstop_marketingCompany'],
                                'flightNumber' => $request['outbound_nonstop_flightNumber'],
                                'bookingClass' => $request['outbound_nonstop_bookingClass'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),

                        ],
                    ]),
                    new Itinerary([
                        'from' => $request['inbound_nonstop_departure'],
                        'to' => $request['inbound_nonstop_arrival'],
                        'segments' => [
                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['inbound_nonstop_departureDate'], new \DateTimeZone('UTC')),
                                'arrivalDate' => \DateTime::createFromFormat('dmy', $request['inbound_nonstop_arrivalDate'], new \DateTimeZone('UTC')),
                                'from' => $request['inbound_nonstop_departure'],
                                'to' => $request['inbound_nonstop_arrival'],
                                'companyCode' => $request['inbound_nonstop_marketingCompany'],
                                'flightNumber' => $request['inbound_nonstop_flightNumber'],
                                'bookingClass' => $request['inbound_nonstop_bookingClass'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),
                        ],
                    ]),
                ],
            ]);

            $sellResult = $client->airSellFromRecommendation($opt);

            if ($sellResult->status === Result::STATUS_OK) {

                $passengers = $this->passenger($request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);
                $getsession = $client->getSessionData();

                $informative = new FareInformativePricingWithoutPnrOptions([
                    'passengers' => $passengers,
                    'segments' => [
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['outbound_nonstop_departureDate'] . " " . $request['outbound_nonstop_departureTime']),
                            'from' => $request['outbound_nonstop_departure'],
                            'to' => $request['outbound_nonstop_arrival'],
                            'marketingCompany' => $request['outbound_nonstop_marketingCompany'],
                            'operatingCompany' => $request['outbound_nonstop_operatingCompany'],
                            'flightNumber' => $request['outbound_nonstop_flightNumber'],
                            'bookingClass' => $request['outbound_nonstop_bookingClass'],
                            'segmentTattoo' => 1,
                            'groupNumber' => 1,
                        ]),
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['inbound_nonstop_departureDate'] . " " . $request['inbound_nonstop_departureTime']),
                            'from' => $request['inbound_nonstop_departure'],
                            'to' => $request['inbound_nonstop_arrival'],
                            'marketingCompany' => $request['inbound_nonstop_marketingCompany'],
                            'operatingCompany' => $request['inbound_nonstop_operatingCompany'],
                            'flightNumber' => $request['inbound_nonstop_flightNumber'],
                            'bookingClass' => $request['inbound_nonstop_bookingClass'],
                            'segmentTattoo' => 2,
                            'groupNumber' => 2,
                        ]),
                    ],

                ]);

                $informativePricingResponse = $clientFalse->fareInformativePricingWithoutPnr($informative);

                if ($informativePricingResponse->status === Result::STATUS_OK) {
                    $roundtripNonstopNonstop = $sellResult->response;

                    $fare = $informativePricingResponse->response;

                    return view('flight-pages.roundtrip-flight-pages.internation-flight-pages.flight-review', compact('roundtripNonstopNonstop', 'travellers', 'fare', 'otherInformation', 'getsession','code' , 'cvalue'));
                } else {
                    return redirect()->route('error')->with('message', $informativePricingResponse->messages[0]->text);
                }
            } else {
                return redirect()->route('error')->with('message', $sellResult->messages[0]->text);
            }
        } elseif (isset($request['roundtrip_outbound_nonstop']) && isset($request['roundtrip_inbound_onestop'])) {

            $otherInformation = [
                'outbound_marketingCompany' => $request['outbound_nonstop_marketingCompany'],
                'outbound_operatingCompany' => $request['outbound_nonstop_operatingCompany'],
                'outbound_arrivalDate' => $request['outbound_nonstop_arrivalDate'],
                'outbound_arrivalingTime' => $request['outbound_nonstop_arrivalingTime'],
                'inbound_marketingCompany_1' => $request['inbound_onestop_marketingCompany_1'],
                'inbound_operatingCompany_1' => $request['inbound_onestop_operatingCompany_1'],
                'inbound_arrivalDate_1' => $request['inbound_onestop_arrivalDate_1'],
                'inbound_arrivalingTime' => $request['inbound_onestop_arrivalingTime'],
                'inbound_marketingCompany_2' => $request['inbound_onestop_marketingCompany_2'],
                'inbound_operatingCompany_2' => $request['inbound_onestop_operatingCompany_2'],
                'inbound_arrivalDate_2' => $request['inbound_onestop_arrivalDate_2'],
            ];

            $opt = new AirSellFromRecommendationOptions([
                'itinerary' => [
                    new Itinerary([
                        'from' => $request['outbound_nonstop_departure'],
                        'to' => $request['outbound_nonstop_arrival'],
                        'segments' => [
                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['outbound_nonstop_departureDate'], new \DateTimeZone('UTC')),
                                'from' => $request['outbound_nonstop_departure'],
                                'to' => $request['outbound_nonstop_arrival'],
                                'companyCode' => $request['outbound_nonstop_marketingCompany'],
                                'flightNumber' => $request['outbound_nonstop_flightNumber'],
                                'bookingClass' => $request['outbound_nonstop_bookingClass'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),
                        ],
                    ]),
                    new Itinerary([
                        'from' => $request['inbound_onestop_departure_1'],
                        'to' => $request['inbound_onestop_arrival_2'],
                        'segments' => [
                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['inbound_onestop_departureDate_1'], new \DateTimeZone('UTC')),
                                'from' => $request['inbound_onestop_departure_1'],
                                'to' => $request['inbound_onestop_arrival_1'],
                                'companyCode' => $request['inbound_onestop_marketingCompany_1'],
                                'flightNumber' => $request['inbound_onestop_flightNumber_1'],
                                'bookingClass' => $request['inbound_onestop_bookingClass_1'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),

                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['inbound_onestop_departureDate_2'], new \DateTimeZone('UTC')),
                                'from' => $request['inbound_onestop_departure_2'],
                                'to' => $request['inbound_onestop_arrival_2'],
                                'companyCode' => $request['inbound_onestop_marketingCompany_2'],
                                'flightNumber' => $request['inbound_onestop_flightNumber_2'],
                                'bookingClass' => $request['inbound_onestop_bookingClass_2'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),
                        ],
                    ]),
                ],
            ]);

            $sellResult = $client->airSellFromRecommendation($opt);

            if ($sellResult->status === Result::STATUS_OK) {

                $passengers = $this->passenger($request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);
                $getsession = $client->getSessionData();

                $informative = new FareInformativePricingWithoutPnrOptions([
                    'passengers' => $passengers,
                    'segments' => [
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['outbound_nonstop_departureDate'] . " " . $request['outbound_nonstop_departureTime']),
                            'from' => $request['outbound_nonstop_departure'],
                            'to' => $request['outbound_nonstop_arrival'],
                            'marketingCompany' => $request['outbound_nonstop_marketingCompany'],
                            'operatingCompany' => $request['outbound_nonstop_operatingCompany'],
                            'flightNumber' => $request['outbound_nonstop_flightNumber'],
                            'bookingClass' => $request['outbound_nonstop_bookingClass'],
                            'segmentTattoo' => 1,
                            'groupNumber' => 1,
                        ]),
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['inbound_onestop_departureDate_1'] . " " . $request['inbound_onestop_departureTime_1']),
                            'from' => $request['inbound_onestop_departure_1'],
                            'to' => $request['inbound_onestop_arrival_1'],
                            'marketingCompany' => $request['inbound_onestop_marketingCompany_1'],
                            'operatingCompany' => $request['inbound_onestop_operatingCompany_1'],
                            'flightNumber' => $request['inbound_onestop_flightNumber_1'],
                            'bookingClass' => $request['inbound_onestop_bookingClass_1'],
                            'segmentTattoo' => 2,
                            'groupNumber' => 2,
                        ]),
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['inbound_onestop_departureDate_2'] . " " . $request['inbound_onestop_departureTime_2']),
                            'from' => $request['inbound_onestop_departure_2'],
                            'to' => $request['inbound_onestop_arrival_2'],
                            'marketingCompany' => $request['inbound_onestop_marketingCompany_2'],
                            'operatingCompany' => $request['inbound_onestop_operatingCompany_2'],
                            'flightNumber' => $request['inbound_onestop_flightNumber_2'],
                            'bookingClass' => $request['inbound_onestop_bookingClass_2'],
                            'segmentTattoo' => 3,
                            'groupNumber' => 2,
                        ]),
                    ],

                ]);

                $informativePricingResponse = $clientFalse->fareInformativePricingWithoutPnr($informative);

                if ($informativePricingResponse->status === Result::STATUS_OK) {

                    $roundtripNonstopOnestop = $sellResult->response;
                    $fare = $informativePricingResponse->response;

                    return view('flight-pages.roundtrip-flight-pages.internation-flight-pages.flight-review', compact('roundtripNonstopOnestop', 'travellers', 'fare', 'otherInformation', 'getsession','code' , 'cvalue'));
                } else {
                    return redirect()->route('error')->with('message', $informativePricingResponse->messages[0]->text);
                }
            } else {
                return redirect()->route('error')->with('message', $sellResult->messages[0]->text);
            }
        } elseif (isset($request['roundtrip_outbound_onestop']) && isset($request['roundtrip_inbound_nonstop'])) {

            $otherInformation = ['outbound_marketingCompany_1' => $request['outbound_onestop_marketingCompany_1'], 'outbound_operatingCompany_1' => $request['outbound_onestop_operatingCompany_1'], 'outbound_arrivalingTime' => $request['outbound_onestop_arrivalingTime'], 'outbound_marketingCompany_2' => $request['outbound_onestop_marketingCompany_2'], 'outbound_operatingCompany_2' => $request['outbound_onestop_operatingCompany_2'], 'outbound_arrivalDate_1' => $request['outbound_onestop_arrivalDate_1'], 'outbound_arrivalDate_2' => $request['outbound_onestop_arrivalDate_2'], 'inbound_marketingCompany' => $request['inbound_nonstop_marketingCompany'], 'inbound_operatingCompany' => $request['inbound_nonstop_operatingCompany'], 'inbound_arrivalingTime' => $request['inbound_nonstop_arrivalingTime'], 'inbound_arrivalDate' => $request['inbound_nonstop_arrivalDate']];

            $opt = new AirSellFromRecommendationOptions([
                'itinerary' => [
                    new Itinerary([
                        'from' => $request['outbound_onestop_departure_1'],
                        'to' => $request['outbound_onestop_arrival_2'],
                        'segments' => [
                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['outbound_onestop_departureDate_1'], new \DateTimeZone('UTC')),
                                'from' => $request['outbound_onestop_departure_1'],
                                'to' => $request['outbound_onestop_arrival_1'],
                                'companyCode' => $request['outbound_onestop_marketingCompany_1'],
                                'flightNumber' => $request['outbound_onestop_flightNumber_1'],
                                'bookingClass' => $request['outbound_onestop_bookingClass_1'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),

                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['outbound_onestop_departureDate_2'], new \DateTimeZone('UTC')),
                                'from' => $request['outbound_onestop_departure_2'],
                                'to' => $request['outbound_onestop_arrival_2'],
                                'companyCode' => $request['outbound_onestop_marketingCompany_2'],
                                'flightNumber' => $request['outbound_onestop_flightNumber_2'],
                                'bookingClass' => $request['outbound_onestop_bookingClass_2'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),
                        ],
                    ]),
                    new Itinerary([
                        'from' => $request['inbound_nonstop_departure'],
                        'to' => $request['inbound_nonstop_arrival'],
                        'segments' => [
                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['inbound_nonstop_departureDate'], new \DateTimeZone('UTC')),
                                'from' => $request['inbound_nonstop_departure'],
                                'to' => $request['inbound_nonstop_arrival'],
                                'companyCode' => $request['inbound_nonstop_marketingCompany'],
                                'flightNumber' => $request['inbound_nonstop_flightNumber'],
                                'bookingClass' => $request['inbound_nonstop_bookingClass'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),

                        ],
                    ]),
                ],
            ]);

            $sellResult = $client->airSellFromRecommendation($opt);

            if ($sellResult->status === Result::STATUS_OK) {

                $passengers = $this->passenger($request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);
                $getsession = $client->getSessionData();

                $informative = new FareInformativePricingWithoutPnrOptions([
                    'passengers' => $passengers,
                    'segments' => [
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['outbound_onestop_departureDate_1'] . " " . $request['outbound_onestop_departureTime_1']),
                            'from' => $request['outbound_onestop_departure_1'],
                            'to' => $request['outbound_onestop_arrival_1'],
                            'marketingCompany' => $request['outbound_onestop_marketingCompany_1'],
                            'operatingCompany' => $request['outbound_onestop_operatingCompany_1'],
                            'flightNumber' => $request['outbound_onestop_flightNumber_1'],
                            'bookingClass' => $request['outbound_onestop_bookingClass_1'],
                            'segmentTattoo' => 1,
                            'groupNumber' => 1,
                        ]),
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['outbound_onestop_departureDate_2'] . " " . $request['outbound_onestop_departureTime_2']),
                            'from' => $request['outbound_onestop_departure_2'],
                            'to' => $request['outbound_onestop_arrival_2'],
                            'marketingCompany' => $request['outbound_onestop_marketingCompany_2'],
                            'operatingCompany' => $request['outbound_onestop_operatingCompany_2'],
                            'flightNumber' => $request['outbound_onestop_flightNumber_2'],
                            'bookingClass' => $request['outbound_onestop_bookingClass_2'],
                            'segmentTattoo' => 2,
                            'groupNumber' => 1,
                        ]),
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['inbound_nonstop_departureDate'] . " " . $request['inbound_nonstop_departureTime']),
                            'from' => $request['inbound_nonstop_departure'],
                            'to' => $request['inbound_nonstop_arrival'],
                            'marketingCompany' => $request['inbound_nonstop_marketingCompany'],
                            'operatingCompany' => $request['inbound_nonstop_operatingCompany'],
                            'flightNumber' => $request['inbound_nonstop_flightNumber'],
                            'bookingClass' => $request['inbound_nonstop_bookingClass'],
                            'segmentTattoo' => 3,
                            'groupNumber' => 3,
                        ]),
                    ],

                ]);

                $informativePricingResponse = $clientFalse->fareInformativePricingWithoutPnr($informative);

                if ($informativePricingResponse->status === Result::STATUS_OK) {

                    $roundtripOnestopNonstop = $sellResult->response;
                    $fare = $informativePricingResponse->response;
                    return view('flight-pages.roundtrip-flight-pages.internation-flight-pages.flight-review', compact('roundtripOnestopNonstop', 'travellers', 'fare', 'otherInformation', 'getsession','code' , 'cvalue'));
                } else {
                    return redirect()->route('error')->with('message', $informativePricingResponse->messages[0]->text);
                }
            } else {
                return redirect()->route('error')->with('message', $sellResult->messages[0]->text);
            }
        } elseif (isset($request['roundtrip_outbound_onestop']) && isset($request['roundtrip_inbound_onestop'])) {

            $otherInformation = [
                'outbound_marketingCompany_1' => $request['outbound_onestop_marketingCompany_1'],
                'outbound_operatingCompany_1' => $request['outbound_onestop_operatingCompany_1'],
                'outbound_arrivalingTime' => $request['outbound_onestop_arrivalingTime'],
                'outbound_arrivalDate_1' => $request['outbound_onestop_arrivalDate_1'],
                'outbound_marketingCompany_2' => $request['outbound_onestop_marketingCompany_2'],
                'outbound_operatingCompany_2' => $request['outbound_onestop_operatingCompany_2'],
                'outbound_arrivalDate_2' => $request['outbound_onestop_arrivalDate_2'],
                'inbound_marketingCompany_1' => $request['inbound_onestop_marketingCompany_1'],
                'inbound_operatingCompany_1' => $request['inbound_onestop_operatingCompany_1'],
                'inbound_arrivalingTime' => $request['inbound_onestop_arrivalingTime'],
                'inbound_arrivalDate_1' => $request['inbound_onestop_arrivalDate_1'],
                'inbound_marketingCompany_2' => $request['inbound_onestop_marketingCompany_2'],
                'inbound_operatingCompany_2' => $request['inbound_onestop_operatingCompany_2'],
                'inbound_arrivalDate_2' => $request['inbound_onestop_arrivalDate_2'],
            ];

            $opt = new AirSellFromRecommendationOptions([
                'itinerary' => [
                    new Itinerary([
                        'from' => $request['outbound_onestop_departure_1'],
                        'to' => $request['outbound_onestop_arrival_2'],
                        'segments' => [
                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['outbound_onestop_departureDate_1'], new \DateTimeZone('UTC')),
                                'from' => $request['outbound_onestop_departure_1'],
                                'to' => $request['outbound_onestop_arrival_1'],
                                'companyCode' => $request['outbound_onestop_marketingCompany_1'],
                                'flightNumber' => $request['outbound_onestop_flightNumber_1'],
                                'bookingClass' => $request['outbound_onestop_bookingClass_1'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),

                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['outbound_onestop_departureDate_2'], new \DateTimeZone('UTC')),
                                'from' => $request['outbound_onestop_departure_2'],
                                'to' => $request['outbound_onestop_arrival_2'],
                                'companyCode' => $request['outbound_onestop_marketingCompany_2'],
                                'flightNumber' => $request['outbound_onestop_flightNumber_2'],
                                'bookingClass' => $request['outbound_onestop_bookingClass_2'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),
                        ],
                    ]),
                    new Itinerary([
                        'from' => $request['inbound_onestop_departure_1'],
                        'to' => $request['inbound_onestop_arrival_2'],
                        'segments' => [
                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['inbound_onestop_departureDate_1'], new \DateTimeZone('UTC')),
                                'from' => $request['inbound_onestop_departure_1'],
                                'to' => $request['inbound_onestop_arrival_1'],
                                'companyCode' => $request['inbound_onestop_marketingCompany_1'],
                                'flightNumber' => $request['inbound_onestop_flightNumber_1'],
                                'bookingClass' => $request['inbound_onestop_bookingClass_1'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),

                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['inbound_onestop_departureDate_2'], new \DateTimeZone('UTC')),
                                'from' => $request['inbound_onestop_departure_2'],
                                'to' => $request['inbound_onestop_arrival_2'],
                                'companyCode' => $request['inbound_onestop_marketingCompany_2'],
                                'flightNumber' => $request['inbound_onestop_flightNumber_2'],
                                'bookingClass' => $request['inbound_onestop_bookingClass_2'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),
                        ],
                    ]),
                ],
            ]);

            $sellResult = $client->airSellFromRecommendation($opt);

            if ($sellResult->status === Result::STATUS_OK) {

                $passengers = $this->passenger($request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);
                $getsession = $client->getSessionData();

                $informative = new FareInformativePricingWithoutPnrOptions([
                    'passengers' => $passengers,
                    'segments' => [
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['outbound_onestop_departureDate_1'] . " " . $request['outbound_onestop_departureTime_1']),
                            'from' => $request['outbound_onestop_departure_1'],
                            'to' => $request['outbound_onestop_arrival_1'],
                            'marketingCompany' => $request['outbound_onestop_marketingCompany_1'],
                            'operatingCompany' => $request['outbound_onestop_operatingCompany_1'],
                            'flightNumber' => $request['outbound_onestop_flightNumber_1'],
                            'bookingClass' => $request['outbound_onestop_bookingClass_1'],
                            'segmentTattoo' => 1,
                            'groupNumber' => 1,
                        ]),
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['outbound_onestop_departureDate_2'] . " " . $request['outbound_onestop_departureTime_2']),
                            'from' => $request['outbound_onestop_departure_2'],
                            'to' => $request['outbound_onestop_arrival_2'],
                            'marketingCompany' => $request['outbound_onestop_marketingCompany_2'],
                            'operatingCompany' => $request['outbound_onestop_operatingCompany_2'],
                            'flightNumber' => $request['outbound_onestop_flightNumber_2'],
                            'bookingClass' => $request['outbound_onestop_bookingClass_2'],
                            'segmentTattoo' => 2,
                            'groupNumber' => 1,
                        ]),
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['inbound_onestop_departureDate_1'] . " " . $request['inbound_onestop_departureTime_1']),
                            'from' => $request['inbound_onestop_departure_1'],
                            'to' => $request['inbound_onestop_arrival_1'],
                            'marketingCompany' => $request['inbound_onestop_marketingCompany_1'],
                            'operatingCompany' => $request['inbound_onestop_operatingCompany_1'],
                            'flightNumber' => $request['inbound_onestop_flightNumber_1'],
                            'bookingClass' => $request['inbound_onestop_bookingClass_1'],
                            'segmentTattoo' => 3,
                            'groupNumber' => 2,
                        ]),
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['inbound_onestop_departureDate_2'] . " " . $request['inbound_onestop_departureTime_2']),
                            'from' => $request['inbound_onestop_departure_2'],
                            'to' => $request['inbound_onestop_arrival_2'],
                            'marketingCompany' => $request['inbound_onestop_marketingCompany_2'],
                            'operatingCompany' => $request['inbound_onestop_operatingCompany_2'],
                            'flightNumber' => $request['inbound_onestop_flightNumber_2'],
                            'bookingClass' => $request['inbound_onestop_bookingClass_2'],
                            'segmentTattoo' => 4,
                            'groupNumber' => 2,
                        ]),
                    ],

                ]);

                $informativePricingResponse = $clientFalse->fareInformativePricingWithoutPnr($informative);

                if ($informativePricingResponse->status === Result::STATUS_OK) {
                    $roundtripOnestopOnestop = $sellResult->response;
                    $fare = $informativePricingResponse->response;

                    return view('flight-pages.roundtrip-flight-pages.internation-flight-pages.flight-review', compact('roundtripOnestopOnestop', 'travellers', 'fare', 'otherInformation', 'getsession','code' , 'cvalue'));
                } else {
                    return redirect()->route('error')->with('message', $informativePricingResponse->messages[0]->text);
                }
            } else {
                return redirect()->route('error')->with('message', $sellResult->messages[0]->text);
            }
        } elseif (isset($request['roundtrip_outbound_nonstop']) && isset($request['roundtrip_inbound_twostop'])) {

            $otherInformation = [
                'outbound_marketingCompany' => $request['outbound_nonstop_marketingCompany'],
                'outbound_operatingCompany' => $request['outbound_nonstop_operatingCompany'],
                'outbound_arrivalDate' => $request['outbound_nonstop_arrivalDate'],
                'outbound_arrivalingTime' => $request['outbound_nonstop_arrivalingTime'],
                'inbound_marketingCompany_1' => $request['inbound_twostop_marketingCompany_1'],
                'inbound_operatingCompany_1' => $request['inbound_twostop_operatingCompany_1'],
                'inbound_arrivalDate_1' => $request['inbound_twostop_arrivalDate_1'],
                'inbound_arrivalingTime' => $request['inbound_twostop_arrivalingTime'],
                'inbound_marketingCompany_2' => $request['inbound_twostop_marketingCompany_2'],
                'inbound_marketingCompany_3' => $request['inbound_twostop_marketingCompany_3'],
                'inbound_operatingCompany_2' => $request['inbound_twostop_operatingCompany_2'],
                'inbound_operatingCompany_3' => $request['inbound_twostop_operatingCompany_3'],
                'inbound_arrivalDate_2' => $request['inbound_twostop_arrivalDate_2'],
                'inbound_arrivalDate_3' => $request['inbound_twostop_arrivalDate_3'],
            ];

            $opt = new AirSellFromRecommendationOptions([
                'itinerary' => [
                    new Itinerary([
                        'from' => $request['outbound_nonstop_departure'],
                        'to' => $request['outbound_nonstop_arrival'],
                        'segments' => [
                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['outbound_nonstop_departureDate'], new \DateTimeZone('UTC')),
                                'from' => $request['outbound_nonstop_departure'],
                                'to' => $request['outbound_nonstop_arrival'],
                                'companyCode' => $request['outbound_nonstop_marketingCompany'],
                                'flightNumber' => $request['outbound_nonstop_flightNumber'],
                                'bookingClass' => $request['outbound_nonstop_bookingClass'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),
                        ],
                    ]),
                    new Itinerary([
                        'from' => $request['inbound_twostop_departure_1'],
                        'to' => $request['inbound_twostop_arrival_3'],
                        'segments' => [
                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['inbound_twostop_departureDate_1'], new \DateTimeZone('UTC')),
                                'from' => $request['inbound_twostop_departure_1'],
                                'to' => $request['inbound_twostop_arrival_1'],
                                'companyCode' => $request['inbound_twostop_marketingCompany_1'],
                                'flightNumber' => $request['inbound_twostop_flightNumber_1'],
                                'bookingClass' => $request['inbound_twostop_bookingClass_1'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),

                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['inbound_twostop_departureDate_2'], new \DateTimeZone('UTC')),
                                'from' => $request['inbound_twostop_departure_2'],
                                'to' => $request['inbound_twostop_arrival_2'],
                                'companyCode' => $request['inbound_twostop_marketingCompany_2'],
                                'flightNumber' => $request['inbound_twostop_flightNumber_2'],
                                'bookingClass' => $request['inbound_twostop_bookingClass_2'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),
                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['inbound_twostop_departureDate_3'], new \DateTimeZone('UTC')),
                                'from' => $request['inbound_twostop_departure_3'],
                                'to' => $request['inbound_twostop_arrival_3'],
                                'companyCode' => $request['inbound_twostop_marketingCompany_3'],
                                'flightNumber' => $request['inbound_twostop_flightNumber_3'],
                                'bookingClass' => $request['inbound_twostop_bookingClass_3'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),
                        ],
                    ]),
                ],
            ]);

            $sellResult = $client->airSellFromRecommendation($opt);

            if ($sellResult->status === Result::STATUS_OK) {

                $passengers = $this->passenger($request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);
                $getsession = $client->getSessionData();

                $informative = new FareInformativePricingWithoutPnrOptions([
                    'passengers' => $passengers,
                    'segments' => [
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['outbound_nonstop_departureDate'] . " " . $request['outbound_nonstop_departureTime']),
                            'from' => $request['outbound_nonstop_departure'],
                            'to' => $request['outbound_nonstop_arrival'],
                            'marketingCompany' => $request['outbound_nonstop_marketingCompany'],
                            'operatingCompany' => $request['outbound_nonstop_operatingCompany'],
                            'flightNumber' => $request['outbound_nonstop_flightNumber'],
                            'bookingClass' => $request['outbound_nonstop_bookingClass'],
                            'segmentTattoo' => 1,
                            'groupNumber' => 1,
                        ]),
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['inbound_twostop_departureDate_1'] . " " . $request['inbound_twostop_departureTime_1']),
                            'from' => $request['inbound_twostop_departure_1'],
                            'to' => $request['inbound_twostop_arrival_1'],
                            'marketingCompany' => $request['inbound_twostop_marketingCompany_1'],
                            'operatingCompany' => $request['inbound_twostop_operatingCompany_1'],
                            'flightNumber' => $request['inbound_twostop_flightNumber_1'],
                            'bookingClass' => $request['inbound_twostop_bookingClass_1'],
                            'segmentTattoo' => 2,
                            'groupNumber' => 2,
                        ]),
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['inbound_twostop_departureDate_2'] . " " . $request['inbound_twostop_departureTime_2']),
                            'from' => $request['inbound_twostop_departure_2'],
                            'to' => $request['inbound_twostop_arrival_2'],
                            'marketingCompany' => $request['inbound_twostop_marketingCompany_2'],
                            'operatingCompany' => $request['inbound_twostop_operatingCompany_2'],
                            'flightNumber' => $request['inbound_twostop_flightNumber_2'],
                            'bookingClass' => $request['inbound_twostop_bookingClass_2'],
                            'segmentTattoo' => 3,
                            'groupNumber' => 2,
                        ]),
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['inbound_twostop_departureDate_3'] . " " . $request['inbound_twostop_departureTime_3']),
                            'from' => $request['inbound_twostop_departure_3'],
                            'to' => $request['inbound_twostop_arrival_3'],
                            'marketingCompany' => $request['inbound_twostop_marketingCompany_3'],
                            'operatingCompany' => $request['inbound_twostop_operatingCompany_3'],
                            'flightNumber' => $request['inbound_twostop_flightNumber_3'],
                            'bookingClass' => $request['inbound_twostop_bookingClass_3'],
                            'segmentTattoo' => 4,
                            'groupNumber' => 2,
                        ]),
                    ],

                ]);

                $informativePricingResponse = $clientFalse->fareInformativePricingWithoutPnr($informative);

                if ($informativePricingResponse->status === Result::STATUS_OK) {

                    $roundtripNonstopTwostop = $sellResult->response;
                    $fare = $informativePricingResponse->response;

                    return view('flight-pages.roundtrip-flight-pages.internation-flight-pages.flight-review', compact('roundtripNonstopTwostop', 'travellers', 'fare', 'otherInformation', 'getsession','code' , 'cvalue'));
                } else {
                    return redirect()->route('error')->with('message', $informativePricingResponse->messages[0]->text);
                }
            } else {
                return redirect()->route('error')->with('message', $sellResult->messages[0]->text);
            }
        } elseif (isset($request['roundtrip_outbound_onestop']) && isset($request['roundtrip_inbound_twostop'])) {

            $otherInformation = [
                'outbound_marketingCompany_1' => $request['outbound_onestop_marketingCompany_1'],
                'outbound_marketingCompany_2' => $request['outbound_onestop_marketingCompany_2'],
                'outbound_arrivalingTime' => $request['outbound_onestop_arrivalingTime'],
                'outbound_operatingCompany_1' => $request['outbound_onestop_operatingCompany_1'],
                'outbound_operatingCompany_2' => $request['outbound_onestop_operatingCompany_2'],
                'outbound_arrivalDate_1' => $request['outbound_onestop_arrivalDate_1'],
                'outbound_arrivalDate_2' => $request['outbound_onestop_arrivalDate_2'],
                'inbound_arrivalingTime' => $request['inbound_twostop_arrivalingTime'],
                'inbound_marketingCompany_1' => $request['inbound_twostop_marketingCompany_1'],
                'inbound_marketingCompany_2' => $request['inbound_twostop_marketingCompany_2'],
                'inbound_marketingCompany_3' => $request['inbound_twostop_marketingCompany_3'],
                'inbound_operatingCompany_1' => $request['inbound_twostop_operatingCompany_1'],
                'inbound_operatingCompany_2' => $request['inbound_twostop_operatingCompany_2'],
                'inbound_operatingCompany_3' => $request['inbound_twostop_operatingCompany_3'],
                'inbound_arrivalDate_1' => $request['inbound_twostop_arrivalDate_1'],
                'inbound_arrivalDate_2' => $request['inbound_twostop_arrivalDate_2'],
                'inbound_arrivalDate_3' => $request['inbound_twostop_arrivalDate_3'],
            ];

            $opt = new AirSellFromRecommendationOptions([
                'itinerary' => [
                    new Itinerary([
                        'from' => $request['outbound_onestop_departure_1'],
                        'to' => $request['outbound_onestop_arrival_2'],
                        'segments' => [
                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['outbound_onestop_departureDate_1'], new \DateTimeZone('UTC')),
                                'from' => $request['outbound_onestop_departure_1'],
                                'to' => $request['outbound_onestop_arrival_1'],
                                'companyCode' => $request['outbound_onestop_marketingCompany_1'],
                                'flightNumber' => $request['outbound_onestop_flightNumber_1'],
                                'bookingClass' => $request['outbound_onestop_bookingClass_1'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),

                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['outbound_onestop_departureDate_2'], new \DateTimeZone('UTC')),
                                'from' => $request['outbound_onestop_departure_2'],
                                'to' => $request['outbound_onestop_arrival_2'],
                                'companyCode' => $request['outbound_onestop_marketingCompany_2'],
                                'flightNumber' => $request['outbound_onestop_flightNumber_2'],
                                'bookingClass' => $request['outbound_onestop_bookingClass_2'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),
                        ],
                    ]),
                    new Itinerary([
                        'from' => $request['inbound_twostop_departure_1'],
                        'to' => $request['inbound_twostop_arrival_3'],
                        'segments' => [
                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['inbound_twostop_departureDate_1'], new \DateTimeZone('UTC')),
                                'from' => $request['inbound_twostop_departure_1'],
                                'to' => $request['inbound_twostop_arrival_1'],
                                'companyCode' => $request['inbound_twostop_marketingCompany_1'],
                                'flightNumber' => $request['inbound_twostop_flightNumber_1'],
                                'bookingClass' => $request['inbound_twostop_bookingClass_1'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),
                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['inbound_twostop_departureDate_2'], new \DateTimeZone('UTC')),
                                'from' => $request['inbound_twostop_departure_2'],
                                'to' => $request['inbound_twostop_arrival_2'],
                                'companyCode' => $request['inbound_twostop_marketingCompany_2'],
                                'flightNumber' => $request['inbound_twostop_flightNumber_2'],
                                'bookingClass' => $request['inbound_twostop_bookingClass_2'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),
                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['inbound_twostop_departureDate_3'], new \DateTimeZone('UTC')),
                                'from' => $request['inbound_twostop_departure_3'],
                                'to' => $request['inbound_twostop_arrival_3'],
                                'companyCode' => $request['inbound_twostop_marketingCompany_3'],
                                'flightNumber' => $request['inbound_twostop_flightNumber_3'],
                                'bookingClass' => $request['inbound_twostop_bookingClass_3'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),
                        ],
                    ]),
                ],
            ]);

            $sellResult = $client->airSellFromRecommendation($opt);

            if ($sellResult->status === Result::STATUS_OK) {

                $passengers = $this->passenger($request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);
                $getsession = $client->getSessionData();

                $informative = new FareInformativePricingWithoutPnrOptions([
                    'passengers' => $passengers,
                    'segments' => [
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['outbound_onestop_departureDate_1'] . " " . $request['outbound_onestop_departureTime_1']),
                            'from' => $request['outbound_onestop_departure_1'],
                            'to' => $request['outbound_onestop_arrival_1'],
                            'marketingCompany' => $request['outbound_onestop_marketingCompany_1'],
                            'operatingCompany' => $request['outbound_onestop_operatingCompany_1'],
                            'flightNumber' => $request['outbound_onestop_flightNumber_1'],
                            'bookingClass' => $request['outbound_onestop_bookingClass_1'],
                            'segmentTattoo' => 1,
                            'groupNumber' => 1,
                        ]),
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['outbound_onestop_departureDate_2'] . " " . $request['outbound_onestop_departureTime_2']),
                            'from' => $request['outbound_onestop_departure_2'],
                            'to' => $request['outbound_onestop_arrival_2'],
                            'marketingCompany' => $request['outbound_onestop_marketingCompany_2'],
                            'operatingCompany' => $request['outbound_onestop_operatingCompany_2'],
                            'flightNumber' => $request['outbound_onestop_flightNumber_2'],
                            'bookingClass' => $request['outbound_onestop_bookingClass_2'],
                            'segmentTattoo' => 2,
                            'groupNumber' => 1,
                        ]),
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['inbound_twostop_departureDate_1'] . " " . $request['inbound_twostop_departureTime_1']),
                            'from' => $request['inbound_twostop_departure_1'],
                            'to' => $request['inbound_twostop_arrival_1'],
                            'marketingCompany' => $request['inbound_twostop_marketingCompany_1'],
                            'operatingCompany' => $request['inbound_twostop_operatingCompany_1'],
                            'flightNumber' => $request['inbound_twostop_flightNumber_1'],
                            'bookingClass' => $request['inbound_twostop_bookingClass_1'],
                            'segmentTattoo' => 3,
                            'groupNumber' => 2,
                        ]),
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['inbound_twostop_departureDate_2'] . " " . $request['inbound_twostop_departureTime_2']),
                            'from' => $request['inbound_twostop_departure_2'],
                            'to' => $request['inbound_twostop_arrival_2'],
                            'marketingCompany' => $request['inbound_twostop_marketingCompany_2'],
                            'operatingCompany' => $request['inbound_twostop_operatingCompany_2'],
                            'flightNumber' => $request['inbound_twostop_flightNumber_2'],
                            'bookingClass' => $request['inbound_twostop_bookingClass_2'],
                            'segmentTattoo' => 4,
                            'groupNumber' => 2,
                        ]),
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['inbound_twostop_departureDate_3'] . " " . $request['inbound_twostop_departureTime_3']),
                            'from' => $request['inbound_twostop_departure_3'],
                            'to' => $request['inbound_twostop_arrival_3'],
                            'marketingCompany' => $request['inbound_twostop_marketingCompany_3'],
                            'operatingCompany' => $request['inbound_twostop_operatingCompany_3'],
                            'flightNumber' => $request['inbound_twostop_flightNumber_3'],
                            'bookingClass' => $request['inbound_twostop_bookingClass_3'],
                            'segmentTattoo' => 5,
                            'groupNumber' => 2,
                        ]),
                    ],

                ]);

                $informativePricingResponse = $clientFalse->fareInformativePricingWithoutPnr($informative);

                if ($informativePricingResponse->status === Result::STATUS_OK) {
                    $roundtripOnestopTwostop = $sellResult->response;
                    $fare = $informativePricingResponse->response;

                    return view('flight-pages.roundtrip-flight-pages.internation-flight-pages.flight-review', compact('roundtripOnestopTwostop', 'travellers', 'fare', 'otherInformation', 'getsession','code' , 'cvalue'));
                } else {
                    return redirect()->route('error')->with('message', $informativePricingResponse->messages[0]->text);
                }
            } else {
                return redirect()->route('error')->with('message', $sellResult->messages[0]->text);
            }
        } elseif (isset($request['roundtrip_outbound_twostop']) && isset($request['roundtrip_inbound_nonstop'])) {

            $otherInformation = [
                'outbound_marketingCompany_1' => $request['outbound_twostop_marketingCompany_1'],
                'outbound_operatingCompany_1' => $request['outbound_twostop_operatingCompany_1'],
                'outbound_arrivalingTime' => $request['outbound_twostop_arrivalingTime'],
                'outbound_marketingCompany_2' => $request['outbound_twostop_marketingCompany_2'],
                'outbound_marketingCompany_3' => $request['outbound_twostop_marketingCompany_3'],
                'outbound_operatingCompany_2' => $request['outbound_twostop_operatingCompany_2'],
                'outbound_operatingCompany_3' => $request['outbound_twostop_operatingCompany_3'],
                'outbound_arrivalDate_1' => $request['outbound_twostop_arrivalDate_1'],
                'outbound_arrivalDate_2' => $request['outbound_twostop_arrivalDate_2'],
                'outbound_arrivalDate_3' => $request['outbound_twostop_arrivalDate_3'],
                'inbound_marketingCompany' => $request['inbound_nonstop_marketingCompany'],
                'inbound_operatingCompany' => $request['inbound_nonstop_operatingCompany'],
                'inbound_arrivalingTime' => $request['inbound_nonstop_arrivalingTime'],
                'inbound_arrivalDate' => $request['inbound_nonstop_arrivalDate']
            ];

            $opt = new AirSellFromRecommendationOptions([
                'itinerary' => [
                    new Itinerary([
                        'from' => $request['outbound_twostop_departure_1'],
                        'to' => $request['outbound_twostop_arrival_3'],
                        'segments' => [
                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['outbound_twostop_departureDate_1'], new \DateTimeZone('UTC')),
                                'from' => $request['outbound_twostop_departure_1'],
                                'to' => $request['outbound_twostop_arrival_1'],
                                'companyCode' => $request['outbound_twostop_marketingCompany_1'],
                                'flightNumber' => $request['outbound_twostop_flightNumber_1'],
                                'bookingClass' => $request['outbound_twostop_bookingClass_1'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),

                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['outbound_twostop_departureDate_2'], new \DateTimeZone('UTC')),
                                'from' => $request['outbound_twostop_departure_2'],
                                'to' => $request['outbound_twostop_arrival_2'],
                                'companyCode' => $request['outbound_twostop_marketingCompany_2'],
                                'flightNumber' => $request['outbound_twostop_flightNumber_2'],
                                'bookingClass' => $request['outbound_twostop_bookingClass_2'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),

                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['outbound_twostop_departureDate_3'], new \DateTimeZone('UTC')),
                                'from' => $request['outbound_twostop_departure_3'],
                                'to' => $request['outbound_twostop_arrival_3'],
                                'companyCode' => $request['outbound_twostop_marketingCompany_3'],
                                'flightNumber' => $request['outbound_twostop_flightNumber_3'],
                                'bookingClass' => $request['outbound_twostop_bookingClass_3'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),
                        ],
                    ]),
                    new Itinerary([
                        'from' => $request['inbound_nonstop_departure'],
                        'to' => $request['inbound_nonstop_arrival'],
                        'segments' => [
                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['inbound_nonstop_departureDate'], new \DateTimeZone('UTC')),
                                'from' => $request['inbound_nonstop_departure'],
                                'to' => $request['inbound_nonstop_arrival'],
                                'companyCode' => $request['inbound_nonstop_marketingCompany'],
                                'flightNumber' => $request['inbound_nonstop_flightNumber'],
                                'bookingClass' => $request['inbound_nonstop_bookingClass'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),

                        ],
                    ]),
                ],
            ]);

            $sellResult = $client->airSellFromRecommendation($opt);

            if ($sellResult->status === Result::STATUS_OK) {

                $passengers = $this->passenger($request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);
                $getsession = $client->getSessionData();

                $informative = new FareInformativePricingWithoutPnrOptions([
                    'passengers' => $passengers,
                    'segments' => [
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['outbound_twostop_departureDate_1'] . " " . $request['outbound_twostop_departureTime_1']),
                            'from' => $request['outbound_twostop_departure_1'],
                            'to' => $request['outbound_twostop_arrival_1'],
                            'marketingCompany' => $request['outbound_twostop_marketingCompany_1'],
                            'operatingCompany' => $request['outbound_twostop_operatingCompany_1'],
                            'flightNumber' => $request['outbound_twostop_flightNumber_1'],
                            'bookingClass' => $request['outbound_twostop_bookingClass_1'],
                            'segmentTattoo' => 1,
                            'groupNumber' => 1,
                        ]),
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['outbound_twostop_departureDate_3'] . " " . $request['outbound_twostop_departureTime_3']),
                            'from' => $request['outbound_twostop_departure_3'],
                            'to' => $request['outbound_twostop_arrival_3'],
                            'marketingCompany' => $request['outbound_twostop_marketingCompany_3'],
                            'operatingCompany' => $request['outbound_twostop_operatingCompany_3'],
                            'flightNumber' => $request['outbound_twostop_flightNumber_3'],
                            'bookingClass' => $request['outbound_twostop_bookingClass_3'],
                            'segmentTattoo' => 2,
                            'groupNumber' => 1,
                        ]),
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['outbound_twostop_departureDate_3'] . " " . $request['outbound_twostop_departureTime_3']),
                            'from' => $request['outbound_twostop_departure_3'],
                            'to' => $request['outbound_twostop_arrival_3'],
                            'marketingCompany' => $request['outbound_twostop_marketingCompany_3'],
                            'operatingCompany' => $request['outbound_twostop_operatingCompany_3'],
                            'flightNumber' => $request['outbound_twostop_flightNumber_3'],
                            'bookingClass' => $request['outbound_twostop_bookingClass_3'],
                            'segmentTattoo' => 3,
                            'groupNumber' => 1,
                        ]),
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['inbound_nonstop_departureDate'] . " " . $request['inbound_nonstop_departureTime']),
                            'from' => $request['inbound_nonstop_departure'],
                            'to' => $request['inbound_nonstop_arrival'],
                            'marketingCompany' => $request['inbound_nonstop_marketingCompany'],
                            'operatingCompany' => $request['inbound_nonstop_operatingCompany'],
                            'flightNumber' => $request['inbound_nonstop_flightNumber'],
                            'bookingClass' => $request['inbound_nonstop_bookingClass'],
                            'segmentTattoo' => 4,
                            'groupNumber' => 2,
                        ]),
                    ],

                ]);

                $informativePricingResponse = $clientFalse->fareInformativePricingWithoutPnr($informative);

                if ($informativePricingResponse->status === Result::STATUS_OK) {

                    $roundtripTwostopNonstop = $sellResult->response;
                    $fare = $informativePricingResponse->response;
                    return view('flight-pages.roundtrip-flight-pages.internation-flight-pages.flight-review', compact('roundtripTwostopNonstop', 'travellers', 'fare', 'otherInformation', 'getsession','code' , 'cvalue'));
                } else {
                    return redirect()->route('error')->with('message', $informativePricingResponse->messages[0]->text);
                }
            } else {
                return redirect()->route('error')->with('message', $sellResult->messages[0]->text);
            }
        } elseif (isset($request['roundtrip_outbound_twostop']) && isset($request['roundtrip_inbound_onestop'])) {

            $otherInformation = [
                'outbound_marketingCompany_1' => $request['outbound_twostop_marketingCompany_1'],
                'outbound_operatingCompany_1' => $request['outbound_twostop_operatingCompany_1'],
                'outbound_arrivalingTime' => $request['outbound_twostop_arrivalingTime'],
                'outbound_arrivalDate_1' => $request['outbound_twostop_arrivalDate_1'],
                'outbound_marketingCompany_2' => $request['outbound_twostop_marketingCompany_2'],
                'outbound_marketingCompany_3' => $request['outbound_twostop_marketingCompany_3'],
                'outbound_operatingCompany_2' => $request['outbound_twostop_operatingCompany_2'],
                'outbound_operatingCompany_3' => $request['outbound_twostop_operatingCompany_3'],
                'outbound_arrivalDate_2' => $request['outbound_twostop_arrivalDate_2'],
                'outbound_arrivalDate_3' => $request['outbound_twostop_arrivalDate_3'],
                'inbound_marketingCompany_1' => $request['inbound_onestop_marketingCompany_1'],
                'inbound_operatingCompany_1' => $request['inbound_onestop_operatingCompany_1'],
                'inbound_arrivalingTime' => $request['inbound_onestop_arrivalingTime'],
                'inbound_arrivalDate_1' => $request['inbound_onestop_arrivalDate_1'],
                'inbound_marketingCompany_2' => $request['inbound_onestop_marketingCompany_2'],
                'inbound_operatingCompany_2' => $request['inbound_onestop_operatingCompany_2'],
                'inbound_arrivalDate_2' => $request['inbound_onestop_arrivalDate_2'],
            ];

            $opt = new AirSellFromRecommendationOptions([
                'itinerary' => [
                    new Itinerary([
                        'from' => $request['outbound_twostop_departure_1'],
                        'to' => $request['outbound_twostop_arrival_3'],
                        'segments' => [
                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['outbound_twostop_departureDate_1'], new \DateTimeZone('UTC')),
                                'from' => $request['outbound_twostop_departure_1'],
                                'to' => $request['outbound_twostop_arrival_1'],
                                'companyCode' => $request['outbound_twostop_marketingCompany_1'],
                                'flightNumber' => $request['outbound_twostop_flightNumber_1'],
                                'bookingClass' => $request['outbound_twostop_bookingClass_1'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),

                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['outbound_twostop_departureDate_2'], new \DateTimeZone('UTC')),
                                'from' => $request['outbound_twostop_departure_2'],
                                'to' => $request['outbound_twostop_arrival_2'],
                                'companyCode' => $request['outbound_twostop_marketingCompany_2'],
                                'flightNumber' => $request['outbound_twostop_flightNumber_2'],
                                'bookingClass' => $request['outbound_twostop_bookingClass_2'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),
                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['outbound_twostop_departureDate_3'], new \DateTimeZone('UTC')),
                                'from' => $request['outbound_twostop_departure_3'],
                                'to' => $request['outbound_twostop_arrival_3'],
                                'companyCode' => $request['outbound_twostop_marketingCompany_3'],
                                'flightNumber' => $request['outbound_twostop_flightNumber_3'],
                                'bookingClass' => $request['outbound_twostop_bookingClass_3'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),
                        ],
                    ]),
                    new Itinerary([
                        'from' => $request['inbound_onestop_departure_1'],
                        'to' => $request['inbound_onestop_arrival_2'],
                        'segments' => [
                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['inbound_onestop_departureDate_1'], new \DateTimeZone('UTC')),
                                'from' => $request['inbound_onestop_departure_1'],
                                'to' => $request['inbound_onestop_arrival_1'],
                                'companyCode' => $request['inbound_onestop_marketingCompany_1'],
                                'flightNumber' => $request['inbound_onestop_flightNumber_1'],
                                'bookingClass' => $request['inbound_onestop_bookingClass_1'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),

                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['inbound_onestop_departureDate_2'], new \DateTimeZone('UTC')),
                                'from' => $request['inbound_onestop_departure_2'],
                                'to' => $request['inbound_onestop_arrival_2'],
                                'companyCode' => $request['inbound_onestop_marketingCompany_2'],
                                'flightNumber' => $request['inbound_onestop_flightNumber_2'],
                                'bookingClass' => $request['inbound_onestop_bookingClass_2'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),
                        ],
                    ]),
                ],
            ]);

            $sellResult = $client->airSellFromRecommendation($opt);

            if ($sellResult->status === Result::STATUS_OK) {

                $passengers = $this->passenger($request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);
                $getsession = $client->getSessionData();

                $informative = new FareInformativePricingWithoutPnrOptions([
                    'passengers' => $passengers,
                    'segments' => [
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['outbound_twostop_departureDate_1'] . " " . $request['outbound_twostop_departureTime_1']),
                            'from' => $request['outbound_twostop_departure_1'],
                            'to' => $request['outbound_twostop_arrival_1'],
                            'marketingCompany' => $request['outbound_twostop_marketingCompany_1'],
                            'operatingCompany' => $request['outbound_twostop_operatingCompany_1'],
                            'flightNumber' => $request['outbound_twostop_flightNumber_1'],
                            'bookingClass' => $request['outbound_twostop_bookingClass_1'],
                            'segmentTattoo' => 1,
                            'groupNumber' => 1,
                        ]),
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['outbound_twostop_departureDate_2'] . " " . $request['outbound_twostop_departureTime_2']),
                            'from' => $request['outbound_twostop_departure_2'],
                            'to' => $request['outbound_twostop_arrival_2'],
                            'marketingCompany' => $request['outbound_twostop_marketingCompany_2'],
                            'operatingCompany' => $request['outbound_twostop_operatingCompany_2'],
                            'flightNumber' => $request['outbound_twostop_flightNumber_2'],
                            'bookingClass' => $request['outbound_twostop_bookingClass_2'],
                            'segmentTattoo' => 2,
                            'groupNumber' => 1,
                        ]),
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['outbound_twostop_departureDate_3'] . " " . $request['outbound_twostop_departureTime_3']),
                            'from' => $request['outbound_twostop_departure_3'],
                            'to' => $request['outbound_twostop_arrival_3'],
                            'marketingCompany' => $request['outbound_twostop_marketingCompany_3'],
                            'operatingCompany' => $request['outbound_twostop_operatingCompany_3'],
                            'flightNumber' => $request['outbound_twostop_flightNumber_3'],
                            'bookingClass' => $request['outbound_twostop_bookingClass_3'],
                            'segmentTattoo' => 3,
                            'groupNumber' => 1,
                        ]),
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['inbound_onestop_departureDate_1'] . " " . $request['inbound_onestop_departureTime_1']),
                            'from' => $request['inbound_onestop_departure_1'],
                            'to' => $request['inbound_onestop_arrival_1'],
                            'marketingCompany' => $request['inbound_onestop_marketingCompany_1'],
                            'operatingCompany' => $request['inbound_onestop_operatingCompany_1'],
                            'flightNumber' => $request['inbound_onestop_flightNumber_1'],
                            'bookingClass' => $request['inbound_onestop_bookingClass_1'],
                            'segmentTattoo' => 4,
                            'groupNumber' => 2,
                        ]),
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['inbound_onestop_departureDate_2'] . " " . $request['inbound_onestop_departureTime_2']),
                            'from' => $request['inbound_onestop_departure_2'],
                            'to' => $request['inbound_onestop_arrival_2'],
                            'marketingCompany' => $request['inbound_onestop_marketingCompany_2'],
                            'operatingCompany' => $request['inbound_onestop_operatingCompany_2'],
                            'flightNumber' => $request['inbound_onestop_flightNumber_2'],
                            'bookingClass' => $request['inbound_onestop_bookingClass_2'],
                            'segmentTattoo' => 5,
                            'groupNumber' => 2,
                        ]),
                    ],

                ]);

                $informativePricingResponse = $clientFalse->fareInformativePricingWithoutPnr($informative);

                if ($informativePricingResponse->status === Result::STATUS_OK) {
                    $roundtripTwostopOnestop = $sellResult->response;
                    $fare = $informativePricingResponse->response;

                    return view('flight-pages.roundtrip-flight-pages.internation-flight-pages.flight-review', compact('roundtripTwostopOnestop', 'travellers', 'fare', 'otherInformation', 'getsession','code' , 'cvalue'));
                } else {
                    return redirect()->route('error')->with('message', $informativePricingResponse->messages[0]->text);
                }
            } else {
                return redirect()->route('error')->with('message', $sellResult->messages[0]->text);
            }
        } elseif (isset($request['roundtrip_outbound_twostop']) && isset($request['roundtrip_inbound_twostop'])) {

            $otherInformation = [
                'outbound_marketingCompany_1' => $request['outbound_twostop_marketingCompany_1'],
                'outbound_operatingCompany_1' => $request['outbound_twostop_operatingCompany_1'],
                'outbound_arrivalingTime' => $request['outbound_twostop_arrivalingTime'],
                'outbound_arrivalDate_1' => $request['outbound_twostop_arrivalDate_1'],
                'outbound_marketingCompany_2' => $request['outbound_twostop_marketingCompany_2'],
                'outbound_marketingCompany_3' => $request['outbound_twostop_marketingCompany_3'],
                'outbound_operatingCompany_2' => $request['outbound_twostop_operatingCompany_2'],
                'outbound_operatingCompany_3' => $request['outbound_twostop_operatingCompany_3'],
                'outbound_arrivalDate_2' => $request['outbound_twostop_arrivalDate_2'],
                'outbound_arrivalDate_3' => $request['outbound_twostop_arrivalDate_3'],
                'inbound_marketingCompany_1' => $request['inbound_twostop_marketingCompany_1'],
                'inbound_operatingCompany_1' => $request['inbound_twostop_operatingCompany_1'],
                'inbound_arrivalingTime' => $request['inbound_twostop_arrivalingTime'],
                'inbound_arrivalDate_1' => $request['inbound_twostop_arrivalDate_1'],
                'inbound_marketingCompany_2' => $request['inbound_twostop_marketingCompany_2'],
                'inbound_marketingCompany_3' => $request['inbound_twostop_marketingCompany_3'],
                'inbound_operatingCompany_2' => $request['inbound_twostop_operatingCompany_2'],
                'inbound_operatingCompany_3' => $request['inbound_twostop_operatingCompany_3'],
                'inbound_arrivalDate_2' => $request['inbound_twostop_arrivalDate_2'],
                'inbound_arrivalDate_3' => $request['inbound_twostop_arrivalDate_3'],
            ];

            $opt = new AirSellFromRecommendationOptions([
                'itinerary' => [
                    new Itinerary([
                        'from' => $request['outbound_twostop_departure_1'],
                        'to' => $request['outbound_twostop_arrival_3'],
                        'segments' => [
                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['outbound_twostop_departureDate_1'], new \DateTimeZone('UTC')),
                                'from' => $request['outbound_twostop_departure_1'],
                                'to' => $request['outbound_twostop_arrival_1'],
                                'companyCode' => $request['outbound_twostop_marketingCompany_1'],
                                'flightNumber' => $request['outbound_twostop_flightNumber_1'],
                                'bookingClass' => $request['outbound_twostop_bookingClass_1'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),

                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['outbound_twostop_departureDate_2'], new \DateTimeZone('UTC')),
                                'from' => $request['outbound_twostop_departure_2'],
                                'to' => $request['outbound_twostop_arrival_2'],
                                'companyCode' => $request['outbound_twostop_marketingCompany_2'],
                                'flightNumber' => $request['outbound_twostop_flightNumber_2'],
                                'bookingClass' => $request['outbound_twostop_bookingClass_2'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),
                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['outbound_twostop_departureDate_3'], new \DateTimeZone('UTC')),
                                'from' => $request['outbound_twostop_departure_3'],
                                'to' => $request['outbound_twostop_arrival_3'],
                                'companyCode' => $request['outbound_twostop_marketingCompany_3'],
                                'flightNumber' => $request['outbound_twostop_flightNumber_3'],
                                'bookingClass' => $request['outbound_twostop_bookingClass_3'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),
                        ],
                    ]),
                    new Itinerary([
                        'from' => $request['inbound_twostop_departure_1'],
                        'to' => $request['inbound_twostop_arrival_3'],
                        'segments' => [
                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['inbound_twostop_departureDate_1'], new \DateTimeZone('UTC')),
                                'from' => $request['inbound_twostop_departure_1'],
                                'to' => $request['inbound_twostop_arrival_1'],
                                'companyCode' => $request['inbound_twostop_marketingCompany_1'],
                                'flightNumber' => $request['inbound_twostop_flightNumber_1'],
                                'bookingClass' => $request['inbound_twostop_bookingClass_1'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),

                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['inbound_twostop_departureDate_2'], new \DateTimeZone('UTC')),
                                'from' => $request['inbound_twostop_departure_2'],
                                'to' => $request['inbound_twostop_arrival_2'],
                                'companyCode' => $request['inbound_twostop_marketingCompany_2'],
                                'flightNumber' => $request['inbound_twostop_flightNumber_2'],
                                'bookingClass' => $request['inbound_twostop_bookingClass_2'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),
                            new AirSegment([
                                'departureDate' => \DateTime::createFromFormat('dmy', $request['inbound_twostop_departureDate_3'], new \DateTimeZone('UTC')),
                                'from' => $request['inbound_twostop_departure_3'],
                                'to' => $request['inbound_twostop_arrival_3'],
                                'companyCode' => $request['inbound_twostop_marketingCompany_3'],
                                'flightNumber' => $request['inbound_twostop_flightNumber_3'],
                                'bookingClass' => $request['inbound_twostop_bookingClass_3'],
                                'nrOfPassengers' => array_sum([$request['noOfAdults'], $request['noOfChilds']]),
                                'statusCode' => AirSegment::STATUS_SELL_SEGMENT,
                            ]),
                        ],
                    ]),
                ],
            ]);

            $sellResult = $client->airSellFromRecommendation($opt);

            if ($sellResult->status === Result::STATUS_OK) {

                $passengers = $this->passenger($request['noOfAdults'], $request['noOfChilds'], $request['noOfInfants']);
                $getsession = $client->getSessionData();

                $informative = new FareInformativePricingWithoutPnrOptions([
                    'passengers' => $passengers,
                    'segments' => [
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['outbound_twostop_departureDate_1'] . " " . $request['outbound_twostop_departureTime_1']),
                            'from' => $request['outbound_twostop_departure_1'],
                            'to' => $request['outbound_twostop_arrival_1'],
                            'marketingCompany' => $request['outbound_twostop_marketingCompany_1'],
                            'operatingCompany' => $request['outbound_twostop_operatingCompany_1'],
                            'flightNumber' => $request['outbound_twostop_flightNumber_1'],
                            'bookingClass' => $request['outbound_twostop_bookingClass_1'],
                            'segmentTattoo' => 1,
                            'groupNumber' => 1,
                        ]),
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['outbound_twostop_departureDate_2'] . " " . $request['outbound_twostop_departureTime_2']),
                            'from' => $request['outbound_twostop_departure_2'],
                            'to' => $request['outbound_twostop_arrival_2'],
                            'marketingCompany' => $request['outbound_twostop_marketingCompany_2'],
                            'operatingCompany' => $request['outbound_twostop_operatingCompany_2'],
                            'flightNumber' => $request['outbound_twostop_flightNumber_2'],
                            'bookingClass' => $request['outbound_twostop_bookingClass_2'],
                            'segmentTattoo' => 2,
                            'groupNumber' => 1,
                        ]),
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['outbound_twostop_departureDate_3'] . " " . $request['outbound_twostop_departureTime_3']),
                            'from' => $request['outbound_twostop_departure_3'],
                            'to' => $request['outbound_twostop_arrival_3'],
                            'marketingCompany' => $request['outbound_twostop_marketingCompany_3'],
                            'operatingCompany' => $request['outbound_twostop_operatingCompany_3'],
                            'flightNumber' => $request['outbound_twostop_flightNumber_3'],
                            'bookingClass' => $request['outbound_twostop_bookingClass_3'],
                            'segmentTattoo' => 3,
                            'groupNumber' => 1,
                        ]),
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['inbound_twostop_departureDate_1'] . " " . $request['inbound_twostop_departureTime_1']),
                            'from' => $request['inbound_twostop_departure_1'],
                            'to' => $request['inbound_twostop_arrival_1'],
                            'marketingCompany' => $request['inbound_twostop_marketingCompany_1'],
                            'operatingCompany' => $request['inbound_twostop_operatingCompany_1'],
                            'flightNumber' => $request['inbound_twostop_flightNumber_1'],
                            'bookingClass' => $request['inbound_twostop_bookingClass_1'],
                            'segmentTattoo' => 4,
                            'groupNumber' => 2,
                        ]),
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['inbound_twostop_departureDate_2'] . " " . $request['inbound_twostop_departureTime_2']),
                            'from' => $request['inbound_twostop_departure_2'],
                            'to' => $request['inbound_twostop_arrival_2'],
                            'marketingCompany' => $request['inbound_twostop_marketingCompany_2'],
                            'operatingCompany' => $request['inbound_twostop_operatingCompany_2'],
                            'flightNumber' => $request['inbound_twostop_flightNumber_2'],
                            'bookingClass' => $request['inbound_twostop_bookingClass_2'],
                            'segmentTattoo' => 5,
                            'groupNumber' => 2,
                        ]),
                        new FareSegment([
                            'departureDate' => \DateTime::createFromFormat('dmy Hi', $request['inbound_twostop_departureDate_3'] . " " . $request['inbound_twostop_departureTime_3']),
                            'from' => $request['inbound_twostop_departure_3'],
                            'to' => $request['inbound_twostop_arrival_3'],
                            'marketingCompany' => $request['inbound_twostop_marketingCompany_3'],
                            'operatingCompany' => $request['inbound_twostop_operatingCompany_3'],
                            'flightNumber' => $request['inbound_twostop_flightNumber_3'],
                            'bookingClass' => $request['inbound_twostop_bookingClass_3'],
                            'segmentTattoo' => 6,
                            'groupNumber' => 2,
                        ]),
                    ],

                ]);

                $informativePricingResponse = $clientFalse->fareInformativePricingWithoutPnr($informative);

                if ($informativePricingResponse->status === Result::STATUS_OK) {
                    $roundtripTwostopTwostop = $sellResult->response;
                    $fare = $informativePricingResponse->response;

                    return view('flight-pages.roundtrip-flight-pages.internation-flight-pages.flight-review', compact('roundtripTwostopTwostop', 'travellers', 'fare', 'otherInformation', 'getsession','code' , 'cvalue'));
                } else {
                    return redirect()->route('error')->with('message', $informativePricingResponse->messages[0]->text);
                }
            } else {
                return redirect()->route('error')->with('message', $sellResult->messages[0]->text);
            }
        }
    }
}

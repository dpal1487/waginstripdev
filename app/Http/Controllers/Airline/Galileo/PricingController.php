<?php

namespace App\Http\Controllers\Airline\Galileo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Airline\Galileo\AuthenticateController;
use App\Models\CurrencyConverter;
use App\Models\VisitorGeolocation;

class PricingController extends Controller
{
    public function Pricing(Request $request)
    {
        $data_currency = VisitorGeolocation::geolocationInfo();

        if(!empty($data_currency)){
        $code = is_array($data_currency) ? $data_currency['code'][0] : $data_currency['code'];
        $cvalue = $data_currency['value'];            
        }
        else{
            $code = 'INR';
            $cvalue = 1;
        }

        
        $travellers = json_decode($request['travellers'], true);
        $SessionID = $request['SessionID'];
        
        $body = [
            "ClientCode"=> "MakeTrueTrip",
            "SessionID" => $request['SessionID'],
            "Key" => $request['Key'],
            "Pricingkey" => $request['Pricingkey'],
            "Provider" => $request['Provider'],
            "ResultIndex" => $request['ResultIndex'], 
            "IsPriceChange" => true,
            //"FlightAvailibility" => ["FlightAvailibility" => ["Segments" => ["Segments" => ["FlightAvailibility" => ["FlightAvailibility" => ]]]] ]
        ];
        $response = AuthenticateController::callApiWithHeadersGal("Pricing", $body);
        // $ip = $_SERVER['REMOTE_ADDR'];        
        // $loc = Http::get('http://api.ipstack.com/'.$ip.'?access_key=528d7ed0b65ea7d1f694af15b0ced1a4')->json();

        // $cncode = 'IN';
        // if(!empty($loc)){
        //     if(isset($loc['countryCode'])){
        //         $cncode = $loc['countryCode'];
        //     }
        // }
        if ($response['Status'] != "Success") {
            return redirect()->route('error')->with('msg', 'Flight Unable to sell');
        }elseif ($request['trip'] == 'Roundtrip') {
        // dd($response);
            return view('flight-pages.roundtrip-flight-pages.internation-flight-pages.flight-gl-review', compact('response', 'travellers', 'SessionID' , 'cvalue' , 'code'));
        }elseif ($request['trip'] == 'Oneway'){
            return view('flight-pages.oneway-flight-pages.flight-gl-review', compact('response', 'travellers', 'SessionID' , 'cvalue' , 'code'));
        }
    }
}

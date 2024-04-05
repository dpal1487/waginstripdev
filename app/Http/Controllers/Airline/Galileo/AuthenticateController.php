<?php
namespace App\Http\Controllers\Airline\Galileo;

use App\Http\Controllers\Controller;
use App\Models\GalileoFlightLog;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;

class AuthenticateController extends Controller {

    public function Authenticate() {
        
        $config = Config::get('configuration.Galileo');
        $body = [
            "UserName" => $config['user_name'],
            "Password" => $config['password'],
        ];
        $response = $this->callApiWithHeadersGal("Authenticate", $body);
        return $response['SessionID'];
    }
    
    public static function callApiWithHeadersGal($action, $body) {
        $config = Config::get('configuration.Galileo');
        $response = Http::withHeaders([
            "Accept" =>"application/json",
            "Content-Type" => "application/json",
            ])->send("POST", $config['url'] . $action, [
                "body" => json_encode($body, true),
                ])->json();
                
                if ($action == "Authenticate") {
                    $response['SessionID'];
                    $flightLogs = new GalileoFlightLog;
                    $flightLogs->session_id = $response['SessionID'];
                    $flightLogs->authenticate = json_encode($response, true);
                    $flightLogs->availability = json_encode($response, true);

                    // something go's there 
                    $flightLogs->save();
                } else {
                    $action = strtolower($action);
                    if($body['SessionID'] == ''){
                            // return redirect()->route('error')->with('message', 'Authenticate Error!');
                            dd('Session Expire');
                            // dd($body);
                    }
                    $flightLogs = GalileoFlightLog::where('session_id', '=', $body['SessionID'])->first();
                    $flightLogs->$action = json_encode(['Request_Of_'.$action => $body, 'Response_Of_'.$action => $response], true);
                    $flightLogs->save();
                    
                }
          return $response;        
    }
    public static function Booking($action , $body){
       
        $config = Config::get('configuration.Galileo');
        
        $response = Http::withHeaders([
            "Accept" =>"application/json",
            "Content-Type" => "application/json",
        ])->send("POST", $config['url'] . $action, [
            "body" => json_encode($body, true),
        ])->json();
      
        if ($action == "Authenticate") {
            $response['SessionID'];
            $flightLogs = new GalileoFlightLog;
            $flightLogs->session_id = $response['SessionID'];
            $flightLogs->authenticate = json_encode($response, true);
            $flightLogs->availability = json_encode($response, true);
            $flightLogs->save();
        } else {
            $action = strtolower($action);
            if($body['SessionID'] == ''){
                // 
            }
            $flightLogs = GalileoFlightLog::where('session_id', '=', $body['SessionID'])->first();
            $flightLogs->$action =  json_encode(['Request_Of_'.$action => $body, 'Response_Of_'.$action => $response], true);
            $flightLogs->save();
        }
    
       return $response;
    }
    
    public function Availability($trip, $tripType, $date, $adult, $child, $infant, $origin, $destination , $class) {
        // dd([$trip, $tripType, $date, $adult, $child, $infant, $origin, $destination]);
        
        $config = Config::get('configuration.Galileo');
        if ($tripType == 'roundtrip') {
            $tripType = 2;
        } elseif ($tripType == 'oneway') {
            $tripType = 1;
        } elseif ($tripType == 'multicity') {
            $tripType = 3;
        }
        $SessionID = $this->Authenticate();
        $date = \DateTime::createFromFormat("d M Y", "$date");
        $date = $date->format("d/m/Y");
        
        $body = [
            "ClientCode"=>"MakeTrueTrip",
            "Trip" => $trip,
            "TripType" => $tripType,
            "Adult" => $adult,
            "Child" => $child,
            "Infant" => $infant,
            "NonStop" => false,
            "ExcludeAirlines" => "",
            "CurrencyCode" => "USD",
            "ExcludeAirline" => [],
            "PreferredClass" => $class,
            "PreferredCarrier" => "",
            "RTF" => false,
            "SessionID" => $SessionID,
            "Segments" => [
                [
                    "Origin" => $origin,
                    "Destination" => $destination,
                    "DepartDate" => $date,
                    "PreferredClass" => $class,
                ]
            ],
        ];
        
        $response = $this->callApiWithHeadersGal("Availability", $body);
        // dd($response);
        return $response;
    }
    
    public function AvailabilityRound($trip, $tripType, $date, $returnDate, $adult, $child, $infant, $origin, $destination , $class) {
        // dd([$trip, $tripType, $date, $adult, $child, $infant, $origin, $destination]);
      
        $config = Config::get('configuration.Galileo');
        if ($tripType == 'roundtrip') {
            $tripType = 2;
        } elseif ($tripType == 'oneway') {
            $tripType = 1;
        } elseif ($tripType == 'multicity') {
            $tripType = 3;
        }
        
        $SessionID = $this->Authenticate();
        $date = \DateTime::createFromFormat("d M Y", "$date");
        $date = $date->format("d/m/Y");
        
        $returnDate = \DateTime::createFromFormat("d M Y", "$returnDate");
        $returnDate = $returnDate->format("d/m/Y");
        
        $body = [
            "ClientCode"=>"MakeTrueTrip",
            "Trip" => $trip,
            "TripType" => $tripType,
            "Adult" => $adult,
            "Child" => $child,
            "Infant" => $infant,
            "NonStop" => false,
            "ExcludeAirlines" => "",
            "ExcludeAirline" => [],
            "PreferredClass" => $class,
            "PreferredCarrier" => "",
            "RTF" => true,
            "SessionID" => $SessionID,
            "TravelerType" => 'ADT',
            "Segments" => [
                [
                    "Origin" => $origin,
                    "Destination" => $destination,
                    "DepartDate" => $date,
                    "PreferredClass" => $class,
                ],
                [
                    "Origin" => $destination,
                    "Destination" => $origin,
                    "DepartDate" => $returnDate,
                    "PreferredClass" => $class,
                ],
            ],
        ];
        $response = $this->callApiWithHeadersGal("Availability", $body);
        // dd($response);
        return $response;
    }
    
}


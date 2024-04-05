<?php

namespace App\Http\Controllers\Airline\Amadeus;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use App\Http\Controllers\Controller;
use Amadeus\Client;
use Amadeus\Client\Params;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use  Illuminate\Support\Facades\DB;

class AmadeusHeaderController extends Controller {
    public function State($action) {
        $config = Config::get('configuration.Amadeus');
        $logName = 'requestResponse';
        $logSrc = 'logs/';
        $log = new Logger('log');
        $log->pushHandler(new StreamHandler($logSrc . $logName .'.log', Logger::INFO));
        $response = new Params([
            'authParams' => [
                'officeId' => $config['office_id'], 
                'userId' => $config['user_id'], 
                'passwordData' => base64_encode($config['password']), 
            ],
            'sessionHandlerParams' => [
                'soapHeaderVersion' => Client::HEADER_V4, //This is the default value, can be omitted.
                'wsdl' => public_path($config['wsdl']),
                'stateful' => $action,
                'logger' => $log,
            ],
            'requestCreatorParams' => [
                'receivedFrom' => 'Maketruetrip Pvt. Ltd.',
            ],
            'returnXml' => false
        ]);
        return $response;
    }
}

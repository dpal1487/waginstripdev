<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;
use App\Http\Controllers\Airline\Galileo\AuthenticateController;
use App\Models\Agent\Agent;
use App\Http\Controllers\Agent\Booking\Amadues\PNR_AddMultiElementsController;
use App\Http\Controllers\Agent\Booking\Galelio\TicketingController;
use App\Http\Controllers\Agent\Booking\Mix\BookingController;
use App\Http\Controllers\Agent\Booking\Amadues\DomesticPnrAddMultiElementsController;
// use Srmklive\PayPal\Services\ExpressCheckout;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Illuminate\Support\Facades\Session;
use App\Models\VisitorGeolocation;
use Illuminate\Support\Facades\Http;
use App\Models\PaymentSaveGalelioRoundTrip;
use App\Models\PaypalRedirector;
// use Srmklive\PayPal\Services\ExpressCheckout;
// use Illuminate\Support\Facades\Validator;

class Democontroler extends Controller {
    public function demo_exhchange($args = []){
        $ip = $_SERVER['REMOTE_ADDR'];
        dd(file_get_contents("https://www.geoplugin.com/ip.php"));
        dd(file_get_contents('http://www.geoplugin.net/json.gp?ip='.$ip));
            $ch = curl_init('http://www.geoplugin.net/json.gp?ip='.$ip);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_NOSIGNAL, 1);
                curl_setopt($ch, CURLOPT_TIMEOUT_MS, 1000);
                $data = curl_exec($ch);
                $curl_errno = curl_errno($ch);
                $curl_error = curl_error($ch);
                curl_close($ch);        
        // try{
        //     $resp= Http::timeout(1)->get('http://www.geoplugin.net/json.gp?ip='.$ip)->json();
        // }
        // catch(Exception $e){
        //     dd($e);
        // }
        $currency = [];
        $currency[] = $args['from'];
        $currency[] = $args['to'];
        $get = DB::table('latest_currency_exchanges')
                 ->whereIn('code' , $currency)
                 ->get()
                 ->toArray();

        if(count($get) == 2)
        {
            $arr_out = [];
            foreach($get as $key => $value){
                $arr_out[$value->code] = [
                    'code' => $value->code,
                    'value' =>$value->value,
                    ];
            }
            if($args['from'] == 'INR'){
                $cvalue_obj = $arr_out[$args['to']];
                $symbol = __('common.'.$args['to']);
                $return = ['code' => [0 => $cvalue_obj['code']] , 'value' => $cvalue_obj['value'] , 'symbol' => $symbol];
            }
            else{
                $cvalue_obj =$arr_out[$args['to']];
                $cvalue_origin = $arr_out[$args['from']];
                $cval_obj_val  = $cvalue_obj['value'];     //  1 rs = $cval_obj_val 
                $cval_obj_origin = $cvalue_origin['value'];  // 1 rs = $cval_obj_origin
                $symbol = __('common.'.$args['to']);

                $cval_return = ['code' => [0 => $cvalue_obj['code']] , 'value' => $cval_obj_origin , 'symbol' => $symbol];
            }
        }
        else{
            $symbol = __('common.INR');
            return ['code' => [0 => 'INR']  , 'value' => 1 , 'symbol' => $symbol]; 
        }
    }
}
<?php

namespace App\Http\Controllers\helper;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AirlineCode;

class AirlineCodeController extends Controller
{
   public function AirlineCode(Request $request){
       
       $search = $request['search'];
       
        if ($search == '') {
            
            $countries = AirlineCode::orderby('updated_at', 'DESC')->select('airline_code','airline_name')->limit(1)->get();
            
        } else {
            
            $countries = AirlineCode::where('airline_code', 'like',$search)->limit(1)->get();
                 
        }
        if(!isset($countries[0]['id'])){
            
        echo ( $request['search']);
        exit;
                     
    }
        $response = array();
        foreach ($countries as $country) {
            //   dd($country);
            $response =  $country['airline_name'];
        }
        echo ($response);
        exit;
   }
}

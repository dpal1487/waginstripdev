<?php

namespace App\Http\Controllers\Hotel\Amadeus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelReviewController extends Controller
{
    public function HotelFare(Request $request){
        return $request->all();


    }



}

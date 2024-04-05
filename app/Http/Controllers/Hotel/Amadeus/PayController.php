<?php

namespace App\Http\Controllers\Hotel\Amadeus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PayController extends Controller
{
    
    public function HotelPay(){
        return view('hotel-pages.payment');
    } 



}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\airbook;
use App\Http\Requests\airbookingrequest;

class airbookcontroller extends Controller
{
    public function getbooking(){
    
        return view('pages.getbooking');
    }
    public function store(airbookingrequest $request){
           $data=$request->except(["_token"]);
           airbook::create($data);
           return view('pages.airbook');
       }
       
    public function airbook(){
    
        return view('pages.airbook');
    }
   
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\addvisarequest;
use App\Models\visa;
class pagecontroller extends Controller
{
    public function visastore(addvisarequest $request){
        $data=$request->except(["_token"]);
        visa::create($data);
        return view('pages.visa');
    }
    public function visa(){
        return view('pages.visa');
    }
    
}

<?php

namespace App\Http\Controllers\GdsUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Redirect;
use  App\Models\GdsUser;

class Optins extends Controller
{
    public function ShowPnrs(Request $input){
        if(!session()->has("GdsUser")){
            session()->forget('GdsUser');
            // return view('GDS.Login');
            // return redirect('GdsUser/login');
        }
        $pages =(int) $input['pages'];
        $bookings = Booking::orderBy('id', 'DESC')->paginate(20);
         $email = session()->get('GdsUser')['date']->email;
         $gdsuser = new GdsUser();
        $user = $gdsuser->where('email', '=', $email)->first();
        return view('GDS/Pnrs' , compact('bookings', 'user'));
    }
    
    public function EditPnr(Request $request){
        if(!session()->has("GdsUser")){
            session()->forget('GdsUser');
            // return view('GDS.Login');
            return redirect('GdsUser/login');
        }
        $email = session()->get('GdsUser')['date']->email;
         $gdsuser = new GdsUser();
        $user = $gdsuser->where('email', '=', $email)->first();
        if($user->allow_for_edit == 1){
           $Booking = new Booking();
           $Booking = $Booking->find($request->id);
           $Booking->IsConfirm = $request->confirmation;
           $Booking->save();
            $mess = " Booking Updated successfully";
        // dd($mess);
        return Redirect::back()->withErrors(['msg' =>$mess]); 
        }else{
            return Redirect::back()->withErrors(['msg' =>'Permission Not Allow']); 
        }
        
    }
}

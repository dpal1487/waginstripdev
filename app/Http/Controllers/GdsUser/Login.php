<?php

namespace App\Http\Controllers\GdsUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\GdsUser;

use Illuminate\Support\Facades\Hash;

class Login extends Controller
{
    public function Login(){
        if(session()->has("GdsUser")){
            return redirect('GDS/Dashboard');
        }
        return view('GDS.Login');
    }
    public function Logout(){
        if(session()->has("GdsUser")){
            session()->forget('GdsUser');
            return redirect('GDS/Dashboard');
        }
        return view('GDS.Login');
    }
    public function Dashboard(){
        if(session()->has("GdsUser")){
            return view('GDS/Dashboard');
        }
        return view('GDS.Login');
    }
    // public function SingUp(Request $input){
    //     $GdsUser = GdsUser::Where('email','=', $input["Email"])->limit(1)->get();

    //     dd($input , $GdsUser);
    //     return view('GDS.Login');
    // }
    public function SingIn(Request $request){
        
        $GdsUser = GdsUser::Where('email','=', $request["Email"])->first();
        if($GdsUser->status == '1'){
            if($GdsUser != null){
                if(Hash::check($request['Password'],$GdsUser['password'])){
                    $GdsDate = [
                        'name' => $GdsUser['name'],
                        'date' => $GdsUser,
                    ];
                    $request-> session()->put("GdsUser", $GdsDate);
                    $request-> session()->put("allow_for_edit", $GdsUser->allow_for_edit);
                    
                    return view('GDS.Dashboard' , compact('GdsDate'));
                }
                
            }
        }else{
             $mess = "Permission Not Allow";
             return redirect()->back()->withErrors(['msg' =>$mess]);
        }
        // dd($request ,$GdsUser,  $GdsUser['email']);
        return view('GDS.Login');
    }

}

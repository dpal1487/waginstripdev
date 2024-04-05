<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Session;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\Models\Booking;
use App\Models\HotelOffer;
use App\Models\hotelbook;
use App\Models\airbook;
use App\Models\visa;
use Auth;
use PDF;

class CustomerController extends Controller
{
    
    public function userProfile(){
        return view('userpages.profile');
    }

    public function userGenderUpdate(Request $request){
        $findId = user::find($request->id);
        $findId->gender = $request->gen;
        $findId->save();
    }

    public function userAllUpdate(Request $request){
        $findId = user::find($request->id);
        $image = $request->file('fileInput');
        if(empty($image)){
            $findId->name = $request->name;
            $findId->phone = $request->phone;
            $findId->gender = $request->gender;
            $findId->save();
            Session::flash('msg','Profile Updated Successfully');
            return redirect()->back();
        }
        else{
            $fnn = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/'), $fnn);
            $findId->name = $request->name;
            $findId->phone = $request->phone;
            $findId->image = $fnn;
            $findId->gender = $request->gender;
            $findId->save();
            Session::flash('msg','Profile Updated Successfully');
            return redirect()->back();
        }
    }

    public function changePassword(Request $request){
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
           
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
   
        Session::flash('msg','Password changed successfully');
        return redirect()->back();
    }   

    public function userBooking(){

        $userId  = Auth::user()->id;
        $bookings = Booking::where('user_id', $userId)->orderBy('created_at','desc')->get();
        // $bookings=Booking::all();
        // $bookings = Booking::orderBy('user_id','desc')->get();
        // $bookings = Booking::orderBy('created_at','desc')->paginate(3);
        return view('userpages.flightboked', compact('bookings'));
        
    }
    public function amadeus(){
        $bookings = Booking::orderBy('created_at','desc')->get();
        return view('userpages.flightboked', compact('bookings'));
    }
    public function airbook(){
        
        $userId  = Auth::user()->id;
        // $hotelbook = hotelbook::where('id','userId')->orderBy('id', 'desc')->get();
         $airbook=airbook::orderBY('id',"desc")->get();
        return view('userpages.airbook', compact('airbook'));
    }
    public function visa(){
   
        $userId  = Auth::user()->id;
        $visa=visa::orderBY('id',"desc")->get();
        return view('userpages.visa', compact('visa'));
    }
    public function hotelboked(){
        
        $userId  = Auth::user()->id;
        // $hotelbook = hotelbook::where('id','userId')->orderBy('id', 'desc')->get();
         $hotelbook=hotelbook::orderBY('id',"desc")->get();
        return view('userpages.hotelboked', compact('hotelbook'));
    }
   
    public function userBookingDetails($id){
        $id  = $id / 2022;
        $bookings = Booking::where('id', $id)->first();
        return view('userpages.boking-details', compact('bookings'));
    }
    public function amduserBookingDetails($id){
        $id  = $id / 2022;
        $bookings = Booking::where('id', $id)->first();
        return view('userpages.amadeus-booked', compact('bookings'));
    }

    public function FlightTicketPdf($id,$page){
        $id  = $id / 2023;
        $bookings = Booking::where('id', $id)->first();
        If($page == 1)
        {
            // view()->share('bookings', $bookings);
            $pdf = PDF::loadView('booking-pdf.flight.edit-roundtrip-amd-flight-booking-confirm', compact('bookings'));
   
            return $pdf->download('Flight ticket'.$bookings->booking_id.'.pdf');
        }elseif($page == 2)
        {
            //  view()->share('bookings', $bookings);
            sleep(3);

            // return view('booking-pdf.flight.email_content' , compact('bookings'));
            return view('booking-pdf.flight.oneway-amd-flight-booking-confirm' , compact('bookings'));
            // $pdf = PDF::loadView('booking-pdf.flight.oneway-amd-flight-booking-confirm', compact('bookings'));
            // $pdf = PDF::loadView('booking-pdf.flight.oneway-amd-flight-booking-confirm', compact('bookings'));
   
            return $pdf->download('Flight ticket'.$bookings->booking_id.'.pdf');
        }elseif($page == 3)
        {
            //  view()->share('bookings', $bookings);
            sleep(3);
            // return view('booking-pdf.flight.New-gal-email-pdf' , compact('bookings'));
            return view('booking-pdf.flight.oneway-gal-flight-booking-confirm' , compact('bookings'));
            // $pdf = PDF::loadView('booking-pdf.flight.oneway-gal-flight-booking-confirm', compact('bookings'));
   
            return $pdf->download('Flight ticket'.$bookings->booking_id.'.pdf');
        }elseif($page == 4)
        {
            //  view()->share('bookings', $bookings);
            
            // return view('booking-pdf.flight.togleshowtime' , compact('bookings'));
            // return view('booking-pdf.flight.roundtrip-amd-flight-booking-confirm' , compact('bookings'));
            
            $pdf = PDF::loadView('booking-pdf.flight.roundtrip-amd-flight-booking-confirm', compact('bookings'));
            
            return $pdf->download('Flight ticket'.$bookings->booking_id.'.pdf');
        }
        elseif($page == 5){
            // view()->share('bookings', $bookings);
            
            return view('booking-pdf.flight.roundtrip-gal-flight-booking-confirm' , compact('bookings'));
            // $pdf = PDF::loadView('booking-pdf.flight.roundtrip-gal-flight-booking-confirm', compact('bookings'));
            return $pdf->download('Flight ticket'.$bookings->booking_id.'.pdf');
        }
        elseif($page == 6){
            $booking['bookings'] = $bookings;
            $booking['email'] =  $bookings["email"]?? '';
            $booking['title'] =   "Flight Ticket ".(json_decode($bookings['passenger'])[0]->FirstName ??'') ;
            
            $pdf = PDF::loadView('flight-pages.booking-confirm.OneRecodTickel', compact('bookings'));
            // dd($booking , json_decode($bookings['passenger'])[0]->FirstName);
            // \Mail::send('flight-pages.booking-confirm.OneRecodTickel', $bookings, function($message)use($booking ,$pdf) {
            //     $message->to('developer@wagnistrip.com')
            //     ->subject( $booking['title'])
            //     ->attachData($pdf->output(), $booking['title'].'.pdf');
            // });
            
            
            
            // ///////////////////////////////////////////////////////////////////
            // view()->share('bookings', $bookings);
            // sleep(3);
            // $pdf = PDF::loadView('booking-pdf.flight.roundtrip-gal-flight-booking-confirm', compact('bookings'));
            return $pdf->download('Flight ticket'.$bookings->booking_id.'.pdf');
            // ///////////////////////////////////////////////////////////////////
        }

      
        // return view('booking-pdf.flight.booking-pdf', compact('bookings'));
    }

}

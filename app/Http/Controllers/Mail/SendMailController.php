<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;

class SendMailController extends Controller
{
    public function send_mail(){
        
        $data['email'] = 'developer@wagnistrip.com';
        $data['title'] = 'Mail from WT Sumit';
        $data['body']  = 'This is RAhul mail with pdf attachment';
        
        $files = PDF::loadView('emails.test_mail',$data);
      
       \Mail::send('emails.test_mail', $data, function($message)use($data,$files) {
            $message->to($data['email'])
                    ->subject( $data['title'])
                    ->attachData($files->output(), "test.pdf");
 
            // foreach ($files as $file){
            //     $message->attach($file);
            // }
        });
        
    // \Mail::to('developer@wagnistrip.com')->send(new \App\Mail\SendTicketemail($details,$files));
   
    dd("Email Sent.");
    
    }
}

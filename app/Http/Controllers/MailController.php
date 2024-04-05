<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use PDF;

class MailController extends Controller {
   public function bassendToCus($maildata) {
      $data = array('name'=>"Team Dev");
      $resultsellRetriveRepeat = $maildata['resultsellRetriveRepeat'];
      $postvalue =$maildata['postvalue'];
      $data = $maildata['data'];
      // dd($resultsellRetriveRepeat , $postvalue , $data);
      $pdf = PDF::loadView('mail.ticket', [
         'resultsellRetriveRepeat' => $maildata['resultsellRetriveRepeat'],
         'postvalue' => $maildata['postvalue'],
         'data' => $maildata['data']
      ]);
      return $pdf->download('ticket.pdf');
      // dd($pdf);
     

      // Mail::send('mail.mail', $maildata, function($message) use ($resultsellRetriveRepeat , $postvalue , $data ,$pdf) {
      //    $message->to('developer@maketruetrip.com', 'for clint')->subject
      //    ('test perpose');
      //    $message->from('dev@256485.xyz','Team Dev');
      //    $message->attachData( $pdf ->output(),'ticket.pdf');
      // });
      // echo "Basic Email Sent. Check your inbox.";
   }
   public function sendToOffice($maildata) {
      $data = array('name'=>"Team Dev");
      Mail::send('hotel-pages.ticket', $maildata, function($message) {
         $message->to('developer@maketruetrip.com', 'for office')->subject
            ('This is a ticket mail by DEv');
         $message->from('dev@256485.xyz','Team Dev');
      });
      // echo "HTML Email Sent. Check your inbox.";
   }




   ///////////////////////////////////////////////////////////////////////////////
   //////////////////////////// test //////////////////////////////////////////////
   ///////////////////////////////////////////////////////////////////////////////
   public function attachment_email() {
      $data = array('name'=>"Team Dev");
      Mail::send('mail', $data, function($message) {
         $message->to('developer@maketruetrip.com', 'Test Mail')->subject
            ('Laravel Testing Mail with Attachment');
        //  $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
        //  $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
         $message->from('dev@256485.xyz','Team Dev');
      });
      echo "Email Sent with attachment. Check your inbox.";
   }
}
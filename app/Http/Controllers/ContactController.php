<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Mail;

class ContactController extends Controller {

  public function postContactUs(Request $request) {
          
    // $this->validate($request, [
    //   'username' => 'required',
    //   'email' => 'required',
    //   'subject' => 'required',
    //   'message' => 'required',
    // ]);

        // dd($request->all());

        $data = array(
          'username' => $request->username,
          'email' => $request->email,
          'subject' => $request->subject,
          'phone' => $request->phone,
          'bodyMessage' => $request->bodyMessage,
        );

        // dd($data);

        Mail::send('emails.contact', $data, function($message) use ($data) {
          $message->from($data['email']);
          $message->to('nanipaul68@gmail.com');
          $message->subject($data['subject']);
        });

        $notification = array(
          'message' => 'Message Sent successfully',
          'alert-type' => 'success'
        );
        
        Session::flash('success', 'Message Sent Successfully. Someone will contact you soon via Email.');

        return redirect()->back()->with($notification);
      }



}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
user App\Http\Request;
use Mail;

class ContactController extends Controller {

  public function postContactForm(Request $request) {
    $this->validate($request, [
      'name' => 'required',
      'email' => 'required',
      'phone' => 'required',
      'subject' => 'required',
      'user_message' => 'required'
    ]);

    dd($request->all());

    // Mail::send('emails.contactUs',
    //   array(
    //      'name' => $request->get('name'),
    //      'email' => $request->get('email'),
    //      'phone' => $request->phone,
    //      'subject' => $request->subject,
    //      'user_message' => $request->get('message')
    //   ), function($message)
    //  {
    //  $message->from('techanical-atom@gmail.com');
    //  $message->to('nanipaul69@gmail.com', 'Admin')
    //  ->subject('Contact Form Query');
    // });
    return redirect()->back()->with('success', 'Thanks for contacting us!');
  }


  public function sendEmail(Request $request) {

    $this->validate($request, [
      'name' => 'required',
      'email' => 'required',
      'phone' => 'required',
      'subject' => 'required',
      'user_message' => 'required'
    ]);

    dd('sent');

    $data = array(
    'name' => $request->name,
    'mail'=>$request->mail,
    'message'=>$request->message,
    // 'category'=>$request->category,
    // 'company'=>$request->company
  );

  var_dump($data);

  Mail::send('emails.contactUs', $data, function ($message) use($request) {

    $message->from($request->mail,$request->name);

    $message->to('nanipaul68@gmail.com')->subject('Alt Support');

  });

  return "Your email has been sent successfully";
  }
}

<?php

namespace App\Http\Controllers;
use App\Mail\ContactForm;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendMessage(Request $request){

      $this->validate($request,array(
        'name' =>'required',
        'email' => 'required|email',
        'message' => 'required'
      ));

        $myEmail = 'cristianfaune.t@gmail.com';
        $email = $request->email;
        $bodyMessage = $request->message;
        $name = $request->name;
        $token = $request->input('g-recaptcha-response');

        if ($token) {
          Mail::to($myEmail)->send(new ContactForm($email,$name, $bodyMessage));
        }else {
          return ('/');
        }

        //Session::flash('success','Tu consulta fue enviada con éxito.');


    }
}

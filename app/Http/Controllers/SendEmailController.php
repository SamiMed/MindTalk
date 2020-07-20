<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class SendEmailController extends Controller
{
    //

    function index(){

        return view('index');
    }

    function send(Request $resquest){

        $this->validate($resquest, [

            'name' =>   'required',
            'email' =>  'required|email',
            'message' => 'required'
        ]);

        $data = array(
          
            'name' => $resquest->name,
            'email' =>$resquest->email,
            'message' => $resquest->message

        );

        Mail::to('samimedelci@gmail.com')->send(new WelcomeEmail($data));
        return back()->with('succes', 'Thanks for contacting us !');
    }

}

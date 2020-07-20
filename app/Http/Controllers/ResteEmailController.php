<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\resteEmail;

class ResteEmailController extends Controller
{
    //
    function index(){

        return view('index');
    }

    function send(Request $resquest){

        $this->validate($resquest, [

            
            'email' =>  'required|email'
            
        ]);

        $data = array(
          
           
            'email' =>$resquest->email
            

        );

        Mail::to('samimedelci@gmail.com')->send(new resteEmail($data));
        return back()->with('succes', 'Thanks for contacting us !');
    }

}

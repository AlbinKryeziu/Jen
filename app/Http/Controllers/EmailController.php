<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailReqeust;
use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;

class EmailController extends Controller
{
    public function email(EmailReqeust $request){
        
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ] ;
           
           
           
       
       
        \Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\ContactEmail($data));
        
    }
    
}

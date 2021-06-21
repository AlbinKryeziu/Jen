<?php

namespace App\Http\Controllers;
use Session;
use Stripe;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 50,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "This payment is tested purpose phpcodingstuff.com"
        ]);
   
        Session::flash('success', 'Payment successful!');
           
        return back();
    }
}

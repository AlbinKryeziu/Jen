<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Session;
use Stripe;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class StripeController extends Controller
{
    public function stripePost(Request $request)
    {
        \Stripe\Stripe::setApiKey('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');
        try {
            $stripe = \Stripe\Charge::create([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->input('stripeToken'), // obtained with Stripe.js
                "description" => "Pyment Users.",
            ]);
            Session::flash('success-message', 'Payment done successfully !');

            if ($stripe) {
                $user = User::where('id', Auth::id())->update([
                    'paid' => Carbon::now()->toDateString(),
                ]);
                
            }
            return redirect('/');
        } catch (\Exception $e) {
            Session::flash('fail-message', "Error! Please Try again.");
            return back();
        }
    }
}

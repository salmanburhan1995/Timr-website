<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Stripe;
use Stripe\StripeClient;

class StripePaymentController extends Controller
{
    // Create the customer
    function CreateStripeCustomer($customer){
        $stripe = new StripeClient(env('STRIPE_SECRET'));
        $createCustomer = $stripe->customers->create([
            'name' => $customer['name'],
            'email' => $customer['email'],
        ]);
        return $createCustomer;
    }
    // Create the Card
    // Create the payments
    public function payment(Request $request): RedirectResponse
    {
        $customerData = $this->CreateStripeCustomer(['name'=>'salman','email'=>'ssalmanburhan@gmail.com']);
        dd($customerData);
        dd($request);
        Stripe::setApiKey(env('STRIPE_SECRET'));
        try{
            $charge = Charge::create(array([
                'amount' => 100,
                'currency' => 'usd',
                'source' =>$request->stripeToken,
                'description' => 'Test payment',
            ]));
            return redirect('/signup')->with('success', 'Payment successful!');
        }catch (\Exception $e){
            return back()->with('error_message', 'Error! ' . $e->getMessage());
        }
    }
}

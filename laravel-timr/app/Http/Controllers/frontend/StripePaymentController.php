<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Services\Stripe\CustomerService;
use App\Services\Stripe\CardService;
use Stripe\StripeClient;
use Stripe\Charge;
use Stripe\Stripe;
class StripePaymentController extends Controller
{

    // Create the Card
    // Create the payments
    public function payment(Request $request): RedirectResponse
    {
        try{
            /** save requests to variables **/
            $cardName = $request->input('cardName');
            $cardNumber = $request->input('cardNumber');
            // separate month and year of the card
//            $cardExpDate = explode('/',$request->input('cardExpDate'));
//            $cardExpMonth = $cardExpDate[0];
//            $cardExpYear = $cardExpDate[1];
            $cardCVC = $request->input('cardCVC');
            $rate = $request->input('rate');
            /** end save requests to variables **/

            // Creating the stripe customer
//            $customerService = new CustomerService();
//            $customerData = $customerService->create(['name'=>$cardName]);
//            $customerId = $customerData->id;

            // Creating the card of customer Note: card array keys are the stripe acceptable keys don't change
//            $cardService = new CardService();
//            $cardData = $cardService->createToken([
//                'number' => $cardNumber,
//                'exp_month' => $cardExpMonth,
//                'exp_year' => $cardExpYear,
//                'cvc' => $cardCVC,
//                //'customer_id' => $customerId
//            ]);
//            dd($cardData);
            Stripe::setApiKey(env('STRIPE_SECRET'));
            $charge = Charge::create(array([
                'amount' => 100*(int)$rate,
                'currency' => 'usd',
                'source' =>$request->stripeToken,
                'description' => 'Test payment',
            ]));
            return redirect('/signup')->with('success', 'Payment successful!');
        }catch (\Exception $exception){
            dd($exception->getMessage() );
            return back()->with('error_message', 'Error! ' . $exception->getMessage());

        }
    }
}

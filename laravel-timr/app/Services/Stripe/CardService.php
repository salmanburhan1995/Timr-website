<?php
namespace App\Services\Stripe;
use Stripe\Charge;
use Stripe\Stripe;
use Stripe\StripeClient;
class CardService{
    protected $stripe;
    public function __construct()
    {
        $this->stripe = new StripeClient(env('STRIPE_SECRET'));
    }
    // Create the stripe card token
    protected function createToken($card){
        try{
            return $this->stripe->tokens->create([
                'card'=>[
                    'number' => $card['number'],
                    'exp_month' => $card['exp_month'],
                    'exp_year' => $card['exp_year'],
                    'cvc' => $card['cvc'],
                ]
            ]);
        }catch (\Exception $exception){
            return $exception->getMessage();
        }

    }
    public function createCard($card){
        try{
            $token = $this->createToken($card);
            dd($token);
        }catch (\Exception $exception){
            return $exception->getMessage();
        }
    }
}

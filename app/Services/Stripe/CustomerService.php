<?php
namespace App\Services\Stripe;
use Stripe\Charge;
use Stripe\Stripe;
use Stripe\StripeClient;
class CustomerService{
    protected $stripe;
    public function __construct()
    {
        $this->stripe = new StripeClient(env('STRIPE_SECRET'));
    }
    // Create the customer
    public function create(Array $customer){
        return $this->stripe->customers->create([$customer]);
    }
}

<?php


namespace App\Http\Controllers\frontend;


use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function aboutus()
    {
        return view('frontend.about');
    }

    public function price()
    {
        return view('frontend.pricing');
    }

    public function feature()
    {
        return view('frontend.feature');
    }

    public function signup()
    {
        return view('frontend.signup');
    }

    public function payment()
    {
        return view('frontend.payment');
    }

    public function paymentConfirm()
    {
        return view('frontend.payment');
    }

    public function signupCompany()
    {
        return view('frontend.payment-confirm');
    }

    public function signupEmail()
    {
        return view('frontend.signup-email');
    }

    public function verifyOptEmail()
    {
        return view('frontend.verify-otp-by-email');
    }

    public function verifyOptNumber()
    {
        return view('frontend.verify-otp-by-number');
    }

    public function verifyEmail()
    {
        return view('frontend.verify-otp-wait-email');
    }

    public function verifyNumber()
    {
        return view('frontend.verify-otp-wait-number');
    }

}

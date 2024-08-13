<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\AbcController;
use App\Http\Controllers\frontend\StripePaymentController;
use App\Http\Controllers\frontend\LocalController;

/*Route::get('/', function () {
    //return view('welcome');
    return view('frontend.index');
});*/


//Route::middleware(['web'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
    Route::get('/price', [HomeController::class, 'price'])->name('price');
    Route::get('/feature', [HomeController::class, 'feature'])->name('feature');
    Route::get('/signup', [HomeController::class, 'signup'])->name('signup');
    Route::get('/payment/{rate}', [HomeController::class, 'payment'])->name('payment');
    Route::get('/payment/confirm', [HomeController::class, 'paymentConfirm'])->name('payment.confirm');
    Route::get('/signup/company', [HomeController::class, 'signupCompany'])->name('signup.company');
    Route::get('/signup/email', [HomeController::class, 'signupEmail'])->name('signup.email');
    Route::get('/verify/opt/email', [HomeController::class, 'verifyOptEmail'])->name('verify.opt.email');
    Route::get('/verify/opt/number', [HomeController::class, 'verifyOptNumber'])->name('verify.opt.number');
    Route::get('/verify/wait/email', [HomeController::class, 'verifyEmail'])->name('verify.opt.wait.email');
    Route::get('/verify/wait/number', [HomeController::class, 'verifyNumber'])->name('verify.opt.wait.number');

//});
//Route::get('lang/{locale}',[HomeController::class , 'change'])->name('lang.switch');
Route::get('lang/{locale}',[LocalController::class , 'change'])->name('lang.switch');
//Route::get('lang/{locale}',[HomeController::class , 'change'])->name('lang.switch');
Route::post('stripe-payment',[StripePaymentController::class,'payment'])->name('stripe.payment');

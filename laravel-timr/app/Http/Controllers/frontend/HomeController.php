<?php


namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\TranslationService;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /*protected $translationService;

    public function __construct(TranslationService $translationService)
    {
        $this->translationService = $translationService;
    }*/

    public function change($locale)
    {
        if (in_array($locale, ['en', 'da','no' ,'de' ,'pl','sv'])) {
            Session::put('locale', $locale);
            \Log::info('Locale switched to: ' . $locale);

        } else {
            Session::put('locale', config('app.locale'));
            \Log::info('Locale switched to default: ' . config('app.locale'));
        }
        return redirect()->back();
    }

    public function index(Request $request)
    {
        /*$lang = session('locale','en');
        $content = [
            'welcome_message' => 'Welcome to our website',
            'homepage_content' => 'This is the content of the homepage.'
        ];*/
        //dd($lang);
        //$content = translateContent($content, $lang, $this->translationService);
        /*if ($lang !== 'en') {
            foreach ($content as $key => $text) {
                $content[$key] = $this->translationService->translate($text, $lang);
            }
        }*/
       // $content = $this->translateContent($content, $lang);
        //return view('frontend.index', $content);
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

    public function payment($rate)
    {
        $rate = base64_decode($rate);
        return view('frontend.payment',compact('rate'));
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

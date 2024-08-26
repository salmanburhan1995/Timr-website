<?php


namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\TranslationService;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Exception;
use App\Http\Requests\UserSignupRequest;

class HomeController extends Controller
{
    /*protected $translationService;

    public function __construct(TranslationService $translationService)
    {
        $this->translationService = $translationService;
    }*/

    /*public function change($locale)
    {
        if (in_array($locale, ['en', 'da','no' ,'de' ,'pl','sv'])) {
            Session::put('locale', $locale);
            \Log::info('Locale switched to: ' . $locale);

        } else {
            Session::put('locale', config('app.locale'));
            \Log::info('Locale switched to default: ' . config('app.locale'));
        }
        return redirect()->back();
    }*/

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

    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {

            $user = Socialite::driver('google')->user();
            $userEmail = User::where('email', $user->email)->first();
            $finduser = User::where('google_id', $user->id)->first();
            if(!$userEmail)
            {
                if($finduser){

                    Auth::login($finduser);

                    return redirect()->intended('signup');

                }else{
                    $newUser = User::create([
                        'name' => $user->name,
                        'email' => $user->email,
                        'google_id'=> $user->id,
                        'password' => Hash::make('12345678')
                    ]);

                    Auth::login($newUser);

                    return redirect()->intended('signup');
                }
            }else{
                return redirect()->intended('signup')->with('error','User already exists');
            }


        } catch (Exception $e) {
            return redirect()->intended('signup')->with('error',$e->getMessage());

        }
    }

    public function redirectToLinkedin(){
        return Socialite::driver('linkedin-openid')->redirect();
    }
    public function handleLinkedinCallback()
    {
        try {

            $user = Socialite::driver('linkedin-openid')->user();
            $userEmail = User::where('email', $user->email)->first();
            if(!$userEmail)
            {
                $finduser = User::where('linkedin_id', $user->id)->first();

                if($finduser){

                    Auth::login($finduser);

                    return redirect()->intended('signup');

                }else{
                    $newUser = User::create([
                        'name' => $user->name,
                        'email' => $user->email,
                        'linkedin_id'=> $user->id,
                        'password' => Hash::make('12345678')
                    ]);

                    Auth::login($newUser);

                    return redirect()->intended('signup');
                }
            }else{
                return redirect()->intended('signup')->with('error','User already exists');
            }


        } catch (Exception $e) {
            return redirect()->intended('signup')->with('error',$e->getMessage());

        }
    }

    public function storeSignup(UserSignupRequest $request){
        try{
            $newUser = User::create([
                'name'=>$request->email,
                'email' => $request->email,
                'password' => Hash::make('12345678')
            ]);
            return redirect('/signup')->with('success', 'Signup successful!');
        }catch (Exception $exception){
            return back()->with('error_message', 'Error! ' . $exception->getMessage());
        }
    }

}

<?php
// app/Http/Middleware/SetLanguage.php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use App\Services\TranslationService;

class SetLanguage
{
    protected $translationService;

    public function __construct(TranslationService $translationService)
    {
        $this->translationService = $translationService;
    }

    public function handle(Request $request, Closure $next)
    {
        /*if ($request->has('lang')) {
            session(['lang' => $request->query('lang')]);
        }*/

        //app()->setLocale(session('lang', 'en'));

       /* if ($request->session()->has('locale')) {

            App::setLocale($request->session()->get('locale', 'en'));

        }*/
       /* $locale = Session::get('locale', config('app.locale'));
        App::setLocale($locale);

        \Log::info('Current locale: ' . $locale);*/

        $lang = session('locale', 'en');

        View::share('translationService', $this->translationService);
        View::share('lang', $lang);


        return $next($request);
    }
}


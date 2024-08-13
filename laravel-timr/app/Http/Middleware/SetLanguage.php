<?php
// app/Http/Middleware/SetLanguage.php
namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\View;
use App\Services\TranslationService;

//use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLanguage
{
    protected $translationService;

    public function __construct(TranslationService $translationService)
    {
        $this->translationService = $translationService;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        /*$lang = session('locale', 'en');*/


        $locale = Session::get('locale') ?? 'en';
        Session::put('locale', $locale);
        App::setLocale($locale);

        View::share('translationService', $this->translationService);
        View::share('lang', $locale);

        return $next($request);
    }
}


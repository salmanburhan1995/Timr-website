<?php


namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalController extends Controller
{
    public function change($locale)
    {
        if (in_array($locale, ['en', 'da','no' ,'de' ,'pl','sv'])) {
            App::setLocale($locale);
            Session::put('locale', $locale);
            \Log::info('Locale switched to: ' . $locale);

        } /*else {
            Session::put('locale', config('app.locale'));
            \Log::info('Locale switched to default: ' . config('app.locale'));
        }*/
        return back();
    }
}

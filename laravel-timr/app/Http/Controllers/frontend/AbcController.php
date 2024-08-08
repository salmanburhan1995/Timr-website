<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller\frontend;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

class AbcController extends Controller

{

   /* public function change(Request $request)
    {
        $lang = $request->input('lang');
        if (!in_array($lang, ['en', 'da'])) {
            abort(400);
        }
        Session::put('locale', $lang);
        return redirect()->back();

    }*/
    public function change($locale)
    {
        if (in_array($locale, ['en', 'ar'])) {
            Session::put('locale', $locale);
            \Log::info('Locale switched to: ' . $locale);
        } else {
            Session::put('locale', config('app.locale'));
            \Log::info('Locale switched to default: ' . config('app.locale'));
        }
        return redirect()->back();
    }

}

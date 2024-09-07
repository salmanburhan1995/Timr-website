<?php

namespace App\Http\Controllers\Crm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\HomePageHeroSectionRequest;

class HomepageController extends Controller
{
    public function index(){
        return view('cms.pages.home-page');
    }

    public function heroSectionStore(HomePageHeroSectionRequest $request){

        dd($request->validated());

    }
}

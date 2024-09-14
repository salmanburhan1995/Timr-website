<?php

namespace App\Http\Controllers\Crm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\HomePageHeroSectionRequest;
use App\Http\Requests\HomePage\AboutUsRequest;
use App\Http\Requests\HomePage\LetUsHelpYouRequest;
use App\Services\Languages\LanguageService;
use App\Services\Languages\HomePageService;

class HomepageController extends Controller
{
    private $homePage = 'homePage';

    // Function to view hero-section content form
    public function index(){
        return view('cms.pages.home-page');
    }
    // Function to store hero-section content
    public function heroSectionStore(HomePageHeroSectionRequest $request){

        try{
            // Validated inputs
            $input = $request->validated();

            $hero_sub_heading = $input['hero_sub_heading'];
            $hero_main_heading = $input['hero_main_heading'];
            $hero_para = $input['hero_para'];
            $hero_cta_text = $input['hero_cta_text'];
            $hero_cta_link = $input['hero_cta_link'];

            // get all languages
            $getAllLanguages = new LanguageService();
            $allLanguages = $getAllLanguages->getAllLanguages();

            // get the language folder
            $getLanguageFolder = new LanguageService();
            $languageFolder = $getLanguageFolder->getLanguageFolder();

            // foreach to change the language and insert into language file
            foreach($allLanguages as $language){
                // Call service to insert data into file
                $hompageService = new HomePageService();
                $saveContent = $hompageService->saveHeaderContent($input,$languageFolder.'/'.$language.'/homePage/');
            }
            return redirect('admin/homepage')->with('success','Hero section content updated successfully');
        }catch(\Exception $e){
            return redirect('admin/homepage')->with('error',$e->getMessage());
        }

    }
    // Function to view about-us content form
    public function aboutusSection(){
        return view('cms.pages.homePage.about-us');
    }
    // Function to store about-us content
    public function aboutusSectionStore(AboutUsRequest $request){

        try{
            // Validated inputs
            $input = $request->validated();

            // get all languages
            $getAllLanguages = new LanguageService();
            $allLanguages = $getAllLanguages->getAllLanguages();

            // get the language folder
            $getLanguageFolder = new LanguageService();
            $languageFolder = $getLanguageFolder->getLanguageFolder();

            // foreach to change the language and insert into language file
            foreach($allLanguages as $language){
                // Call service to insert data into file
                $hompageService = new HomePageService();
                $saveContent = $hompageService->saveAboutUsContent($input,$languageFolder.'/'.$language.'/homePage/');
            }
            return redirect('admin/homePage/about-us')->with('success','About-us content updated successfully');
        }catch(\Exception $e){
            return redirect('admin/homePage/about-us')->with('error',$e->getMessage());
        }

    }
    // Function to view let-us-help-you content form
    public function letUsHelpYouSection(){
        return view('cms.pages.homePage.let-us-help-you');
    }
    // Function to store let-us-help-you content
    public function letUsHelpYouSectionStore(LetUsHelpYouRequest $request){
        try{
            // Validated inputs
            $input = $request;

            // get all languages
            $getAllLanguages = new LanguageService();
            $allLanguages = $getAllLanguages->getAllLanguages();

            // get the language folder
            $getLanguageFolder = new LanguageService();
            $languageFolder = $getLanguageFolder->getLanguageFolder();

            // foreach to change the language and insert into language file
            foreach($allLanguages as $language){
                // Call service to insert data into file
                $hompageService = new HomePageService();
                $saveContent = $hompageService->saveLetUsHelpYouContent($input,$languageFolder.'/'.$language.'/homePage/');
            }
            return redirect('admin/homePage/let-us-help-you')->with('success','Let-us-help-you content updated successfully');
        }catch(\Exception $e){
            return redirect('admin/homePage/let-us-help-you')->with('error',$e->getMessage());
        }

    }

     // Function to view review content form
     public function reviewSection(){
        return view('cms.pages.homePage.let-us-help-you');
    }
    // Function to store review content
    public function reviewSectionStore(LetUsHelpYouRequest $request){
        try{
            // Validated inputs
            $input = $request;

            // get all languages
            $getAllLanguages = new LanguageService();
            $allLanguages = $getAllLanguages->getAllLanguages();

            // get the language folder
            $getLanguageFolder = new LanguageService();
            $languageFolder = $getLanguageFolder->getLanguageFolder();

            // foreach to change the language and insert into language file
            foreach($allLanguages as $language){
                // Call service to insert data into file
                $hompageService = new HomePageService();
                $saveContent = $hompageService->saveLetUsHelpYouContent($input,$languageFolder.'/'.$language.'/homePage/');
            }
            return redirect('admin/homePage/let-us-help-you')->with('success','Let-us-help-you content updated successfully');
        }catch(\Exception $e){
            return redirect('admin/homePage/let-us-help-you')->with('error',$e->getMessage());
        }

    }
}

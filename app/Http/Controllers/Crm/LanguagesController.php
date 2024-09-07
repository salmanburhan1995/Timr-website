<?php

namespace App\Http\Controllers\Crm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Languages\CreateFolderFilesLanguageService;

class LanguagesController extends Controller
{
    public function langugages(){
        $languageFolder = new CreateFolderFilesLanguageService;
        $getMainFolder = $languageFolder->getMainFolder();

        if(!$getMainFolder){
            $languageFolder->createLanguageFilesFolders();
        }

        dd($languageFolder);
    }
}

<?php

namespace App\Services\Languages;

use App\Services\Languages\CreateFolderFilesLanguageService;

class LanguageService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getAllLanguages()
    {
        $getLanguage = new CreateFolderFilesLanguageService();
        $allLanguages = $getLanguage->getLanguages();
        return $allLanguages;
    }

    public function getLanguageFolder(){
        $getLangFolder = new CreateFolderFilesLanguageService();
        return $getLangFolder->getLanguageFolder();
    }

    // Function to create the page folder if not exist
    public function createPageFolder(){
        // get the languages folder
        $getLanguageFolder = $this->getLanguageFolder();
        // Call the createFolderFilesLanguageService
        $createPageFolder = new CreateFolderFilesLanguageService();
        $getLanguageFolder = $createPageFolder->createLanguageFilesFolders();
    }
}

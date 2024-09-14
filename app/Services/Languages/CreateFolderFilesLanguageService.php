<?php

namespace App\Services\Languages;

class CreateFolderFilesLanguageService
{
    private $languageFolder = '../lang';

    private $languages = [
        'english'=>'en',
        'danish'=>'da',
        'german'=>'de',
        'swedish'=>'sv',
        'polish'=>'pl',
        'norwegian'=>'no'
    ];

    private $pagesFolders = [
        'homePage',
        'aboutUs',
        'pricing',
        'features',
        'signin',
        'betaSignup',
        'contactUs'
    ];



    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }




    // Create languages main folder
    private function createMainFunction($mainLanguageFolder){
        try{
            // if folder not  exist
            if(!is_dir($mainLanguageFolder))
            {
                // create the folder
                mkdir($mainLanguageFolder);
                // add sub folders in main folder
                $this->createLanguageFolder($mainLanguageFolder);
            }else{
                // Create the languages folders
                $this->createLanguageFolder($mainLanguageFolder);
            }
        }catch(\Exception $exception){
            throw  $exception->getMessage();
        }

    }

    // Create languages folders
    private function createLanguageFolder($mainLanguageFolder){
        try{
            // if folder exist
            if(is_dir($mainLanguageFolder))
            {
                // get language folder list
                $languageFolders = $this->languages;
                // foreach languages folder
                foreach($languageFolders as $languageFolder){
                    // if language folder exist
                    if(!is_dir($mainLanguageFolder.'/'.$languageFolder)){
                        mkdir($mainLanguageFolder.'/'.$languageFolder);
                        $this->createFoldersInLaguageFolder($mainLanguageFolder,$languageFolder);
                    }else{
                        $this->createFoldersInLaguageFolder($mainLanguageFolder,$languageFolder);
                    }
                }

            }else{

                $this->createMainFunction($mainLanguageFolder);
            }
        }catch(\Exception $exception){
            throw  $exception->getMessage();
        }

    }
    // Create pages folder in languages folders
    private function createFoldersInLaguageFolder($mainFolder,$languageFolder)
    {
        try{
            // intialized variable to check if every folder is uploaded
            $folderCheck = 0;
            // if the directory exist
            if(is_dir($mainFolder.'/'.$languageFolder)){
                // get the pages folder array
                $pages = $this->pagesFolders;

                // get existing files from folder
                $getPagesFolders = array_diff(scandir($mainFolder.'/'.$languageFolder), array('..', '.'));

                // foreach the list of pages folder to create
                foreach($pages as $key=>$pageFolder)
                {

                    // if pages folder not exist
                    if(!in_array($pageFolder,$getPagesFolders)){
                        if(!is_dir($mainFolder.'/'.$languageFolder.'/'.$pageFolder)){
                            mkdir($mainFolder.'/'.$languageFolder.'/'.$pageFolder);
                        }
                    }

                }
                return true;
            }else{

                $this->createLanguageFolder($mainFolder,$languageFolder,$folderFile);
            }
        }catch(\Exception $exception){
            dd($exception);
        }


    }

    // Get the main language directory
    public function getMainFolder()
    {
        // if folder exist
        if(is_dir($this->languageFolder))
        {
           return true;
        }
        else{
           return false;
        }
    }
    // Create the main directories and files
    public function createLanguageFilesFolders()
    {
        // if main folder not exist
        if(!is_dir($this->languageFolder))
        {
            $this->createMainFunction($this->languageFolder);
        }
        else{
            $this->createLanguageFolder($this->languageFolder);
        }

    }

    // get the languages
    public function getLanguages(){
        return $this->languages;
    }
    // get the language folder
    public function getLanguageFolder(){
        return $this->languageFolder;
    }

    // Add parameters
}

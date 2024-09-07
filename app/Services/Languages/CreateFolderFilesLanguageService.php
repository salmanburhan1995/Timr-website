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

    private $languagesFiles = [
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
                        $this->createFilesInLaguageFolder($mainLanguageFolder,$languageFolder);
                    }else{
                        $this->createFilesInLaguageFolder($mainLanguageFolder,$languageFolder);
                    }
                }

            }else{

                $this->createMainFunction($mainLanguageFolder);
            }
        }catch(\Exception $exception){
            throw  $exception->getMessage();
        }

    }
    // Create pages file in languages folders
    private function createFilesInLaguageFolder($mainFolder,$languageFolder)
    {
        try{
            // if the directory exist
            if(is_dir($mainFolder.'/'.$languageFolder)){
                // get the files array
                $files = $this->languagesFiles;
                // get existing files from folder
                $getfolderFiles = array_diff(scandir($mainFolder.'/'.$languageFolder), array('..', '.'));
                // foreach the list of files to create
                foreach($files as $file)
                {
                    // Check if the file exist
                    if(!in_array(($file.'.php'),$getfolderFiles)){
                        // create the file in the selected language folder
                        $createFile = fopen($mainFolder.'/'.$languageFolder.'/'.$file.'.php','x+');
                        fclose($createFile);

                    }
                }


            }else{

                $this->createLanguageFolder($mainFolder,$languageFolder,$folderFile);
            }
        }catch(\Exception $exception){
            throw  $exception->getMessage();
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

    // Add parameters
}

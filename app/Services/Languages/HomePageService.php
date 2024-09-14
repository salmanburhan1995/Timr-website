<?php

namespace App\Services\Languages;
use App\Services\Languages\LanguageService;
class HomePageService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    // Function to get the content of homepage
    public function saveHeaderContent($input,$languageFolder){
        try{
            // intialize upload file content
            $uploadFileContent = false;
            // Check file folder exist if yes then uploadFileContent is true, if false call function to create page folder
            if(is_dir($languageFolder)){

                $uploadFileContent = true;

            }else{

                $uploadFileContent = $this->createHeroSectionFile($languageFolder);
            }
            if($uploadFileContent){
                $fileContent = "<?php \n return [";
                foreach($input as $key=>$i){
                    $fileContent.= "'".$key."'=>'".$i."',\n";
                }
                $fileContent.= "];";

                // put contetnt to file
                file_put_contents($languageFolder."/HeroSection.php",$fileContent);
            }
            return true;
        }catch(Exception $e){
            throw $e->getMessage();
        }
    }

    // Function to create file if not exist
    public function createHeroSectionFile($languageFolder){
        try{
            $isChecked = false;
            // Check if the folder exist
            if(is_dir($languageFolder)){
                $isChecked = true;
            }else{

                $createPageFolder = new LanguageService();
                $pageFolder = $createPageFolder->createPageFolder();
                $isChecked = $pageFolder;
            }
            // if isChecked is true then create the heroSection file
            if($isChecked){
                $file = 'HeroSection';
                $createFile = fopen($languageFolder.'/'.$file.'.php','x+');
                fclose($createFile);
                return true;
            }else{
                return false;
            }

        }catch(Exception $e){
            return false;
        }

    }

    // Function about-us store
    public function saveAboutUsContent($input,$languageFolder){
        try{
            // intialize upload file content
            $uploadFileContent = false;
            // Check file folder exist if yes then uploadFileContent is true, if false call function to create page folder
            if(is_dir($languageFolder)){

                $uploadFileContent = true;

            }else{

                $uploadFileContent = $this->createAboutUsSectionFile($languageFolder);
            }
            if($uploadFileContent){
                $fileContent = "<?php \n return [";
                foreach($input as $key=>$i){
                    $fileContent.= "'".$key."'=>'".$i."',\n";
                }
                $fileContent.= "];";

                // put contetnt to file
                file_put_contents($languageFolder."/AboutUs.php",$fileContent);
            }
            return true;
        }catch(Exception $e){
            throw $e->getMessage();
        }
    }

     // Function to create file if not exist
     public function createAboutUsSectionFile($languageFolder){
        try{
            $isChecked = false;
            // Check if the folder exist
            if(is_dir($languageFolder)){
                $isChecked = true;
            }else{

                $createPageFolder = new LanguageService();
                $pageFolder = $createPageFolder->createPageFolder();
                $isChecked = $pageFolder;
            }
            // if isChecked is true then create the heroSection file
            if($isChecked){
                $file = 'AboutUs';
                $createFile = fopen($languageFolder.'/'.$file.'.php','x+');
                fclose($createFile);
                return true;
            }else{
                return false;
            }

        }catch(Exception $e){
            return false;
        }

    }

    // Function let-us-help you store
    public function saveLetUsHelpYouContent($input,$languageFolder){
        try{

            // intialize upload file content
            $uploadFileContent = false;
            // Check file folder exist if yes then uploadFileContent is true, if false call function to create page folder
            if(is_dir($languageFolder)){

                $uploadFileContent = true;

            }else{

                $uploadFileContent = $this->createLetUsHelpYouFile($languageFolder);
            }
            if($uploadFileContent){

                $fileContent = '';
                // foreach to get the inputs
                foreach($input->validated() as $key=>$in){
                    // Check if the input is array the get each values from array else insert the input onto main content
                    if(is_array($input->validated($key))){
                        // foreach to get the multiple inputs from input
                        // Check if the array have file
                        $mutiFileContent = "\n".'"'.$key.'" => ['."\n";
                        foreach($input->validated($key) as $multiKey=>$multiValue){
                            // Check if the array have file or input
                            if($multiValue instanceof \Illuminate\Http\UploadedFile && $multiValue->isValid()){
                                $imageName = time().'.'.$multiValue->extension();
                                $multiValue->move(public_path('/cms/assets/images'), $imageName);
                                $getImagePath = '"'.'/cms/assets/images'.'/'.$imageName.'",'."\n";
                                $mutiFileContent.= $getImagePath;
                            }else{
                                $mutiFileContent.= '"'.$multiValue.'",'."\n";
                            }

                        }
                        $mutiFileContent.= '],';
                        // add the multi-inputs content to main content
                        $fileContent.= $mutiFileContent;
                    }else{
                        $fileContent.= '"'.$key.'" => '.'"'.$in.'",'."\n";
                    }

                }

                $fileMainContent = "<?php \n return [\n".$fileContent."];";
                // put contetnt to file
                file_put_contents($languageFolder."/LetUsHelpYou.php",$fileMainContent);
            }
            return true;
        }catch(Exception $e){
            throw $e->getMessage();
        }
    }

    // Function to create file if not exist
    public function createLetUsHelpYouFile($languageFolder){
        try{
            $isChecked = false;
            // Check if the folder exist
            if(is_dir($languageFolder)){
                $isChecked = true;
            }else{

                $createPageFolder = new LanguageService();
                $pageFolder = $createPageFolder->createPageFolder();
                $isChecked = $pageFolder;
            }
            // if isChecked is true then create the heroSection file
            if($isChecked){
                $file = 'LetUsHelpYou';
                $createFile = fopen($languageFolder.'/'.$file.'.php','x+');
                fclose($createFile);
                return true;
            }else{
                return false;
            }

        }catch(Exception $e){
            return false;
        }

    }
}

<?php
/**
 * User: vytautas
 * Date: 10.02.2019
 * Time: 21:55
 */
class Upload_Controller extends APP_Controller{

    function process(){
        if(APP::$auth->isLoggedIn){
            $this->log->debug($_FILES);
            $this->log->debug(APP::$conf);
            $target_dir = APP::$conf['path']['images'] . 'blog' . DS;
            $file_name = basename($_FILES["file"]["name"]);
            $target_file = $target_dir . $file_name;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $this->log->debug($target_file);
            $this->log->debug($imageFileType);
            $nr = 0;
            while(file_exists($target_file)){
                $file_name = $nr . basename($_FILES["file"]["name"]);
                $target_file = $target_dir . $file_name;
                $nr++;
            }
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)){
                return $file_name;
            }else{
                return "error";
            }
        }
        return $this->displayNoAccessError();
    }
}
<?php

require_once APP::$conf['path']['lib'] . 'app_controller.class.php';
class Blog_Controller extends APP_Controller {

    //Overriding standard method with custom action.
    function process(){
        APP::$smarty->display('pages/posts.tpl');
    }

}
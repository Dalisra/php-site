<?php
/**
 * User: vytautas
 * Date: 18.02.14
 * Time: 21:55
 */
require_once APP::$conf['path']['lib'] . 'app_controller.class.php';
class Index_Controller  extends APP_Controller{

    //Overriding standard method with custom action.
    function process(){
        APP::$smarty->display('pages/index.tpl');
    }

}
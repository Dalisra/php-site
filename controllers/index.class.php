<?php
/**
 * User: vytautas
 * Date: 18.02.14
 * Time: 21:55
 */
class Index_Controller extends APP_Controller{

    //Overriding standard method with custom action.
    function process(){
        APP::$smarty->display('pages/index.tpl');
    }

}
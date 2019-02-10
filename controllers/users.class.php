<?php
/**
 * User: vytautas
 * Date: 10.02.2019
 * Time: 21:55
 */
class Users_Controller extends APP_Controller{

    //Overriding standard method with custom action.
    function process(){
        if(APP::$auth->isLoggedIn){
            $params['from'] = 'users';
            $users = APP::$db->getData($params);

            $processedUsers = array();
            foreach($users as $user){
                unset($user['password']);
                unset($user['apiKey']);
                $processedUsers[] = $user;
            }
            return $processedUsers;
        }

        return $this->displayNoAccessError();
        
    }
}
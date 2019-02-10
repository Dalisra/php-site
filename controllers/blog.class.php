<?php
/**
 * User: vytautas
 * Date: 18.02.14
 * Time: 21:55
 */
class Blog_Controller extends APP_Controller{

    //Overriding standard method with custom action.
    function process(){
        $id = (int)APP::$request->consumeNextPath();
        if($id){
            $params['from'] = 'blogs';
            $params['where'] = array("id"=>$id);
            $blogs = APP::$db->getData($params);
    
            if($blogs && $blogs[0]){
                $blog = $blogs[0];
                if($blog['tags'] && strlen(trim($blog['tags'])) > 0) $blog['tags'] = explode(",", $blog['tags']);
                else $blog['tags'] = array();
                $blog['elements'] = json_decode($blog['elements']);
                return $blog;
            }
            
        }
        return null;
    }

    function processCreate(){
        if(APP::$auth->isLoggedIn){
            $blog = $this->mapDataFieldsToBlog(json_decode(file_get_contents('php://input'), true));
            $blog["author"] = APP::$auth->user['id'];
            $blog["active"] = 1; // everything is active.
            return APP::$db->insertData("blogs", $blog);
        }
        return $this->displayNoAccessError();
        
    }

    function processUpdate(){
        if(APP::$auth->isLoggedIn){
            $data = json_decode(file_get_contents('php://input'), true);
            if(isset($data['id'])){
                $blog = $this->mapDataFieldsToBlog($data);
                return APP::$db->updateDataById("blogs", $blog, (int)$data['id']);
            }
        }
        return $this->displayNoAccessError();   
    }

    function processDelete(){
        if(APP::$auth->isLoggedIn){
            $data = json_decode(file_get_contents('php://input'), true);
            if(isset($data['id'])){
                return APP::$db->deleteDataById("blogs", (int)$data['id']);
            }
        }
        return $this->displayNoAccessError();   
    }

    function mapDataFieldsToBlog($data){
        $blog = array();
        if(isset($data['isSafe'])) $blog['isSafe'] = $data['isSafe'];
        if(isset($data['elements'])) $blog['elements'] = json_encode($data['elements']);
        //if(isset($data['active'])) $blog['active'] = 1;
        if(isset($data['tags'])) $blog['tags'] = $data['tags'];
        return $blog;
    }
}
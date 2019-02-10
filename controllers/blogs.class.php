<?php
/**
 * User: vytautas
 * Date: 18.02.14
 * Time: 21:55
 */
class Blogs_Controller extends APP_Controller{

    //Overriding standard method with custom action.
    function process(){
        $params['select'] = "b.*, u.name as author, u.avatar";
        $params['from'] = 'blogs b';
        $params['where'] = array('b.active'=>1);
        $params['leftjoin'] = "users u";
        $params['on'] = array("b.author"=>"u.id");
        if(isset($_GET['tag'])) $params['where']["tags"] = "%".$_GET['tag']."%";
        if(isset($_GET['limit']) && $_GET['limit'] <= 12) $params['limit'] = (int)$_GET['limit'];
        else $params['limit'] = 12;

        if(isset($_GET['page'])) $params['offset'] = $params['limit'] * (int)$_GET['page'];

        $params['orderby'] = "b.date desc";
        return APP::$db->getData($params);
    }

    function processCreate(){
        if(APP::$auth->isLoggedIn){
            $blog = $this->mapDataFieldsToBlog(json_decode(file_get_contents('php://input'), true));
            $blog["author"] = APP::$auth->user['id'];
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

    function mapDataFieldsToBlog($data){
        $blog = array();
        if(isset($data['isSafe'])) $blog['isSafe'] = $data['isSafe'];
        if(isset($data['elements'])) $blog['elements'] = $data['elements'];
        if(isset($data['active'])) $blog['active'] = $data['active'];
        if(isset($data['tags'])) $blog['tags'] = $data['tags'];
        return $blog;
    }

}
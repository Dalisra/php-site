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
        $blogs = APP::$db->getData($params);

        $processedBlogs = array();
        foreach($blogs as $blog){
            //TODO: remove code duplication
            if($blog['tags'] && strlen(trim($blog['tags'])) > 0) $blog['tags'] = explode(",", $blog['tags']);
            else $blog['tags'] = array();
            $blog['elements'] = json_decode($blog['elements']);
            $processedBlogs[] = $blog;
        }
        return $processedBlogs;
    }

}
<?php
define('DS', DIRECTORY_SEPARATOR);
define('CORE', dirname(dirname(dirname(__FILE__))) . DS . 'core');
define('ROOT', dirname(dirname(__FILE__)));


//load all configuration before processing request.
require CORE . DS . 'lib' . DS . 'init.class.php';
$init = new Init();
$init->initialize();

header('Content-Type: application/json');
$data = APP::$request->processRequest();

//at the end we show time used to process the message
if (APP::$conf['showTimer']) {
    $time = $GLOBALS['timer']->stop();
    $data["timer"] = array("message"=>"Request processed in: " . $time, "time"=>$time);
}else{
    APP::$log->debug("Request processed in: " . $GLOBALS['timer']->stop());
    // Apache logs: take a look at that: http://logging.apache.org/log4php/download.html
}
echo json_encode($data);
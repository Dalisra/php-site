<?php
define('DS', DIRECTORY_SEPARATOR);
define('CORE', dirname(dirname(dirname(__FILE__))) . DS . 'core');
define('ROOT', dirname(dirname(__FILE__)));


//load all configuration before processing request.
require CORE . DS . 'lib' . DS . 'init.class.php';
$init = new Init();
$init->initialize();

APP::$request->processRequest();

//at the end we show time used to process the message
if (APP::$conf['showTimer']) {
    echo "<!--Request processed in: " . $GLOBALS['timer']->stop() . "-->";
}else{
    APP::$log->debug("Request processed in: " . $GLOBALS['timer']->stop());
    // Apache logs: take a look at that: http://logging.apache.org/log4php/download.html

}
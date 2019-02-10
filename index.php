<?php
define('DS', DIRECTORY_SEPARATOR);
define('CORE', dirname(dirname(__FILE__)) . DS . 'core'); // Core root
define('ROOT', dirname(__FILE__)); // Site root
define('WWW', dirname(dirname(dirname(__FILE__)))); // www root

//echo password_hash("dal123quake321", PASSWORD_DEFAULT);
//exit;

$forceCORS = true;
if ($forceCORS) {
    //This logic is based on code found at: http://stackoverflow.com/a/9866124/278810
    //CORS headers sent below may conflict with CORS headers from the original response,
    //so these headers are sent after the original response headers to ensure their values
    //are the ones that actually end up getting sent to the browser.
    //Explicit [ $replace = true ] is used for these headers even though this is PHP's default behavior.
    //Allow access from any origin.
    header("Access-Control-Allow-Origin: *", true);
    header("Access-Control-Allow-Credentials: true", true);
    //Handle CORS headers received during OPTIONS requests.
    if ($_SERVER["REQUEST_METHOD"] == "OPTIONS") {
        if (isset($_SERVER["HTTP_ACCESS_CONTROL_REQUEST_METHOD"])) {
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS", true);
        }
        if (isset($_SERVER["HTTP_ACCESS_CONTROL_REQUEST_HEADERS"])) {
            header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}", true);
        }
        //No further action is needed for OPTIONS requests.
        exit(0);
    }
}

//load all configuration before processing request.
require CORE . DS . 'lib' . DS . 'init.class.php';
$init = new Init();
$init->initialize();

header('Content-Type: application/json');
$data = APP::$request->processRequest();
APP::$request->quit($data);
<?php
define('DS', DIRECTORY_SEPARATOR);
define('CORE', dirname(dirname(__FILE__)) . DS . 'core');
define('ROOT', dirname(__FILE__));


//load all configuration before processing request.
require CORE . DS . 'lib' . DS . 'init.class.php';
$init = new Init();
$init->initialize();

header('Content-Type: application/json');
$data = APP::$request->processRequest();
APP::$request->quit($data);
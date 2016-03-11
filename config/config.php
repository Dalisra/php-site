<?php

$conf = array();
$conf['prod'] = array();
$conf['test'] = array();
$conf['devel'] = array();


/* Site URLs */
$conf['prod']['url']['domain'] = 'http://www.prod.no/';
$conf['test']['url']['domain'] = 'http://www.test.no/';
$conf['devel']['url']['domain'] = 'http://localhost/site/';

$conf['prod']['url']['site'] = '/'; ## We always try to specify relative paths.
$conf['test']['url']['site'] = '/glass/';
$conf['devel']['url']['site'] = '/';

/* Full path to the content */
$conf['prod']['path']['full'] = ROOT . DS;
$conf['test']['path']['full'] = ROOT . DS;
$conf['devel']['path']['full'] = ROOT . DS;

/* Full path to the images */
$conf['prod']['path']['images'] = $conf['prod']['path']['full'] . 'webroot' . DS . 'images';
$conf['test']['path']['images'] = $conf['prod']['path']['full'] . 'webroot' . DS . 'images';
$conf['devel']['path']['images'] = $conf['devel']['path']['full'] . 'webroot' . DS . 'images';

/* Full path to the core */
$conf['prod']['path']['core'] = CORE . DS;
$conf['test']['path']['core'] = CORE . DS;
$conf['devel']['path']['core'] = CORE . DS;

/* Path to the library */
$conf['prod']['path']['lib'] = $conf['devel']['path']['core'] . 'lib' . DS;
$conf['test']['path']['lib'] = $conf['devel']['path']['core'] . 'lib' . DS;
$conf['devel']['path']['lib'] = $conf['devel']['path']['core']. 'lib' . DS;

/* Path to controllers */
$conf['prod']['path']['controllers'] = $conf['devel']['path']['full'] . 'controllers' . DS;
$conf['test']['path']['controllers'] = $conf['devel']['path']['full'] . 'controllers' . DS;
$conf['devel']['path']['controllers'] = $conf['devel']['path']['full']. 'controllers' . DS;

/* Path to the view / templates */
$conf['prod']['path']['view'] = $conf['prod']['path']['full'] . 'view' . DS;
$conf['test']['path']['view'] = $conf['prod']['path']['full'] . 'view' . DS;
$conf['devel']['path']['view'] = $conf['devel']['path']['full'] . 'view' . DS;

/* Smarty configuration */
$conf['prod']['path']['smarty'] = $conf['prod']['path']['lib'] . 'Smarty' . DS . 'Smarty-3.1.29' . DS;
$conf['test']['path']['smarty'] = $conf['prod']['path']['lib'] . 'Smarty' . DS . 'Smarty-3.1.29' . DS;
$conf['devel']['path']['smarty'] = $conf['devel']['path']['lib'] . 'Smarty' . DS . 'Smarty-3.1.29' . DS;

$conf['prod']['smarty']['templates_c'] = $conf['prod']['path']['lib'] . 'Smarty' . DS . 'templates_c' . DS;
$conf['test']['smarty']['templates_c'] = $conf['prod']['path']['lib'] . 'Smarty' . DS . 'templates_c' . DS;
$conf['devel']['smarty']['templates_c'] = $conf['devel']['path']['lib'] . 'Smarty' . DS . 'templates_c' . DS;

$conf['prod']['smarty']['templates'] = $conf['prod']['path']['view'];
$conf['test']['smarty']['templates'] = $conf['prod']['path']['view'];
$conf['devel']['smarty']['templates'] = $conf['devel']['path']['view'];

$conf['prod']['smarty']['cache'] = $conf['prod']['path']['lib'] . 'Smarty' . DS . 'cache' . DS;
$conf['test']['smarty']['cache'] = $conf['prod']['path']['lib'] . 'Smarty' . DS . 'cache' . DS;
$conf['devel']['smarty']['cache'] = $conf['devel']['path']['lib'] . 'Smarty' . DS . 'cache' . DS;

$conf['prod']['smarty']['config'] = $conf['prod']['path']['lib'] . 'Smarty' . DS . 'config' . DS;
$conf['test']['smarty']['config'] = $conf['prod']['path']['lib'] . 'Smarty' . DS . 'config' . DS;
$conf['devel']['smarty']['config'] = $conf['devel']['path']['lib'] . 'Smarty' . DS . 'config' . DS;

$conf['prod']['smarty']['plugins'] = $conf['prod']['path']['lib'] . 'Smarty' . DS . 'plugins' . DS;
$conf['test']['smarty']['plugins'] = $conf['prod']['path']['lib'] . 'Smarty' . DS . 'plugins' . DS;
$conf['devel']['smarty']['plugins'] = $conf['devel']['path']['lib'] . 'Smarty' . DS . 'plugins' . DS;

$conf['prod']['smarty']['debug_compile_time'] = false;
$conf['test']['smarty']['debug_compile_time'] = false;
$conf['devel']['smarty']['debug_compile_time'] = true;


/* Page configurations */
$conf['prod']['showTimer'] = false;
$conf['test']['showTimer'] = true;
$conf['devel']['showTimer'] = true;

/* Show debug messages */
$conf['prod']['enable_debug_msg'] = false;
$conf['true']['enable_debug_msg'] = false;
$conf['devel']['enable_debug_msg'] = true;


/* Log4PHP configuration */
$conf['prod']['path']['log4php'] = $conf['prod']['path']['core'] . 'lib' . DS . 'log4php' . DS . '2.3.0' . DS;
$conf['test']['path']['log4php'] = $conf['prod']['path']['core'] . 'lib' . DS . 'log4php' . DS . '2.3.0' . DS;
$conf['devel']['path']['log4php'] = $conf['devel']['path']['core'] . 'lib' . DS . 'log4php' . DS . '2.3.0' . DS;

$conf['prod']['path']['log4php_conf'] = $conf['prod']['path']['full'] . 'config' . DS . 'log4php.xml';
$conf['test']['path']['log4php_conf'] = $conf['prod']['path']['full'] . 'config' . DS . 'log4php.xml';
$conf['devel']['path']['log4php_conf'] = $conf['devel']['path']['full'] . 'config' . DS . 'log4php.xml';

/* Authentication configuration */
$conf['prod']['auth']['table'] = "users";
$conf['test']['auth']['table'] = "users";
$conf['devel']['auth']['table'] = "users";
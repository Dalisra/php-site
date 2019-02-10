<?php

$db_conf = array();
$db_conf['prod'] = array();
$db_conf['devel'] = array();


/* Database configuration */
$db_conf['prod']['host'] = 'DB_HOST_PROD';
$db_conf['devel']['host'] = 'localhost';

$db_conf['prod']['user'] = 'MYSQL_USER_PROD';
$db_conf['devel']['user'] = 'root';

$db_conf['prod']['password'] = 'MYSQL_PASSWORD_PROD';
$db_conf['devel']['password'] = '';

$db_conf['prod']['port'] = '3306';
$db_conf['devel']['port'] = '3306';

$db_conf['prod']['database'] = 'DEFAULT_DB_NAME';
$db_conf['devel']['database'] = 'default_site';

// Prefix tables.. if prefix='u_' then 'user' table will be 'u_user'
$db_conf['prod']['prefix'] = '';
$db_conf['devel']['prefix'] = '';

<?php
/**
* Constanst for database
* DS - separator
* SITE_PATH - path to site folder
* DB_USER - username 
* DS_PASS - password
* DB_HOST - hostname
* DB_NAME - name of database
*/

define('DS', DIRECTORY_SEPARATOR);
$sitePath = realpath(dirname(__FILE__) . DS);

define('SITE_PATH', $sitePath);
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'chat_db');


?>
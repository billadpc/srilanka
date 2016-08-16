<?php
//phpinfo();
@session_start();
error_reporting(0);
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);

require 'config.php';

// Also spl_autoload_register (Take a look at it if you like)
function __autoload($class) {
    //echo "==>".LIBS . $class . ".php<Br>";
    require LIBS . $class . ".php"; 
}
//exit;
require  LIBS . "Database.php"; 

//require HELP . 'Permisgroup.php';

$app = new Astconfig();

$app->init();





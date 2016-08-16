<?php
session_start();
error_reporting(1);
// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

// Always provide a TRAILING SLASH (/) AFTER A PATH
date_default_timezone_set('Asia/Bangkok');
define('LIBS', 'libs/');
define('HELP', LIBS.'helpers/');



if ($_SERVER['SERVER_NAME'] == "localhost") {
    $dbi['sql_username'] = 'postgres';
    $dbi['sql_password'] = '1234';//1234
    $dbi['sql_host'] = 'localhost';
    $dbi['sql_dbname'] = 'SRILANKA';
//    $dbi['sql_username'] = 'postgres';
//    $dbi['sql_password'] = '@Cobo0000';
//    $dbi['sql_host'] = '58.137.55.87';
//    $dbi['sql_dbname'] = 'SRILANKA';
    
    define('URL', 'http://localhost/srilanka/');
    define('PROJECTF','srilanka');

} else {
    $dbi['sql_username'] = 'postgres';
    $dbi['sql_password'] = '@Cobo0000';
    $dbi['sql_host'] = '58.137.55.87';
    $dbi['sql_dbname'] = 'SRILANKA';
    
    define('URL', 'http://58.137.55.87/');
    define('PROJECTF','');
}
define('APPPAGE',false);

define('LANGUAGE',($_COOKIE['langselect'] ? $_COOKIE['langselect'] : "en"));
//unset($_SESSION['ses_time_life']);
//echo "<pre>"; print_r($_SESSION);
$url = explode('/', $_GET['url']);
if(APPPAGE==false || $_GET['path']=="control" || $url[0]== "control"){
    define('DEFAULTPATH','control');
}else{
    define('DEFAULTPATH','webapp');
}



define('PUBLIC_PATH', URL.'public/'.DEFAULTPATH);

define('DB_TYPE', 'pgsql');
define('DB_HOST', $dbi['sql_host']);
define('DB_NAME', $dbi['sql_dbname']);
define('DB_USER', $dbi['sql_username']);
define('DB_PASS', $dbi['sql_password']);
define('DB_PORT', '5432');
define('DB_PREFIX', 'webapp.');


/* new parameter */
define('Character', 'UTF-8');
define('VALIDATE', 'select,or,and,delete,update,where,truncate,table');
// The sitewide hashkey, do not change this because its used for passwords!
// This is for other hash keys... Not sure yet
define('HASH_GENERAL_KEY', 'MixitUp200');

// This is for database passwords only
define('HASH_PASSWORD_KEY', 'catsFLYhigh2000miles');

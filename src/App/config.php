<?php
//Have we already been here?
if (!defined('DBHOST')) {
 
    // Define DB Params
    // define("DB_HOST", "localhost");
    // define("DB_USER", "root");
    // define("DB_PASS", "");
    // define("DB_NAME", "philter");

    define("DBUSER","root");
    define("DBPASSWORD","");
    define("DBDATABASE","philter");
    define("DBHOST","localhost");
    
    // Define URL
    define("ROOT_URL", "http://bit703.module2/");
 
    // Add some helpful filepath constants
    define('APP_ROOT', dirname(realpath(__FILE__)) . '/');
    define('VIEW_ROOT', APP_ROOT . 'Views/');
 
    // Tell this sytem we are in a development environment
    define('DEV_ENV', true);
}
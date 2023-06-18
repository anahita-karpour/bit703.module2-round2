<?php
 
/*
 * This file receives every request
 * This goes up one level out of /public
 * and goes into /App to find bootstrap.php
 */
//The dirname function is a PHP function that retrieves the absolute path to the file passed in, which in this case is __FILE_
//__FILE__ is a PHP ’magic constant’ representing the current file
require(dirname(__FILE__).'/../App/bootstrap.php');
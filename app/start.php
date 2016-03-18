<?php 

define('WEBROOT', str_replace('index.php', '', $_SERVER['SCRIPT_NAME']));
define('ROOT', str_replace(DIRECTORY_SEPARATOR . 'public', '', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME'])));

include('bootstrap.php');

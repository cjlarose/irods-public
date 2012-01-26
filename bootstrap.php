<?php
define('BASE_DIR', dirname(__FILE__) . '/');
require_once BASE_DIR . 'extrods-1.1.0.1beta/clients/prods/src/Prods.inc.php';
require_once BASE_DIR . 'config.php';
require_once BASE_DIR . 'utils.php';

$currentPath = $_SERVER['PHP_SELF']; 
 
// output: Array ( [dirname] => /myproject [basename] => index.php [extension] => php [filename] => index )
$pathInfo = pathinfo($currentPath); 

// output: localhost
$hostName = $_SERVER['HTTP_HOST']; 

// output: http://
$protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://';

// return: http://localhost/myproject/
define('BASE_URL', $protocol.$hostName.$pathInfo['dirname']."/");


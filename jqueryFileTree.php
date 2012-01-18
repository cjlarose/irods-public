<?php
define('BASE_DIR', dirname(__FILE__) . '/');
require_once BASE_DIR . 'extrods-1.1.0.1beta/clients/prods/src/Prods.inc.php';
require_once BASE_DIR . 'config.php';
require_once BASE_DIR . 'utils.php';
// make an iRODS account object for connection, assuming:
// username: demouser, password: demopass, server: srbbrick15.sdsc.edu, port: 1247
$account = new RODSAccount($config['server'], $config['port'], $config['username'], $config['password']);

$query = array_key_exists('dir', $_POST) ? $_POST['dir'] : $_GET['dir'];
//var_dump($query);
$dir = new ProdsDir($account, $query);

function is_valid_directory($dir) {
	global $config;
	if ($dir->exists() && substr($dir->path_str, 0, strlen($config['path'])) == $config['path']) 
		return TRUE;
	return FALSE;
}

if (is_valid_directory($dir)) {
	echo list_directory($dir);
} else {
	exit;
}


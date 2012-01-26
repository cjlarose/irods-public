<?php
require_once 'bootstrap.php';
// make an iRODS account object for connection, assuming:
// username: demouser, password: demopass, server: srbbrick15.sdsc.edu, port: 1247
$account = new RODSAccount($config['server'], $config['port'], $config['username'], $config['password']);

$query = array_key_exists('dir', $_POST) ? $_POST['dir'] : $_GET['dir'];
//var_dump($query);
$dir = new ProdsDir($account, $query);

if (is_valid_directory($dir)) {
	echo list_directory($dir);
} else {
	exit;
}


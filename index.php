<?php
define('BASE_DIR', dirname(__FILE__) . '/');
require_once BASE_DIR . 'extrods-1.1.0.1beta/clients/prods/src/Prods.inc.php';
require_once BASE_DIR . 'config.php';
require_once BASE_DIR . 'utils.php';
// make an iRODS account object for connection, assuming:
// username: demouser, password: demopass, server: srbbrick15.sdsc.edu, port: 1247
$account = new RODSAccount($config['server'], $config['port'], $config['username'], $config['password']);
//create an file object for read, assuming the path is "/tempZone/home/demouser/test_read.txt"
$home = new ProdsDir($account,"/" . $config['zone'] .  "/home/cjlarose");

$children = $home->getAllChildren();

foreach ($children as $child)
	echo get_class($child) . " " . $child->getName() . "<br />";

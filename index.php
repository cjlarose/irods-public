<?php
define('BASE_DIR', dirname(__FILE__) . '/');
require_once BASE_DIR . 'extrods-1.1.0.1beta/clients/prods/src/Prods.inc.php';
require_once BASE_DIR . 'config.php';
require_once BASE_DIR . 'utils.php';
// make an iRODS account object for connection, assuming:
// username: demouser, password: demopass, server: srbbrick15.sdsc.edu, port: 1247

#pr($_SERVER['QUERY_STRING']);
$query = $_SERVER['QUERY_STRING'];

$data = array();

if ($query == "") {
	$data['dir'] = $config['path'];
} else {
	$account = new RODSAccount($config['server'], $config['port'], $config['username'], $config['password']);
	$file = new ProdsFile($account, $query);
	if (is_valid_directory($file)) {
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		#header('Content-Disposition: attachment; filename=' . basename($file));
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		#header('Content-Length: ' . filesize($file));
		ob_clean();
		flush();
		$file->open("r");
		while($str=$file->read(4096))
			echo $str;
		//close the file pointer
		$file->close();
		exit;
	} else {
		$data['dir'] = $query;
	}
}

ob_start();
extract($data);
require_once BASE_DIR . 'template.php'; 
$html = ob_get_clean();
echo $html;

<?php
require_once 'bootstrap.php';
$query = $_SERVER['QUERY_STRING'];

$data = array();

if ($query == "") {
	$data['dir'] = $config['path'];
} else {
	$account = new RODSAccount($config['server'], $config['port'], $config['username'], $config['password']);
	$file = new ProdsFile($account, $query);
	if (is_valid_directory($file)) {
		$repl_info = $file->getReplInfo();
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename=' . $file->getName());
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		header('Content-Length: ' . $repl_info[0]['size']*1);
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

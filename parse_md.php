<?php
require_once 'bootstrap.php';
require_once 'php-markdown-1.0.1/markdown.php';

if (!isset($_GET['file'])) 
	exit('404');

$file_path = $config['path'] . $_GET['file'];

$account = new RODSAccount($config['server'], $config['port'], $config['username'], $config['password']);

$file = new ProdsFile($account, $file_path);

if (is_valid_directory($file)) {
	$file_info = pathinfo($file->path_str);	
	if ($file_info['extension'] == "md" || $file_info['extension'] == 'markdown') {
		$file->open('r');

		$pieces = array();
		while ($pieces[] = $file->read(4096));

		$contents = implode("", $pieces);
		//pr($contents);

		$html = Markdown($contents);
		echo $html;
	} else {
		echo "Invalid file format";
	}
} else {
	echo "404";
}

<?php

function pr() {
	$args = func_get_args();
	foreach ($args as $arg) {
		echo "<pre>";
		var_dump($arg);
		echo "</pre>";
	}
}

function element($tag_name, $content = '', $attributes = NULL) {
	if ($attributes) {
	    $html_string = "<$tag_name";
	    foreach ($attributes as $key => $value) {
		if (in_array($key, array('selected', 'checked'))) {
		    if ($value)
			$html_string .= " {$key}=\"{$key}\"";
		} else if ($value != '') {
		    $html_string .= " {$key}=\"{$value}\"";
		}
	    }
	} else {
	    $html_string = "<$tag_name"; //$html_string = "<$tag_name>";
	}

	if (!in_array($tag_name, array('input', 'hr', 'br'))) {
	    $html_string .= ">";
	    $html_string .= $content;
	    $html_string .= "</$tag_name>";
	} else {
	    $html_string .= " />";
	}

	return $html_string;
}

function base_url($path = '') {

	return "http://buhl.iplantcollaborative.org/irods-public/" . $path;

}

function anchor($contents, $path) {
	return element('a', $contents, array('href' => base_url($path)));
}

function size_to_human($bytes, $precision = 0) {
	$byte_table = array(
		'TB' => 1024 * 1024 * 1024 * 1024,
		'GB' => 1024 * 1024 * 1024,
		'MB' => 1024 * 1024,
		'KB' => 1024
	);

	foreach ($byte_table as $unit => $threshold) {
		if ($bytes >= $threshold)
			return round($bytes / $threshold, $precision) . $unit;
	}
	return $bytes . 'B';
}

function get_file_extension_class($filename) {
	if (strstr($filename, '.') == FALSE) 
		return FALSE;
	$ext = substr($filename, strpos($filename, '.') + 1);
	$ext = str_replace('.', '-', $ext);
	return "ext_" . $ext;
}

function list_directory($dir) {
	$children = $dir->getAllChildren();

	$directory_items = array();

	foreach ($children as $child) { 
		$child_class = get_class($child);
		if ($child_class == "ProdsFile") {
			//var_dump($child->getReplInfo());
			$repl_info = $child->getReplInfo();
			//pr($repl_info[0]);
			$size = size_to_human($repl_info[0]['size'] * 1, 2);
			$mtime = date('m/d/Y H:i:s T', $repl_info[0]['mtime'] * 1);
				
			$a_contents = element('span', $child->getName(), array('class' => 'filename'));
			$a_contents .= element('span', $size, array('class' => 'filesize')); 
			$a_contents .= element('span', $mtime, array('class' => 'mdate'));
			
			$li_contents = element('a', $a_contents, array(
				'href' => base_url(trim($child->path_str, '/')), 
				'rel' => $child->path_str
			));

			$li_contents .= element('button', 'Copy URL', array(
				'class' => 'btn share'
			));

			$file_extension_class = get_file_extension_class($child->getName());
			$li_class = "file";
			if ($file_extension_class != FALSE)
				$li_class .= " " . $file_extension_class;
			$directory_items[] = element('li', $li_contents, array('class' => $li_class));

		} elseif ($child_class == "ProdsDir") {
						
			$li_contents = element('a', $child->getName(), array(
				'href' => base_url(trim($child->path_str, '/')), 
				'rel' => $child->path_str . '/'
			));
			$directory_items[] = element('li', $li_contents, array('class' => 'directory collapsed'));

		}
	}

	$ul_contents = implode("\n", $directory_items);
	return element('ul', $ul_contents, array('class' => 'jqueryFileTree'));//, 'style' => 'display:none;'));
}

function list_directory_old($dir) {
	$children = $dir->getAllChildren();

	$directory_items = array();

	foreach ($children as $child) { 
		$child_class = get_class($child);
		if ($child_class == "ProdsFile") {
			
			$li_contents = anchor($child->getName(), $child->path_str);
			$directory_items[] = element('li', $li_contents);

		} elseif ($child_class == "ProdsDir") {
			
			$li_contents = anchor($child->getName() . "/", $child->path_str);
			$directory_items[] = element('li', $li_contents);

		}
	}

	$ul_contents = implode("\n", $directory_items);
	echo element('ul', $ul_contents);
	//echo get_class($child) . " " . $child->getName() . "<br />";
}


function is_valid_directory($dir) {
	global $config;
	if ($dir->exists() && substr($dir->path_str, 0, strlen($config['path'])) == $config['path']) 
		return TRUE;
	return FALSE;
}

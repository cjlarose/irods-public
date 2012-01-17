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

function list_directory($dir) {
	$children = $dir->getAllChildren();

	$directory_items = array();

	foreach ($children as $child) { 
		$child_class = get_class($child);
		if ($child_class == "ProdsFile") {
			
			$li_contents = element('a', $child->getName(), array('href' => '#', 'rel' => $child->path_str));
			$directory_items[] = element('li', $li_contents, array('class' => 'file'));

		} elseif ($child_class == "ProdsDir") {
			
			$li_contents = element('a', $child->getName(), array('href' => '#', 'rel' => $child->path_str . '/'));
			$directory_items[] = element('li', $li_contents, array('class' => 'directory collapsed'));

		}
	}

	$ul_contents = implode("\n", $directory_items);
	return element('ul', $ul_contents, array('class' => 'jqueryFileTree'));//, 'style' => 'display:none;'));
	//echo get_class($child) . " " . $child->getName() . "<br />";
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

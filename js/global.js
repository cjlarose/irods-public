$(document).ready( function() {

	function open_sub_tree(root, sub_dir) {
		//console.log($('#file-tree').find('a'));
		console.log(root, sub_dir);
		relative_path = sub_dir.substring(root.length + 1);
		if (relative_path != "") {
			path_array = relative_path.split('/');
			console.log(path_array);	
		
			current_path = root + '/';
			new_path = current_path + path_array[0] + '/'; 	
			target = $('a[rel="' + new_path + '"]');
			cb = function() {console.log('success! no subtree');};
			if (path_array[1]) {
				console.log('there is subtree');
				//console.log(new_path + path_array[1]);
				cb = function(root, dir) {
					open_sub_tree(root, dir);
				};
			}
			$(target).parent().fileTree({root: new_path, script: 'http://buhl.iplantcollaborative.org/irods-public/jqueryFileTree.php'}, null, function() {
				cb(current_path + path_array[0], sub_dir);
			});
		}
	}

	$('#file-tree').fileTree({ root: root, script: 'http://buhl.iplantcollaborative.org/irods-public/jqueryFileTree.php' }, function(file) {
		//alert(file);
		window.location.replace('http://buhl.iplantcollaborative.org/irods-public' + file);
	}, function() {open_sub_tree(root, dir)});

});

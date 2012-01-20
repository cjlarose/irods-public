$(document).ready( function() {

	relative_path = dir.substring(root.length + 1);
	$('#file-tree').fileTree(
		{ 
			root: root, 
			script: 'http://buhl.iplantcollaborative.org/irods-public/jqueryFileTree.php',
			dir: relative_path 
		}, 
		function(file) {
			window.location.replace('http://buhl.iplantcollaborative.org/irods-public' + file);
		});

});

$(document).ready( function() {
	$('#file-tree').fileTree({ root: dir, script: 'http://buhl.iplantcollaborative.org/irods-public/jqueryFileTree.php' }, function(file) {
		//alert(file);
		window.location.replace('http://buhl.iplantcollaborative.org/irods-public' + file);
	});
});

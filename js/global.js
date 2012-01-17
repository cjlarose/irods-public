$(document).ready( function() {
	$('#file-tree').fileTree({ root: '/iplant/home/cjlarose' }, function(file) {
		alert(file);
	});
});

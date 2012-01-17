$(document).ready( function() {
	$('#file-tree').fileTree({ root: '/some/folder/' }, function(file) {
		alert(file);
	});
});

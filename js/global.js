$(document).ready( function() {
	
	relative_path = dir.substring(root.length + 1);
	$('#file-tree').fileTree(
		{ 
			root: root, 
			script: base_url('jqueryFileTree.php'),
			dir: relative_path 
		}, 
		function(file) {
			window.location.replace(base_url(file));
		}, function (t) {
				$(t).find('li').mouseenter(function() {
					$(t).find('button').hide();
					$(t).find('li:hover > button').last().show();
				});
					
				// copy url button
				$(t).find('li button').show().zclip({
					path: base_url('js/ZeroClipboard.swf'),
					copy: function() {return $(this).prev().attr('href');},
					afterCopy: function() {
						$(t).find('button:disabled').removeAttr('disabled').html('Copy URL');
						$(this).attr('disabled', 'disabled').html('Copied');
					}
				}).attr('style', '');
		});

});

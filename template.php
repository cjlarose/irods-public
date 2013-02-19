<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>iPlant Public Files</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!--<link type="text/css" rel="stylesheet" href="<?php echo base_url("css/normalize.css"); ?>" />-->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("bootstrap/css/bootstrap.min.css"); ?>" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("css/global.css"); ?>" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("js/jqueryFileTree/jqueryFileTree.css"); ?>" />
	<script src="<?php echo base_url("js/jquery-1.7.1.min.js"); ?>"></script>
	<script src="<?php echo base_url("bootstrap/js/bootstrap.min.js"); ?>"></script>
	<script src="<?php echo base_url("js/jqueryFileTree/jqueryFileTree.js"); ?>"></script>
	<script src="<?php echo base_url("js/jquery.zclip.min.js"); ?>"></script>
	<script type="text/javascript">function base_url(path) {return '<?php echo BASE_URL; ?>' + path;} var root = "<?php echo $config['path']; ?>"; var dir = "<?php echo $dir; ?>";</script>
	<script src="<?php echo base_url("js/global.js"); ?>"></script>
</head>

<body>

<div class="container">

<div class="content">
		<div id="header">
			<img src="<?php echo base_url("imgs/logo.jpg"); ?>" alt="iPlant Collaborative" /> <h1>Public Files</h1>
			<div id="headers">
				<span>File name</span>
				<span>Size</span>
				<span>Last modified</span>
			</div>
		</div>
		<div id="file-tree"></div>
		<div id="footer">
			<p>
				<strong>iPlant Collaborative <?php echo date('Y'); ?></strong>
				<br />
				<a href="http://www.iplantcollaborative.org" target="_blank">iPlant Collaborative's Website</a> &nbsp; &nbsp; &nbsp; <a href="http://preview.iplantcollaborative.org/de" target="_blank">Discovery Environment</a> &nbsp; &nbsp; &nbsp; <a href="http://atmo-beta.iplantcollaborative.org" target="_blank">Atmosphere</a>
			</p>
		</div>
</div>

</div> <!-- /container -->

<div class="modal hide fade" id="file-modal">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Modal header</h3>
  </div>
  <div class="modal-body">
    <p>One fine body…</p>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn">Close</a>
    <a href="#" class="btn btn-primary">Save changes</a>
  </div>
</div>

</body>
</html>

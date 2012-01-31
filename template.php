<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>iPlant Public Files</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("css/global.css"); ?>" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("js/jqueryFileTree/jqueryFileTree.css"); ?>" />
	<script src="<?php echo base_url("js/jquery-1.7.1.min.js"); ?>"></script>
	<script src="<?php echo base_url("js/jqueryFileTree/jqueryFileTree.js"); ?>"></script>
	<script src="<?php echo base_url("js/jquery.zclip.min.js"); ?>"></script>
	<script type="text/javascript">function base_url(path) {return '<?php echo BASE_URL; ?>' + path;} var root = "<?php echo $config['path']; ?>"; var dir = "<?php echo $dir; ?>";</script>
	<script src="<?php echo base_url("js/global.js"); ?>"></script>
  </head>

  <body>
    <div class="hd">
          <h1><a class="brand" href="#">iPlant Public Files</a></h1>
    </div>

    <div class="container">

      <div class="content">
            <h2>File explorer</h2>
		<div id="headers">
			<span>File name</span>
			<span>Size</span>
			<span>Last modified</span>
		</div>
		<div id="file-tree"></div>
      </div>

      <footer>
        <p>iPlant Collaborative <?php echo date('Y'); ?></p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset=utf-8>
    <title>iPlant Public Files</title>
    <!--[if IE]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
      </script>
    <![endif]-->
    <style>
      body { margin:50px; }
      article, aside, figure, footer, header, hgroup, menu, nav, section { 
        display:block;
      }
    </style>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("global.css"); ?>" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("js/jqueryFileTree/jqueryFileTree.css"); ?>" />
	<script src="<?php echo base_url("js/jquery-1.7.1.min.js"); ?>"></script>
	<script src="<?php echo base_url("js/jqueryFileTree/jqueryFileTree.js"); ?>"></script>
	<script type="text/javascript">var dir = "<?php echo $dir; ?>";</script>
	<script src="<?php echo base_url("js/global.js"); ?>"></script>
  </head>
  <body>
	<h1><?php echo $dir; ?></h1>
	<div id="file-tree">
	</div>
    <footer>
    </footer>
  </body>	
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset=utf-8>
    <title>A simple HTML5 page layout</title>
    <!--[if IE]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
      </script>
    <![endif]-->
    <style>
      body { margin:100px; }
      article, aside, figure, footer, header, hgroup, menu, nav, section { 
        display:block;
      }
    </style>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("js/jqueryFileTree/jqueryFileTree.css"); ?>" />
	<script src="<?php echo base_url("js/jquery-1.7.1.min.js"); ?>"></script>
	<script src="<?php echo base_url("js/jqueryFileTree/jqueryFileTree.js"); ?>"></script>
	<script src="<?php echo base_url("js/global.js"); ?>"></script>
  </head>
  <body>
	<div id="file-tree">
	</div>
    <footer>
    </footer>
  </body>	
</html>

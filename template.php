<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>iPlant Public Files</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="<?php echo base_url("bootstrap/bootstrap.min.css"); ?>" rel="stylesheet">
    <style type="text/css">
      /* Override some defaults */
      html, body {
        background-color: #eee;
      }
      body {
        padding-top: 40px; /* 40px to make the container go all the way to the bottom of the topbar */
      }
      .container > footer p {
        text-align: center; /* center align it with the container */
      }
      .container {
      }

      /* The white background content wrapper */
      .container > .content {
        background-color: #fff;
        padding: 20px;
        margin: 0 -20px; /* negative indent the amount of the padding to maintain the grid system */
        -webkit-border-radius: 0 0 6px 6px;
           -moz-border-radius: 0 0 6px 6px;
                border-radius: 0 0 6px 6px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
      }

      /* Page header tweaks */
      .page-header {
        background-color: #f5f5f5;
        padding: 20px 20px 10px;
        margin: -20px -20px 20px;
      }

      /* Styles you shouldn't keep as they are for displaying this base example only */
      .content .span10,
      .content .span4 {
        min-height: 500px;
      }
      /* Give a quick and non-cross-browser friendly divider */
      .content .span4 {
        margin-left: 0;
        padding-left: 19px;
        border-left: 1px solid #eee;
      }

      .topbar .btn {
        border: 0;
      }

    </style>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("css/global.css"); ?>" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("js/jqueryFileTree/jqueryFileTree.css"); ?>" />
	<script src="<?php echo base_url("js/jquery-1.7.1.min.js"); ?>"></script>
	<script src="<?php echo base_url("js/jqueryFileTree/jqueryFileTree.js"); ?>"></script>
	<script type="text/javascript">var root = "<?php echo $config['path']; ?>"; var dir = "<?php echo $dir; ?>";</script>
	<script src="<?php echo base_url("js/global.js"); ?>"></script>
  </head>

  <body>

    <div class="topbar">
      <div class="fill">
        <div class="container">
          <a class="brand" href="#">iPlant Public Files</a>
          <ul class="nav">
            <!--<li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>-->
          </ul>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="content">
        <!--<div class="page-header">
          <h1>Page name <small>Supporting text or tagline</small></h1>
        </div>-->
        <div class="row">
          <div class="span12">
            <h2>File explorer</h2>
		<div id="headers">
			<span>File name</span>
			<span>Size</span>
			<span>Last modified</span>
		</div>
		<div id="file-tree"></div>
          </div>
          <div class="span4">
            <!--<h3>Secondary content</h3>-->
          </div>
        </div>
      </div>

      <footer>
        <p>iPlant Collaborative <?php echo date('Y'); ?></p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>

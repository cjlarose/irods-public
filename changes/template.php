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
        background-color: #fff;
		font-family: Univers, Calibri, "Gill Sans", "Gill Sans MT", "Myriad Pro", Myriad, "DejaVu Sans Condensed", "Liberation Sans", "Nimbus Sans L", Tahoma, Geneva, "Helvetica Neue", Helvetica, Arial, sans-serif;
		background-image: url("imgs/bg.png");
		background-repeat: repeat-x;
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
        -webkit-border-radius: 10px 10px 10px 10px;
        -moz-border-radius: 10px 10px 10px 10px;
        border-radius: 10px 10px 10px 10px;
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
      .content .span4, .content. span16 {
        min-height: 500px !important;
      }
      /* Give a quick and non-cross-browser friendly divider */
      .content .span4 {
        margin-left: 0;
        padding-left: 19px;
        border-left: 1px solid #eee;
      }
	  
	  .span16 > h1 {
		  position: relative;
		  top: -10px;
		  display: inline;
	  }

      .topbar .btn {
        border: 0;
      }
	  
	  .footer {
		  border-top: #CCC solid 1px;
		  padding-top: 10px;
		  text-align: center;
	  }
	  
	  .footer a:link, a:visited, a:active {
		  color: #0298AA;
		  text-decoration: none;
		  border-bottom: #0298AA solid 1px;
		  cursor: default;
	  }
	  
	  .footer a:hover {
		  color: #0298AA;
		  text-decoration: none;
		  border-bottom: #0298AA dashed 1px;
		  cursor: default;
	  }

    </style>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("css/global.css"); ?>" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("js/jqueryFileTree/jqueryFileTree.css"); ?>" />
	<script src="<?php echo base_url("js/jquery-1.7.1.min.js"); ?>"></script>
	<script src="<?php echo base_url("js/jqueryFileTree/jqueryFileTree.js"); ?>"></script>
	<script src="<?php echo base_url("js/jquery.zclip.min.js"); ?>"></script>
	<script type="text/javascript">function base_url(path) {return '<?php echo BASE_URL; ?>' + path;} var root = "<?php echo $config['path']; ?>"; var dir = "<?php echo $dir; ?>";</script>
	<script src="<?php echo base_url("js/global.js"); ?>"></script>
  </head>

  <body>

    <!--<div class="topbar">
      <div class="fill">
        <div class="container">
          <a class="brand" href="#">iPlant Public Files</a>
          <ul class="nav">
            <!--<li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>-->

    <div class="container">

      <div class="content">
        <!--<div class="page-header">
          <h1>Page name <small>Supporting text or tagline</small></h1>
        </div>-->
        <div class="row">
          <div class="span16">
            <img src="imgs/logo.jpg" alt="iPlant Collaborative" /> <h1>Public Files</h1>
			<div id="headers">
				<span>File name</span>
				<span>Size</span>
				<span>Last modified</span>
			</div>
			<div id="file-tree"></div>
            <br />
                        
            <div class="footer">
             <p><strong>iPlant Collaborative <?php echo date('Y'); ?></strong>
             <br />
             <a href="http://www.iplantcollaborative.org" target="_blank">iPlant Collaborative's Website</a> &nbsp; &nbsp; &nbsp; <a href="http://preview.iplantcollaborative.org/de" target="_blank">Discovery Environment</a> &nbsp; &nbsp; &nbsp; <a href="http://atmo-beta.iplantcollaborative.org" target="_blank">Atmosphere</a></p></div>
            
        </p>
          </div>
        </div>
      </div>

    </div> <!-- /container -->

  </body>
</html>

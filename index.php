<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Getsadze Design</title>
	<!--Preloader START-->
	<link rel="stylesheet" href="_plugins/css3-preloader-transition-start/css/normalize.css">
	<link rel="stylesheet" href="_plugins/css3-preloader-transition-start/css/main.css">
	<script src="_plugins/css3-preloader-transition-start/js/vendor/modernizr-2.6.2.min.js"></script>
	<!--Preloader END-->

	<!-- Bootstrap START -->
	<link rel="stylesheet" href="_plugins/bootstrap-3.3.2-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="_plugins/bootstrap-3.3.2-dist/css/bootstrap-theme.min.css">	
	<script src="_plugins/bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
	<!--Bootstrap END-->

	<link rel="stylesheet" href="assets/css/general.css" type="text/css" />
	<link rel="stylesheet" href="assets/css/en.css" type="text/css" />

</head>
<?php
/* black and white background image START */
error_reporting(0);
$the_bg = "assets/img/bg.jpg";
$ext = end(explode(".",$the_bg));

if($ext=="png"){
	$im = imagecreatefrompng($the_bg);
	$filter = imagefilter($im, IMG_FILTER_GRAYSCALE);
	$i = imagepng($im, $the_bg);
}else if($ext=="jpg"){
	$im = imagecreatefromjpeg($the_bg);
	$filter = imagefilter($im, IMG_FILTER_GRAYSCALE);
	$i = imagejpeg($im, $the_bg);
}else if($ext=="gif"){
	$im = imagecreatefromgif($the_bg);
	$filter = imagefilter($im, IMG_FILTER_GRAYSCALE);
	$i = imagegif($im, $the_bg);
}
/* black and white background image START */
?>
<body class="demo"> 
	<div class="bg"><?=$the_bg?></div>
	<!--[if lt IE 7]>
	<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->

	<!-- Demo content -->			
	<div id="demo-content">

		<div id="loader-wrapper">
			<div id="loader"></div>
		</div>

	</div>
	<!-- /Demo content -->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="assets/js/scripts.js" charset="utf-8"></script>
</body>
</html>
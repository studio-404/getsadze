<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Getsadze Design</title>
	<script src="assets/js/jquery.js"></script>
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

	<!--Slider START-->
    <link rel="stylesheet" href="_plugins/buildinternet-supersized-d6ed282/slideshow/css/supersized.css" type="text/css" media="screen" />		

	<script type="text/javascript" src="_plugins/buildinternet-supersized-d6ed282/slideshow/js/jquery.easing.min.js"></script>		
	<script type="text/javascript" src="_plugins/buildinternet-supersized-d6ed282/slideshow/js/supersized.3.2.7.min.js"></script>		
    <!--Slider END-->

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
	<div class="bgW">assets/img/slide.jpg,assets/img/slide2.jpg</div>
	<!--[if lt IE 7]>
	<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->

	<header class="studio-404-header beforeHeader" style="display:none">
		<div class="container studio-404-headerContainer">
			<div class="col-lg-2"><a href="home" class="preventlink"><img src="assets/img/logo.png" width="150" height="63" alt="" /></a></div>
			<div class="col-lg-7 studio-404-topMenu">
				<ul>
					<li><a href="works" class="preventlink hoverSub">Works</a></li>
					<li><a href="about" class="preventlink hoverSub">About</a></li>
					<li><a href="contact" class="preventlink hoverSub">Contact</a></li>
				</ul>
			</div>
			<div class="col-lg-3 studio-404-socialNetworks">
				<ul>
					<li class="message"><a href=""><img src="assets/img/ms.png" width="28" height="19" alt="Message" /></a></li>
					<li><a href=""><img src="assets/img/in.png" width="19" height="19" alt="LinkedIn" /></a></li>
					<li><a href=""><img src="assets/img/fb.png" width="19" height="19" alt="facebook" /></a></li>
				</ul>
			</div>
		</div>
	</header>

	<!-- Demo content -->			
	<div id="demo-content">

		<div id="loader-wrapper">
			<div id="loader"></div>
		</div>

	</div>
	<!-- /Demo content -->

	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="assets/js/scripts.js" charset="utf-8"></script>
	<script type="text/javascript">	
		jQuery(function($){			

			$.supersized({
			
				// Functionality
				slide_interval          :   5000,		// Length between transitions
				transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
				transition_speed		:	2000,		// Speed of transition
														   
				// Components							
				slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
				slides 					:  	[			// Slideshow Images
						{	
							image : 'assets/img/slide.jpg', 
							title : 'bg 1', 
							thumb : 'assets/img/slide.jpg', 
							url : 'javascript:;'
						},
						{	
							image : 'assets/img/Desert.jpg', 
							title : 'bg 1', 
							thumb : 'assets/img/Desert.jpg', 
							url : 'javascript:;'
						}
				]
				
			});
		});
	</script>
</body>
</html>
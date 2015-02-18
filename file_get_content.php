<?php

if(isset($_GET["page"]) && file_exists($_GET["page"].".php")){

	$file = file_get_contents($_GET["page"].".php");

	echo html_entity_decode($file);

}else if(isset($_GET["item"]) && is_numeric($_GET["item"])){
	$html = '<div class="headerInfo">
				<strong>Type: </strong><span>Brand Identity</span> &nbsp;&nbsp;&nbsp;
				<strong>Client: </strong><span>Funicular</span> &nbsp;&nbsp;&nbsp;
				<strong>Year: </strong><span>2013</span> &nbsp;&nbsp;&nbsp;
				<strong>Comments: </strong><span>Client wanted to comunicate ...</span>
			 </div>
			 <div class="clearer"></div>
			 <div class="col-lg-6 studio-404-loadedImageitem">
			 	<img src="assets/img/project.jpg" alt="project funicular" />
			 </div>
			 <div class="col-lg-6 studio-404-loadedImageitem">
			 	<img src="assets/img/project.jpg" alt="project funicular" />
			 </div>
			 <div class="col-lg-6 studio-404-loadedImageitem">
			 	<img src="assets/img/project.jpg" alt="project funicular" />
			 </div>
			 <div class="col-lg-6 studio-404-loadedImageitem">
			 	<img src="assets/img/project.jpg" alt="project funicular" />
			 </div>

			 <div class="clearer"></div>
			 ';
	echo $html;
	echo '<script> $(".closeMe").click(function(){ $(".ioo").fadeOut("slow"); }); </script>';
}else{
	$file = file_get_contents("home.php");
	echo html_entity_decode($file);
}

?>
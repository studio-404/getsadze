<?php
if(isset($_GET["page"]) && file_exists($_GET["page"].".php")){
	$file = file_get_contents($_GET["page"].".php");
	echo html_entity_decode($file);
}else{
	$file = file_get_contents("home.php");
	echo html_entity_decode($file);
}
?>
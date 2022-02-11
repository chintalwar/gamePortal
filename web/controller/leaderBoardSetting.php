<?php
if ($_GET['a'] == 1){
	$url = "UploadedGame/frogJump/canvas.html";
	echo "<a href ='#' onclick='return a()'><button class='btnPlay btnPlay2'>FROG SETTING</button></a>";
}else if($_GET['a'] == 2){
	$url = "UploadedGame/frogJump_updated/canvas.html";
}
?>
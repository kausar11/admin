<?php
	require_once "config.php";
	$barcode=strtotime(date('Y-m-d H:i:s'));
	$up = "profile_image/".$barcode.".jpg";
	$path = "profile_image/".$barcode.".jpg";
	if(is_uploaded_file($_FILES['photo']['tmp_name'])){
		move_uploaded_file($_FILES['photo']['tmp_name'],$up);
	}
	$db->query("INSERT INTO `profile`(`id`,`profile_image`) VALUES ('','$path')");
	header("LOCATION:profile.php");
	 
?>
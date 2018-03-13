<?php
	require_once "config.php";
	$barcode=strtotime(date('Y-m-d H:i:s'));
	$up = "../slider/".$barcode.".jpg";
	$path = "slider/".$barcode.".jpg";
	if(is_uploaded_file($_FILES['photo']['tmp_name'])){
		move_uploaded_file($_FILES['photo']['tmp_name'],$up);
	}
	$db->query("INSERT INTO `slider`(`id`, `slider_img`, `slider_text`) VALUES ('','$path','no-load images')");
	header("LOCATION:update_photo.php");
?>
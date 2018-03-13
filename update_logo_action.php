<?php
	require_once "../config.php";
	$id = $_REQUEST['id'];
	$sql = "select * from logo where id='$id'";
	$result = $db->query($sql);
	$data = mysqli_fetch_array($result);
	$filename ="../$data[1]";
	if(file_exists($filename)) {
		unlink($filename);
	}
	$barcode=strtotime(date('Y-m-d H:i:s'));
	$up = "../logo/".$barcode.".png";
	$path = "logo/".$barcode.".png";
	if(is_uploaded_file($_FILES['photo']['tmp_name'])){
		move_uploaded_file($_FILES['photo']['tmp_name'],$up);
	}
	$db->query("update logo set logo_path='$path' where id='$id'");
	header("LOCATION:logo.php");
?>
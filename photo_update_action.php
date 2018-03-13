<?php
	require_once "../config.php";
	$id = $_REQUEST['id'];
	$action = $_REQUEST['action'];
	$filename = "";
	$folder = "";
	$barcode=strtotime(date('Y-m-d H:i:s'));
	if($action==1){
		$folder = "slider/";
	}
	else if($action==2){
		$folder = "bannar/";
	}
	else if($action==3){
		$folder = "productimage/";
	}else if($action==4){
		$folder = "serviceimage/";
	}
	$up = "../".$folder.$barcode.".jpg";
	$path = $folder.$barcode.".jpg";
	if(is_uploaded_file($_FILES['photo']['tmp_name'])){
		move_uploaded_file($_FILES['photo']['tmp_name'],$up);
	}
	if($action==1){
		$sql = "select * from slider where id='$id'";
		$result = $db->query($sql);
		$data = mysqli_fetch_array($result);
		$filename ="../$data[1]";
		if(file_exists($filename)) {
		unlink($filename);
		}
		$db->query("update slider set slider_img='$path' where id='$id'");
		header("LOCATION:update_photo.php");
	}
	else if($action==2){
		$sql = "select * from bannar where id='$id'";
		$result = $db->query($sql);
		$data = mysqli_fetch_array($result);
		$filename ="../web/$data[1]";
		if(file_exists($filename)) {
		unlink($filename);
		}
		$db->query("update bannar set bannar='$path' where id='$id'");
		header("LOCATION:bannar.php");
	}
	else if($action==3){
		$sql = "select * from product_images where id='$id'";
		$result = $db->query($sql);
		$data = mysqli_fetch_array($result);
		$filename ="../$data[2]";
		if(file_exists($filename)) {
		unlink($filename);
		}
		$db->query("update product_images set img_path='$path' where id='$id'");
		header("LOCATION:update_product_images.php");
	}else if($action==4){
		$sql = "select * from service_images where id='$id'";
		$result = $db->query($sql);
		$data = mysqli_fetch_array($result);
		$filename ="../$data[2]";
		if(file_exists($filename)) {
		unlink($filename);
		}
		$db->query("update service_images set img_path='$path' where id='$id'");
		header("LOCATION:update_service_images.php");
	}
?>
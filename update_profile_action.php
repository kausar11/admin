<?php
    include_once"config.php";


    $id = $_REQUEST['id'];
	$sql = "select * from profile where id='$id'";
	$result = $db->query($sql);
	$data = mysqli_fetch_array($result);
	$filename ="$data[1]";
	if(file_exists($filename)) {
		unlink($filename);
	}
	$barcode=strtotime(date('Y-m-d H:i:s'));
	$up = "profile_image/".$barcode.".jpg";
	$path = "profile_image/".$barcode.".jpg";
	if(is_uploaded_file($_FILES['photo']['tmp_name'])){
		move_uploaded_file($_FILES['photo']['tmp_name'],$up);
	}
	$db->query("update profile set profile_image='$path' where id='$id'");
	header("LOCATION:profile.php");
	
?>
 
?>
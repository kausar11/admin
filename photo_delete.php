<?php
	require_once "../config.php";
	$id =$_REQUEST['id'];
	$action1 =$_REQUEST['action1'];
	if($action1==1){
		$db->query("DELETE FROM `slider` WHERE id='$id'");
		Header("Location:update_photo.php?msg=1");
	}
	if($action1==2){
		$sql = "select * from service where id='$id'";
		$result = $db->query($sql);
		$data = mysqli_fetch_array($result);
		$filename ="../$data[1]";
		if(file_exists($filename)) {
		unlink($filename);
		}
		$db->query("DELETE FROM `service` WHERE id='$id'");
		Header("Location:service.php?msg=1");
	}
	if($action1==3){
		$db->query("DELETE FROM `user_massege` WHERE id='$id'");
		Header("Location:show_massege.php?msg=1");
	}
?>
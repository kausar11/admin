<?php
	require_once "../config.php";
	extract($_POST);
	$password = "";
	$password = md5($admin_password);
	$sql = "select * from admin where username='$admin_name' && password='$password'";
	$result = $db->query($sql);
	$count = mysqli_num_rows($result);
	if($count!=0){
		session_start();
		$_SESSION["allow"] = "yes";
		header("Location:login.php");
	}
	else{
		$massege = "<font color='red' size='+1'><center>Your Information Incorect,Please try again.</center></font>";
		include_once("index.php");
	}
?>
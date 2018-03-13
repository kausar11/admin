<?php
	require_once "../config.php";
	$id = $_REQUEST['id'];
	$slid = $_REQUEST['slid'];
	$edited_text = $_POST['edited_text'];
	$sliderup = "";
	if($slid==1){
		$sliderup = "`header_contact_text`";
	}else if($slid==5){
		$sliderup = "descript2";
	}else if($slid==6){
		$sliderup = "descript3";
	}else if($slid==7){
		$sliderup = "descript4";
	}else if($slid==8){
		$sliderup = "descript5";
	}else if($slid==9){
		$sliderup = "descript6";
	}
	$db->query("UPDATE `logo` SET $sliderup ='$edited_text' WHERE id='$id'");
	header("LOCATION:update_header_contact.php");
?>
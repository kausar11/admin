<?php
	require_once "../config.php";
	$id = $_REQUEST['id'];
	$edited_text = $_POST['edited_text'];
	$db->query("UPDATE `text` SET text ='$edited_text' WHERE id='$id'");
	header("LOCATION:text.php");
?>
<?php

include_once "config.php";

$id =$_REQUEST['id'];
$sql ="select * from contact_info where id= '$id'";
$result = $db->query($sql);
$data = mysqli_fetch_array($result);

$db->query("delete from contact_info where id='$id'");
header("LOCATION:contact_info.php");

?>
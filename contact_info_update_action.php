<?php

include_once "config.php";

$id =$_REQUEST['id'];
 
$phone_num = $_POST['phone_num'];
$mobile_num = $_POST['mobile_num'];
$email = $_POST['email'];
 
$db->query("update contact_info set phone_num='$phone_num',mobile_num='$mobile_num',email='$email' where id ='$id'");
 
 
 header("LOCATION:contact_info.php");
 


?>
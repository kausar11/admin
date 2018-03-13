<?php
 include_once"config.php";
 
 $phone_num = $_POST['phone_num'];
 $mobile_num = $_POST['mobile_num'];
 $email = $_POST['email'];

 $db->query("INSERT INTO contact_info(phone_num,mobile_num,email) VALUES ('$phone_num','$mobile_num','$email')");
 
 header("LOCATION:contact_info.php");

?>
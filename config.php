<?php
	$con = array(
		'host'=>'localhost',
		'user'=>'root',
		'password'=>'',
		'dbname'=>'ahmprope_khanlogisticsltd'
	);
	$db = new mysqli($con['host'],$con['user'],$con['password'],$con['dbname']);
	if(mysqli_connect_errno()){
		echo "Server not connected!";
		exit();
	}
?>
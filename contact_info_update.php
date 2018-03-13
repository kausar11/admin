<?php
include_once "config.php";
?>

<html>
 <head>

 
 
 </head>
 <body>
 
 <style>
 body{background:rgb(180, 180, 180);}
  
	input[type=text]
	{
		margin: 6px;
		height: 38px;
		width: 480px;
		border: 1px black;
		background-color:burlywood;
	}
	
	input[type=text]:hover
	{
		background-color:yellow;
	}
	#email
	{
		height: 35px;
		width: 480px;
		border: 1px black;
		background-color: burlywood;
		padding-right: 259px;
		margin-left:62px;
	}
	
		#email:hover
		{
			background-color:yellow;
		}
		
input[type=submit]
{
	height: 31px;
	width: 127px;
	background-color: LightGray;
	padding: 7px;
	font-size: 13px;
	color: black;
	border: rebeccapurple;
	border-radius: 4px;
	margin-left:215px;
}

input[type=submit]:hover
{
	background-color:gray;
}


button
{
	height: 31px;
	width: 127px;
	background-color: LightGray;
	padding: 7px;
	font-size: 13px;
	color: black;
	border: rebeccapurple;
	border-radius: 4px;
	margin-top: -40px;
    margin-left: 40px;;
}

button:hover
{
	background-color:gray;
}
  
 </style>
 
<table>
 
 <?php

$id = $_REQUEST['id'];
$data= $id;

?>
<?php
$sql = "SELECT * FROM `contact_info` WHERE id='$id'";
$result = $db->query($sql);
$data = mysqli_fetch_array($result); 

?>
 <center>
<?php echo "<form action='contact_info_update_action.php?id=$data[0]' method='POST'>

Phone Number:
<input type='text' name='phone_num' value='$data[1]'><br><br>

Mobile Number:
<input type='text' name='mobile_num' value='$data[2]'><br> <br>

Email:
<input type='email' name='email' id='email' value='$data[3]'><br><br> 

<input type='submit' name='submit' value='submit'>

</form>";
?>
 </table>
 </center>
 <div style="margin-left:377px"><a href="contact_info.php"><button>Back To Home</button></a></div>
 
</body>
</html>
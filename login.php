<?php
	require_once "../config.php";
	session_start();
	if(isset($_SESSION["allow"])){
		if($_SESSION["allow"]=="yes"){
?>
	<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Admin Panel</title>
	<link rel="icon" type="images/x-icon" href="../logo/icon.png"/>
</head>
<body style="background:#428BCA">
	<center><img style="width:280px" src="<?php
		$sql = "select * from logo";
		$result = $db->query($sql);
		$data = mysqli_fetch_array($result);
		echo "../".$data[1];
	?>" alt=""/></center>
	<table cellpadding="5px" cellspacing="0px" style="margin:20px auto;background:#ddd;box-shadow:0px 0px 3px 2px #333">
		<tr>
			<td><button onclick="logout()" class="button_d" style="border:none">Logout</button></td>
			<td><button onclick="update_logo()" class="button_d" style="border:none">Update Logo</button></td>
			<td><button onclick="update_header_contact()" class="button_d" style="border:none">Update Header Contact</button></td>
			<td><button onclick="update_slider()" class="button_d" style="border:none">Update Slider</button></td>
		</tr>
		<tr>
			<td><button onclick="bannartext()" class="button_d" style="border:none">Text</button></td>
			<td><button onclick="user_info()" class="button_d" style="border:none">Service</button></td>
			<td><button onclick="update_product_images()" class="button_d" style="border:none">Update Product Images</button></td>
			<td><button onclick="update_service_images()" class="button_d" style="border:none">Update Service Images</button></td>
		</tr>
		<tr>
			<td><button onclick="show_massege()" class="button_d" style="border:none">Show Massage</button></td>
		</tr>
	</table>
</body>
</html>
<style>
	.button_d{
		border: none;
		width: 120px;
		height: 35px;
		background: green;
		color: #fff;
		font-weight: bold;
	}
	.button_d:hover{
		box-shadow:1px 3px 1px 0px gray;
	}
</style>
<script type="text/javascript">
	function logout(){
		window.location.assign("logout.php");
	}
	function update_slider(){
		window.location.assign("update_photo.php");
	}function update_logo(){
		window.location.assign("logo.php");
	}function update_header_contact(){
		window.location.assign("update_header_contact.php");
	}
	function bannartext(){
		window.location.assign("text.php");
	}function user_info(){
		window.location.assign("service.php");
	}function update_product_images(){
		window.location.assign("update_product_images.php");
	}function update_service_images(){
		window.location.assign("update_service_images.php");
	}function contact_us(){
		window.location.assign("contact_us.php");
	}function show_massege(){
		window.location.assign("show_massege.php");
	}
</script>
<?php
		}
		else{
			header("LOCATION:index.php");
		}
	}
	else{
		header("LOCATION:index.php");
	}
?>
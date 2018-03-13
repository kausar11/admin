<?php
	require_once "../config.php";
	$id = $_REQUEST['id'];
	$sql = "select * from user_massege where id='$id'";
	$result = $db->query($sql);
	$data = mysqli_fetch_array($result);
	$db->query("Update user_massege set attribute='1'");
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>View Massege</title>
</head>
<body  style="background:#428BCA">
	<div class="massege_body" style="width:500px;height:600px;background:#ddd;margin:20px auto;box-shadow: 0px 3px 10px 2px rgb(0, 0, 0);">
		<span onclick="location.href='show_massege.php'" style="font-size: 30px;font-weight: bold;color: red;cursor: pointer;">&times;</span>
		<table border="0" cellpadding="3px" cellspacing="0px" style="margin:0px auto">
			<thead>
			<tr>
				<th>Name: </th>
				<th><?php echo $data[1];?></th>
			</tr>
			</thead>
		</table>
		<table border="0" cellpadding="3px" cellspacing="0px" style="margin:0px auto">
			<thead>
			<tr>
				<th>Email: </th>
				<th><?php echo $data[3];?></th>
			</tr>
			</thead>
		</table>
		<table border="0" cellpadding="3px" cellspacing="0px" style="margin:0px auto">
			<thead>
			<tr>
				<th>Contact Number: </th>
				<th><?php echo $data[4];?></th>
			</tr>
			</thead>
		</table>
		<table border="0" cellpadding="3px" cellspacing="0px" style="margin:0px auto">
			<thead>
			<tr>
				<th>Address: </th>
				<th><?php echo $data[2];?></th>
			</tr>
			</thead>
		</table>
		<table border="0" cellpadding="3px" cellspacing="0px" style="margin:0px auto">
			<thead>
			<tr>
				<th>Subject: </th>
				<td><?php echo $data[5];?></td>
			</tr>
			</thead>
		</table>
		<table border="0" cellpadding="5px" cellspacing="0px" style="margin:0px auto">
			<thead>
			<tr>
				<th>Massege</th>
			</tr>
			<tr>
				<td style="width:430px;border-top:2px solid #000"></td>
			</tr>
			</thead>
			<tr>
				<td><?php echo $data[6];?></td>
			</tr>
		</table>
	</div>
</body>
</html>
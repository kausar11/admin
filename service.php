<?php
	require_once "../config.php";
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Service</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background:#428BCA">
	<?php
		if(isset($_REQUEST['msg'])){
			echo "<center><font color='red' size='+1'>Service Delete Successfully!</font></center>";
		}
	?>
	<table border="1px" cellpadding="5px" cellspacing="0px" style="margin:0px auto;color:#fff">
		<thead>
			<tr>
			<th>Product Images</th>
			<th>Header Text</th>
			<th>Description</th>
			<th>Update</th>
			<th>Delete</th>
			</tr>
		</thead>
			<?php
				$sql = "select * from service";
				$result = $db->query($sql);
				while($data = mysqli_fetch_array($result)){
			?>
			<tr>
				<td><img style="width:200px;height:150px" src="<?php echo "../".$data[1];?>"/></td>
				<td><h1><?php echo $data[2];?></h1></td>
				<td><?php echo $data[3];?></td>
				<td><center><a href="service_update.php?id=<?php echo $data[0];?>"><i class="fa fa-pencil-square-o" style="font-size:20px;color:rebeccapurple;cursor:pointer"></i></a></center></td>
				<td><center><a href="photo_delete.php?id=<?php echo $data[0];?>&&action1=2"><i class="fa fa-close" style="font-size:20px;color:red;cursor:pointer"></i></a></center></td>
			</tr>
			<?php
				}
			?>
	</table>
	<center><button onclick="location.href='add_service.php'">Add Service</button></center>
	<center><button onclick="location.href='index.php'" style="margin-top:10px">Back</button></center>
</body>
</html>
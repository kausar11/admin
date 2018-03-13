<?php
	require_once "../config.php";
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>User Massege</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background:#428BCA">
	<?php
		if(isset($_REQUEST['msg'])){
			echo "<center><font color='red' size='+1'>Massege Delete Successfully!</font></center>";
		}
	?>
	<table border="1px" cellpadding="5px" cellspacing="0px" style="margin:0px auto;color:#fff">
		<thead>
			<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Contact Number</th>
			<th>Subject</th>
			<th>View</th>
			<th>Delete</th>
			</tr>
		</thead>
			<?php
				$sql = "select * from user_massege";
				$result = $db->query($sql);
				while($data = mysqli_fetch_array($result)){
					if($data[7]==1){
			?>
					<tr>
					<td><?php echo $data[1];?></td>
					<td><?php echo $data[3];?></td>
					<td><?php echo $data[4];?></td>
					<td><?php echo $data[5];?></td>
					<td><center><a href="view_user_massege.php?id=<?php echo $data[0];?>"><i style="font-size:20px;color:rgb(75, 43, 43);cursor:pointer" class="fa fa-eye" aria-hidden="true"></i></a></center></td>
					<td><center><a href="photo_delete.php?id=<?php echo $data[0];?>&&action1=3"><i class="fa fa-close" style="font-size:20px;color:red;cursor:pointer"></i></a></center></td>
					</tr>
			<?php
					}
					else{
			?>
			<tr style="background:rgb(109, 130, 182) none repeat scroll 0% 0%">
				<td><?php echo $data[1];?></td>
				<td><?php echo $data[3];?></td>
				<td><?php echo $data[4];?></td>
				<td><?php echo $data[5];?></td>
				<td><center><a href="view_user_massege.php?id=<?php echo $data[0];?>"><i style="font-size:20px;color:rgb(75, 43, 43);cursor:pointer" class="fa fa-eye" aria-hidden="true"></i></a></center></td>
				<td><center><a href="photo_delete.php?id=<?php echo $data[0];?>&&action1=3"><i class="fa fa-close" style="font-size:20px;color:red;cursor:pointer"></i></a></center></td>
			</tr>
			<?php
				}
				}
			?>
	</table>
	<center><button onclick="location.href='index.php'" style="margin-top:10px">Back</button></center>
</body>
</html>
<?php
	require_once "../config.php";
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Text</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background:#428BCA">
	<table border="1px" cellpadding="5px" cellspacing="0px" style="margin:0px auto;color:#fff">
		<thead>
			<tr>
			<th>Page Name</th>
			<th>Text</th>
			<th>Update</th>
			</tr>
		</thead>
			<?php
				$sql = "select * from text";
				$result = $db->query($sql);
				while($data = mysqli_fetch_array($result)){
			?>
			<tr>
				<td><?php echo $data[1];?></td>
				<td><?php echo $data[2];?></td>
				<td><center><a href="text_update.php?id=<?php echo $data[0];?>"><i class="fa fa-pencil-square-o" style="font-size:20px;color:rebeccapurple;cursor:pointer"></i></a></center></td>
			</tr>
			<?php
				}
			?>
	</table>
	<center><button onclick="location.href='index.php'" style="margin-top:10px">Back</button></center>
</body>
</html>
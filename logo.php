<html>
<head>
	<title>Update Logo</title>
</head>
<body style="background:#428BCA">
	<table border="0px" cellspacing="0px" cellpadding="0px" style="margin:30px auto">
		<tr><td><?php
			if(isset($massege)){
				echo $massege;
			}
		?></td></tr>
	</table>
	<table border="1px" cellspacing="0px" cellpadding="0px" style="margin:30px auto">
		<?php
			require_once "../config.php";
			$sql12 = "SELECT * FROM `logo`";
			$result12 = $db->query($sql12);
			while($data12 = mysqli_fetch_array($result12)){
				
			
		?>
		<tr>
			<td><img style="width:200px;margin:15px" src="<?php echo "../".$data12[1];?>"/></td>
			<?php
				echo "<td><a href='update_logo.php?id=$data12[0]'><button>Update</button></a></td>";
			?>
		</tr>
		<?php
			}
		?>
	</table>
	<center><a href="login.php"><button>Back</button></a></center>
</body>
</html>
<?php
	require_once "../config.php";
	
?>
<html>
<head>
	<title>Heade Text Update</title>
</head>
<body style="background:#428BCA">
	<table border="1px" cellspacing="0px" cellpadding="0px" style="margin:30px auto">
		<?php
			require_once "../config.php";
			$sql12 = "select * from logo";
			$result12 = $db->query($sql12);
			$slidnum = 1;
			while($data12 = mysqli_fetch_array($result12)){
				
			
		?>
		<tr>
			<td><?php echo $data12[2];?></td>
			<?php
				echo "<td><a href='header_text_update.php?id=$data12[0]&&slidnum=$slidnum'><button>Update</button></a></td>";
			?>
		</tr>
		<?php
			}
		?>
	</table>
	<center><a href="index.php"><button>Back</button></a></center>
</body>
</html>

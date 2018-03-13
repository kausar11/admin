<?php
	require_once "../config.php";
	
?>
<html>
<body style="background:#428BCA">
	<?php
		if(isset($_REQUEST['msg'])){
			echo "<center><font color='red' size='+1'>Slider Delete Successfully!</font></center>";
		}
	?>
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
			$sql12 = "select * from slider";
			$result12 = $db->query($sql12);
			$action = 0;
			$colm = 0;
			while($data12 = mysqli_fetch_array($result12)){
				
			
		?>
		<tr>
			<td><img style="width:200px;margin:15px" src="<?php echo "../".$data12[1];?>" alt=""/></td>
			<?php
				$action = 1;
				echo "<td><a href='photo_update.php?id=$data12[0] && action1=$action && colm1=$colm'><button>Update</button></a></td><td><a  style='font-size: 25px;padding:5px;cursor:pointer;color: red;font-weight: bold;text-decoration:none' href='photo_delete.php?id=$data12[0] && action1=$action'>&times;</a></td>";
			?>
		</tr>
		<?php
			$colm++;
			}
		?>
	</table>
	<center><a href="add_photo.php"><button>Add Photo</button></a></center>
	<center><a href="index.php"><button>Back</button></a></center>
</body>
</html>

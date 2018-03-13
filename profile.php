<?php

include_once"config.php";

?>


<html>
<head> 
	<title>profile Image</title>
	
</head>
<body>

<table border="1" style="margin:30px auto;">
	
<?php

	$sql ="SELECT* FROM `profile`";
	$result = $db->query($sql);
	

?>	
 
	<caption><h1>Profile Image</h1></caption>
	<thead>
		 
		<th>Image</th>
		<th colspan="2">Action</th>
		
	</thead>
	<tbody>
	 <?php while($data = mysqli_fetch_array($result)){?>
		<tr>
			 <td><img style="width:200px; height:200px;" src="<?php echo $data[1];?>" alt="" /></td>
			<?php echo "<td><a href='update_profile.php?id=$data[0]'><button>Update</button></a></td>"?>
			<?php echo "<td><a href='delete_profile.php?id=$data[0]'><button>Delete</button></a></td>"?>
		 
		</tr>
	 <?php }?>
	</tbody>
</table>
<center>
	<a href="add_profile.php"><button>Add profile</button></a>
</center>
<center> 
	<a href="index.php"><button>Back</button></a>
</center>
</body>
</html>
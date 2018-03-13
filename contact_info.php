 <?php

include_once"config.php";

?>


<html>
<head> 
	<title>Contact Info</title>
	
</head>
<body style="background-color:rgb(180, 180, 180)">

<style>
table
{
	border:thin solid black 1px;
	margin:30px auto;
	padding:50px;
	background-color:gray;	
}

button
{
	height: 31px;
	width: 127px;
	background-color:LightGray;
	padding: 7px;
	font-size: 13px;
	color: black;
	border: rebeccapurple;
	border-radius: 4px;
}

button:hover
{
	background-color:gray;
}
tr
{
	background-color:LightGray;
	height: 27px;
}

 
 


</style>

<table>
	
<?php

	 $sql = "SELECT * FROM `contact_info`";
	 $result = $db->query($sql);
	 

?>	
 
	<caption><u><h1>Contact Information</h1></u></caption>
	<thead>
		 
		<u><th>Phone Number</th></u>
		<th>Mobile Number</th>
		<th>Email</th>
		<th colspan="2">Action</th>
		
	</thead>
 
	<tbody>
	  <?php while($data = mysqli_fetch_array($result)) {?>
		<tr>
			 <td><?php echo $data[1];?></td>
			 <td><?php echo $data[2];?></td>
			 <td><?php echo $data[3];?></td>
			 
			<?php echo"<td><a href='contact_info_update.php?id=$data[0]'><button>Update</button></a></td>"?>
			<?php echo "<td><a href='contact_info_delete.php?id=$data[0]'><button>Delete</button></a></td>"?>
		 
		</tr>
	  <?php }?>
	</tbody>
</table>

  <div style="margin-left: 377px"><a href="index.php"><button>Back To Home</button></a></div>
  <div style="margin-left: 508px;
margin-top: -31px;"><a href="contact_info_add.php"><button>Add Data</button></a></div> 
 
</body>
</html>
<?php
	require_once "../config.php";
	$id = $_REQUEST['id'];
?>
<html>
<head>
	<title>Update Service</title>
</head>
<body style="background:#428BCA">
<table border="0px" cellpadding="10px" cellspacing="0px" style="margin:0px auto">
<form action='add_service_action.php?id=<?php echo $id;?>&&update=1' method='post' enctype='multipart/form-data' onsubmit='return alertfun();'>
		<?php
			$sql = "select * from service";
			$result = $db->query($sql);
			$data = mysqli_fetch_array($result);
		?>
		<tr><td>Title Text</td><td><textarea name="header_text" id="header_text" cols="30" rows="5" placeholder="Please give title" required="true">
			<?php
				echo $data[2];
			?>
		</textarea></td></tr>
		
		<tr><td>Description</td><td><textarea name="description" id="description" cols="30" rows="5"  placeholder="Please give Description" required="true">
			<?php
				echo $data[3];
			?>
		</textarea></td></tr>
		
		<tr><td>Chooses file</td><td><input type='file' name='photo' id='photo'/></td></tr>
		<tr style='margin-top:20px'><td colspan='2' style='text-align:center;'><input type='submit' value='Uploade'/></td></tr>
</form>
</table>
<script type="text/javascript">
	function alertfun(){
	var retv=true;
	var photo=document.getElementById("photo").value;
	if(photo==""){
		alert("No Select File!");
		retv = false;
	}
	return retv;
	}
</script>
</body>
</html>

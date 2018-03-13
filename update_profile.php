<?php
	include_once"config.php";
	
?>
<html>
<body style="background:#428BCA">
<table border="0px" cellpadding="0px" cellspacing="0px" style="margin:0px auto">


<?php
	$id = $_REQUEST['id'];
	$data = $id;
	
?>
 <?php
 $sql = "SELECT * FROM `profile` WHERE id= '$id'";
 $result = $db->query($sql);
 $data = mysqli_fetch_array($result);
 
 ?>  
 <img style="width:300px;height:300px;" src="<?= $data[1];?>" alt="" />
<?php 	
echo "<form action='update_profile_action.php?id=$data[0]' method='post' enctype='multipart/form-data' onsubmit='return alertfun();'>
          
		<tr><td><input type='file' name='photo' id='photo'/></td></tr>
		<tr style='margin-top:20px'><td colspan='2' style='text-align:center;'><input type='submit' value='Uploade'/></td></tr>
	</form>";
	?>
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

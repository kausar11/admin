<?php
	require_once "../config.php";
	
?>
<html>
<body style="background:#428BCA">
<table border="0px" cellpadding="0px" cellspacing="0px" style="margin:0px auto">
<?php
	$id = $_REQUEST['id'];
	$action2 = $_REQUEST['action1'];
	$data = $id;

echo "<form action='photo_update_action.php?id=$data && action=$action2' method='post' enctype='multipart/form-data' onsubmit='return alertfun();'>
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

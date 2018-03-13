<?php
	require_once "../config.php";
	session_start();
	if(isset($_SESSION["allow"])){
		if($_SESSION["allow"]=="yes"){
			header("LOCATION:login.php");
?>
<?php
		}
		else{
?>
		<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="images/x-icon" href="../logo/icon.png"/>
</head>
<body style="background:#428BCA">
<div class="admin_login">
<marquee><h1 style="color:#ddd">Khan Logistics Ltd.</h1></marquee>
<form action="login_action.php" method="post" onsubmit="alert_function();">
	<div class="error_massege" style='margin-top: 60px;margin-bottom: -90px;'><?php if(isset($massege)){echo $massege;}?></div>
	<div class="login_main" style="width:350px;height:220px;background:#fff;margin:100px auto">
	<p style="color:#428BCA;padding:10px 7px;margin:10px 10px 10px 10px;">Please login to your account.</p>
			<label style="width:320px;margin-left:15px;">
			<i class="fa fa-user"></i>
			<input style="width: 304px;height:38px;border:1px solid #ddd;" type="text" name="admin_name" placeholder="Username" id="admin_name"/>
			</label>
			<br></br>
			<label style="width:320px;margin-left:15px;">
			<i class="fa fa-key"></i><input style="width: 304px;height:38px;border:1px solid #ddd" placeholder="Password" type="password" name="admin_password" id="admin_password"/>
			</label>
			<br><br>
			<label style="width: 310px;margin:8px;padding:12px">
			<input type="checkbox" name="remember" id="remember" /><font color="#847F85">&nbsp;Remember</font>
			</label>
			<label style="310px;margin:8px;margin-left:88px;padding:12px">
			<input style="border: 1px;padding: 9px;width:90px;background:#4CAF50;font-weight:bold;color:#fff" type="Submit" name="login_b" id="login_b" value="Login"/><i style="margin-left: -20px;color:#fff" class="fa fa-sign-in"></i>
			</label>
	</div>
</form>
</div>
	<script type="text/javascript">
		function alert_function(){
			var retv = true;
			var admin_name = document.getElementById("admin_name").value;
			var admin_password = document.getElementById("admin_password").value;
			var em_che = admin_name.indexOf("@");
			var em_dotcheck = admin_name.indexOf(".");
			if(admin_name == "" ||admin_password == ""){
				document.getElementById("login_b").disabled =true;
			}
			else if (em_che == -1 || em_dotcheck == -1){
				document.getElementById("login_b").disabled =true;
			}
			return retv;
		}
	</script>
</body>
</html>
<?php
		}
	}
	else{
?>
			<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background:#428BCA">
<div class="admin_login">
<marquee><h1 style="color:#ddd">Khan Logistics Ltd.</h1></marquee>
<form action="login_action.php" method="post" onsubmit="alert_function();">
	<div class="error_massege" style='margin-top: 60px;margin-bottom: -90px;'><?php if(isset($massege)){echo $massege;}?></div>
	<div class="login_main" style="width:350px;height:220px;background:#fff;margin:100px auto">
	<p style="color:#428BCA;padding:10px 7px;margin:10px 10px 10px 10px;">Please login to your account.</p>
			<label style="width:320px;margin-left:15px;">
			<i class="fa fa-user"></i>
			<input style="width: 304px;height:38px;border:1px solid #ddd;" type="text" name="admin_name" placeholder="Username" id="admin_name"/>
			</label>
			<br></br>
			<label style="width:320px;margin-left:15px;">
			<i class="fa fa-key"></i><input style="width: 304px;height:38px;border:1px solid #ddd" placeholder="Password" type="password" name="admin_password" id="admin_password"/>
			</label>
			<br><br>
			<label style="width: 310px;margin:8px;padding:12px">
			<input type="checkbox" name="remember" id="remember" /><font color="#847F85">&nbsp;Remember</font>
			</label>
			<label style="310px;margin:8px;margin-left:88px;padding:12px">
			<input style="border: 1px;padding: 9px;width:90px;background:#4CAF50;font-weight:bold;color:#fff" type="Submit" name="login_b" id="login_b" value="Login"/><i style="margin-left: -20px;color:#fff" class="fa fa-sign-in"></i>
			</label>
	</div>
</form>
</div>
	<script type="text/javascript">
		function alert_function(){
			var retv = true;
			var admin_name = document.getElementById("admin_name").value;
			var admin_password = document.getElementById("admin_password").value;
			var em_che = admin_name.indexOf("@");
			var em_dotcheck = admin_name.indexOf(".");
			if(admin_name == "" ||admin_password == ""){
				document.getElementById("login_b").disabled =true;
			}
			else if (em_che == -1 || em_dotcheck == -1){
				document.getElementById("login_b").disabled =true;
			}
			return retv;
		}
	</script>
</body>
</html>
<?php
	}
?>
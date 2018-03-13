
 <?php
include_once"config.php";
 
?>
 
 <html>
 <head></head>
 <body>
 <style>
 body{background:rgb(180, 180, 180);}
 form
 {
	margin: 100px auto;
	background-color:gray;
	width: 678px;
	height: 245px;
 }
	input[type=text]
	{
		margin: 6px;
		height: 38px;
		width: 480px;
		border: 1px black;
		background-color:white;
	}
	
	input[type=text]:focus
	{
		border:2px solid green;
	}
	#email
	{
		height: 35px;
		width: 480px;
		border: 1px black;
		background-color: white;
		padding-right: 259px;
		margin-left:62px;
	}
	
		#email:focus
		{
			border:2px solid green;
		}
		
input[type=submit]
{
	height: 31px;
	width: 127px;
	background-color: LightGray;
	padding: 7px;
	font-size: 13px;
	color: black;
	border: rebeccapurple;
	border-radius: 4px;
	margin-left:215px;
}

input[type=submit]:hover
{
	background-color:Gray;
}


button
{
	height: 31px;
	width: 127px;
	background-color: LightGray;
	padding: 7px;
	font-size: 13px;
	color: black;
	border: rebeccapurple;
	border-radius: 4px;
	margin-top: -162px;
    margin-left: -274px;;
}

button:hover
{
	background-color:gray;
}
  
 </style>
 <center>
<form action="contact_info_add_action.php" method="POST" onsubmit='return alertfun();'>
Phone Number:
<input type="text" name="phone_num" value="" id="phone"><br><br>  

Mobile Number:
<input type="text" name="mobile_num" value="" id ="mobile"><br><br>    

Email:
<input type="email" name="email" value="" id="email"><br> <br>  

<input type="submit" name="submit" value="submit">

</form>
<div style="margin-left: 377px"><a href="contact_info.php"><button>Back To Home</button></a></div>
</center>

<script type="text/javascript">
	function alertfun(){
	var retv=true;
	var phone=document.getElementById("phone").value;
	if(phone==""){
		alert("No Select File!");
		retv = false;
	}
	return retv;
	}
	
	function alertfun(){
	var retv=true;
	var mobile=document.getElementById("mobile").value;
	if(mobile==""){
		alert("No Select File!");
		retv = false;
	}
	return retv;
	}

	function alertfun(){
	var retv=true;
	var email=document.getElementById("email").value;
	if(email==""){
		alert("No Select File!");
		retv = false;
	}
	return retv;
	}

</script>
</body>
</html>
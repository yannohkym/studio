<?php
session_start();
require 'connect.php';
if (isset($_POST['login'])) {
	$password=$_POST['password'];
	$fullname=$_POST['fullname'];
	
	$result=mysqli_query($conn,"SELECT fullname,password FROM admins WHERE fullname='".$fullname."'AND password='".$password."'");
	$check=mysqli_fetch_array($result);
	if (isset($check)) {
		echo "<script>location.href='adminview.html'</script>";
	}else{
		echo "<script>alert('please your details are wrong')</script>";
	}
	
	}


?>
<!DOCTYPE html>
<html lang="eng">
<head>
	<meta charset="utf-8">
	<meta name="viewport"content="width=device-width,initial-scale=1">
	 <link rel="stylesheet" type="text/css" href="bootstrap-3.4.1-dist/css/bootstrap.min.css">
	<title>this is the login page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<h2>for official use only,,admins only</h2>
	<style type="text/css">
		body{ background-image: url("img/log.jpeg"); }
		
	 h2{


	 	color: aqua;
	 	font-size: 45px;
	 }

	</style>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body >
	<div class="cont">
	<form action="" method="post">
		 <div>
		<label for="fullname">fullname</label><br>
		<input type="text" name="fullname" placeholder="fullname" class="form-control"><br>
	</div>
	<div class="form-group">
		<label for="password">password</label><br>
		<input type="password" name="password" placeholder="password" class="form-control"><br><br>
	</div>
		<input type="submit" name="login" value="login"class="btn btn-primary">  <br>
		
		
		<a href="forgot_password.php">forgot password?</a>
		<a href="create_account.php">create account  here</a>


	</form>
     </div>
</body>
</html

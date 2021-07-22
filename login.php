<?php
if(isset($_SESSION['username'])){
    echo "<script>location.href='index.php'</script>";
}else{
}

include "connect.php";
/** @var $conn */
if (isset($_POST['login'])) {
    session_start();
	$password=$_POST['password'];
	$username=$_POST['username'];

	$result=mysqli_query($conn,"SELECT username,password FROM users1 WHERE username='".$username."' AND password='".$password."'");
	$check=mysqli_fetch_array($result);

    $_SESSION['username'] = $username;
   // $_SESSION['id'] = mysql_result($result,0,'id');
	if (isset($check)) {
		echo "<script>alert('you are logged in')</script>";

		echo "<script>location.href='userdash.php'</script>";

	
	}else{
		echo "<script>alert('Invalid Credentials. Please try again')</script>";
        echo "<script>location.href='login.php'</script>";

	}
	
	}
	if (isset($_POST['exit'])) {
		 echo "<script>location.href='login.php'</script>";
	
	}


?>
<!DOCTYPE html>
<html lang="eng">
<head>
	<meta charset="utf-8">
	<meta name="viewport"content="width=device-width,initial-scale=1">
	<title>this is the login page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.4.1-dist/css/bootstrap.min.css">
	<h2>welcome to malisafi online studio</h2>
	<style type="text/css">
		body{ background-image: url("img/log.jpeg"); }
		label{

			font-size: 20px;
			color: aqua;}
	 
	 h2{


	 	color: aqua;
	 	font-size: 45px;
	 }
	 .form-group{
	 	width: 300px;
	 	text-align: center;
	 	

	 }
	 .btn{
	 	width: 200px;
	 	color: blue;
	 	font-size: 20px;
	 	margin-left: 50px;
	 }
	 a{
	 	font-size: 15px;
	 	color: red;
	 }
	 #formu{
	 	 left: 50%;
    top: 50%;
    position: absolute;
    -webkit-transform: translate3d(-50%, -50%, 0);
    -moz-transform: translate3d(-50%, -50%, 0);
    transform: translate3d(-50%, -50%, 0)
   
	 }
	 i
	 {
	 	font-size: 50px;
	 	color: red;
	 }
	</style>
	<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body >
	
	<form action="" method="post" id="formu">
		<div class="form-group">
		<i class="fa fa-user-o" aria-hidden="true"></i> <label for="username">username</label>
		<input type="text" class="form-control" name="username" placeholder="username">
	     </div>
	     <div class="form-group">
		<i class="fa fa-unlock" aria-hidden="true"></i> <label>password</label>
		<input type="password" class="form-control" name="password" placeholder="password">
		</div><br>
		<input type="submit" class="btn btn-primary" name="login" value="login" >  
		
		<div>
		<a href="forgot_password.php">forgot password?</a>|
		<a href="create_account.php">create account  here</a>|
		<a href="index.html">exit</a>

	</form>
     
</body>
</html>

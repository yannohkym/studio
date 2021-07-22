<?php
// define variables and set to empty values
require 'connect.php';
$status="";
$usernameErr = $emailErr = $id_noErr = $passwordErr = "";
$username = $email = $id_no  = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $username = ($_POST["username"]);
        $idno = ($_POST["idno"]);
           $email = ($_POST["email"]);
              $password = ($_POST["password"]);
              if (empty($username)||empty($idno)||empty($email)||empty($password))
               {
              	echo "<script>alert('please all fields are required')</script>";
              }
           else
           {    
            
            $sql= 'INSERT INTO `users1`( `username`, `idno`, `email`, `password`) VALUES (?,?,?,?)';
              $stmt= $conn->Prepare($sql);
              $stmt->bind_param("siss",$username,$idno,$email,$password);
              $stmt->execute();
              echo "<script>alert('acount creation was successfull you can proceed to login')</script>";
              echo"<script>location.href='login.php'</script>";
              $stmt->close();
              $conn->close();

               }
           }
               ?>
<!DOCTYPE html>
<html lang="eng">
<head>
  <meta charset="utf-8">
  <meta name="viewport"content="width=device-width,initial-scale=1">
	<title>this is the create account page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="bootstrap-3.4.1-dist/css/bootstrap.min.css">
  <style type="text/css">
     body{ background-image: url('img/audio.jpeg'); }
     .account{
      width: 50%;
      text-align: center;

       }
       label{
        color: blue;
       }
       .wrapper{
        font-size: 80px;
        color: aqua;
        font-family: arial;
        background:grey;
        height: 80px;

       }
          img{
        width: 500px;
        height: 80px;
        float: left;

      }
      #accountform{
           left: 50%;
    top: 70%;
    position: absolute;
    -webkit-transform: translate3d(-50%, -50%, 0);
    -moz-transform: translate3d(-50%, -50%, 0);
    transform: translate3d(-50%, -50%, 0)
   
      }
      legend{ color: blue; }
  </style>
</head>
<body >
  <div class="wrapper">
      <h1><img src="img/logo.png" alt="studiologo"> malisafi online studio</div></h1>

     </div>

	<div class="account">
	<form action="" method="post" id="accountform">
		   <legend>please enter your details here!!!!</legend>
        <div class="form-group">
		     <label for="username">username</label>
		      <input type="text" name="username" class=" form-control" placeholder="username">
        </div>
      <div class="form-group">
		   <label for="idno">idno</label><br>
		    <input type="text" name="idno" class="form-control" placeholder="idno">
         </div>
            <div class="form-group">
		         <label for="email">email</label><br>
		        <input type="email" name="email" class="form-control" placeholder="email">
           </div>
           <div class="form-group">
		     <label for="password">password</label><br>
		    <input type="password" name="password"  class="form-control"value="password" placeholder="password">
       </div>
    
		<input type="submit" name="submit" value="submit" class="btn btn-primary">
		  </form>
  </div>
</body>
</html>

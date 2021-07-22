<?php
require 'connect.php';
$status="";
$fullnameErr=$occupationErr= $idnoErr = $passwordErr = "";
$fullname = $occupation= $idno  = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $fullname = ($_POST["fullname"]);
        $idno = ($_POST["idno"]);
           $occupation=($_POST["occupation"]);
              $password = ($_POST["password"]);
              if (empty($fullname)||empty($idno)||empty($occupation)||empty($password))
               {
              	echo "<script>alert('please all fields are required')</script>";
              }
           else
           {    
            
            $sql= 'INSERT INTO `admins`( `fullname`, `idno`, `password`, `occupation`) VALUES (?,?,?,?)';
              $stmt= $conn->Prepare($sql);
              $stmt->bind_param("siss",$fullname,$idno,$password,$occupation);
              $stmt->execute();
              echo "<script>alert('dear admin you can proceed to login')</script>";
              echo"<script>location.href='adminlogin.php'</script>";
              $stmt->close();
              $conn->close();

               }
           }
           else{
           	echo "<script>alert('something happend')</script>";
           }


?>  
   <!DOCTYPE html>
    <html lang="eng">
          <head>
            <meta charset="utf-8">
            <meta name="viewport"content="width=device-width,initial-scale=1">
          	<link rel="stylesheet" type="text/css" href="style.css">
            <link rel="stylesheet" type="text/css" href="bootstrap-3.4.1-dist/css/bootstrap.min.css">
            <style type="text/css">
              #admin_form{
                
                text-align: center;
              }
     body{
        background-color: rgb(53, 53, 53);
        }
        label{
          color: white;
        }

            </style>
          </head>
          <body >
          	
          <form id="admin_form" action=""method="POST">
            <div class="form-group">
          <label>fullname</label><br>
          <input type='text' name="fullname"><br>
           </div>
          <div class="form-group">
          <label for="idno">idno</label><br><br>
           <input type='text' name="idno"><br>
            </div>
           
            <div class="form-group">
           <label>password</label><br><br>
            <input type='password' name="password"><br>
          </div>
          <div class="form-group">
            <label>occupation</label><br><br>
             <input type='text' name="occupation"><br><br>
           </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      
          </body>
       </html>

<?php
    
class admin{

 var $fullname;
 var $idno;
var $password;
var $occupation;
var $email;
 public function _construct($fullname,$idno,$password,$occupation)
     {
     $this->fullname=$fullname;
     $this->idno=$idno;
     $this->password=$password;
     $this->occupation=$occupation;
       }
       
        public function getfullname(){
        	return $this->fullname;

                }
     
        public function getidno(){
        	
        return $this->idno;
                      }

        public function getpassword(){
        	return $this->password;
                       }

        public function getoccupation(){
        	return $this->occupation;

        }

        public function getemail(){
        	return $this->email;
        
        	}
        }
       function verify_user(){
       //here we require some sort of admin interface where he can verify the user by using some sort of ticking.or a star
    
      
       }
       function create_account(){
       	//here admin creates account with our studio
       	require_once'connect.php';
       $fullname= $_POST['fullname'];
       $idno= $_POST['idno'];
       $password= $_POST['password'];
       $occupation= $_POST['occupation'];
       $sql='INSERT into  `admins`(`fullname`,`idno`,`password`,`occupation`)VALUES(?,?,?,?)';
       $stmt=$conn->prepare($sql);
       $stmt->bind_param("siss",$fullname,$idno,$password,$occupation);
       $stmt->execute();
       $stmt->close();
       $conn->close();

       
       

       }
        function  edit_account(){
       //admins details are edited here
       	require_once'connect.php';
       $fullname= $_POST['username'];
       $idno= $_POST['idno'];
       $password= $_POST['password'];
       $occupation= $_POST['occupation'];
       $sql='UPDATE `admins` SET `fullname`=$fullname,`idno`=$idno,`password`=$password,`occupation`=$occupation, WHERE 1';
       $stmt=$conn->prepare($sql);
       $stmt->bind_param();
       $stmt->execute();
       $stmt->close();
       $conn->close();


        }
        function  appointment_approval(){
        	//we design some userinterface kind using html
        	require_once'reports.php';

        	
        }
        verify_user();
    }
     ?> 
         <?php 
         require 'connect.php';
         if(isset($_POST['submit']))
         { 
         	 	require_once'connect.php';
                  $fullname= ($_POST['username']);
                  $idno= ($_POST['idno']);
                  $password= ($_POST['password']);
                  $occupation= ($_POST['occupation']);
          if(empty($fullname)||empty($idno)||empty($password)||empty($occupation)){
          	echo "<script>prompt('all fields are required')</script>";
          }
           else{
           	
           	 	
            
                    $sql='INSERT into  `admins`(`fullname`,`idno`,`password`,`occupation`)VALUES(?,?,?,?)';
                  $stmt=$conn->prepare($sql);
               $stmt->bind_param("siss",$fullname,$idno,$password,$occupation);
             $stmt->execute();
           $stmt->close();
       $conn->close();
           }
         }


             ?>
       <html>
          <head>
          	<link rel="stylesheet" type="text/css" href="style.css">
          </head>
          <body bgcolor="blue">
          	
          <form id="admin_form" action=""method="POST">
          <label>fullname</label><br>
          <input type='text' name="fullname"><br>
          <label>idno</label><br><br>
           <input type='text' name="idno"><br>
           <label>password</label><br><br>
            <input type='text' name="password"><br>
            <label>occupation</label><br><br>
             <input type='text' name="occupation"><br><br>
             <input type="submit" name="submit" value="submit">
          </form>
      
          </body>
       </html>

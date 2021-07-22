<?php    
         require 'connect.php';
         if($_SERVER["REQUEST_METHOD"] == "POST") { 
     
         $username=($_POST['username']);
         $email=($_POST['email']);
         $date=($_POST['date']);
         $location=($_POST['location']);
         $session=($_POST['session']);


           if (empty($username)||empty($email)||empty($date)||empty($location)||empty($session)) 
               {
     	     

    
	echo "<script>alert('am worried something happened')</script>";

               }
           else
           {
      
        $query='INSERT INTO `bookings`(`username`, `email`, `date`, `location`,`session`) VALUES (?,?,?,?,?)';
       $stmt=$conn->Prepare($query);
      $stmt->bind_param("ssiss",$username,$email,$date,$location,$session);
     $stmt->execute();
     echo "<script>alert('your booking is placed')</script>";
     echo "<script>alert('we will get back to you via email,,thankyou')</script>";
     echo "<script>location.href='userdash.php'</script>";
     $stmt->close();
     $conn->close();
     
      }
     

}

if (isset($_POST['cancel'])) {
  echo "<script>location.href='userdash.php'</script>";
     
      }
?>
<!DOCTYPE html>
<html lang="eng">
<head>
  <meta charset="utf-8">
  <meta name="viewport"content="width=device-width,initial-scale=1.0">
	<title>home|bookings</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="icons/css/fontawesome-free-5.15.1-web.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap-3.4.1-dist/css/bootstrap.min.css">
<style type="text/css">
   label{
    color: blue;
   }
   .btn{
    width: 150px;
    color: blue;
  

   }
   .form-group{
    width: 350px;
    text-align: center;
    
    
   
    
   }
 #book_form{
   left: 50%;
    top: 60%;
    position: absolute;
    -webkit-transform: translate3d(-50%, -50%, 0);
    -moz-transform: translate3d(-50%, -50%, 0);
    transform: translate3d(-50%, -50%, 0);

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
body{

  color:black;
}
.header{
  text-align: center;
  text-decoration-color: blue;
  font-size: 20px;
}

</style>

</head>
<body >
   <div class="wrapper">
      <h1><img src="img/logo.png" alt="studiologo"> malisafi online studio</div></h1>

     </div>
      <div class="header"> 
        <h> this where we book are you ready!!!!</h>
      </div>
	<div id="book_form">
     <form action="" method="POST" class="justify-content-center">
 	    <div class="form-group">
         <label for="username">username</label>
          <input type="text" class=" form-control"name="username" placeholder="username">
        </div>
          <div class="form-group">
            <label>email</label>
                <input type="email" class="form-control" name="email" placeholder="email">
              </div>
              <div>
                     <div class="form-group">
                    <label>date</label>
                     <input type="date"  class="form-control"name="date" >
                     </div>

                     <div class="form-group">
                      <label>location</label>
                      <input type="text"  class="form-control" name="location" placeholder="location">
                    </div>
                            <div class="form-group">
                       <label for="session"> session 
                        <label><input type="radio" name="session" value="b">booking</label>
                        <label><input type="radio" name="session" value="a">appointment</label>
                         <label> <input type="radio" name="session" value="h">hiring</label>
                        </label>
                        </div>

                        <input type="submit" class="btn  btn-primary" name="book" value="book">
                         <input type="submit" class="btn  btn-primary" name="cancel" value="cancel">

          
       </form>
      </div>
</body>
</html>
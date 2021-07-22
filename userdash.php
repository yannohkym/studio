<?php
if(isset($_SESSION['username']))
{
    echo "<script>location.href='login.php'</script>";

}

?>
<!DOCTYPE html>
<html lang="eng">
<head>
	<meta charset="utf-8">
	<meta name="viewport"content="width=device-width,initial-scale=1">
	<title>this is  the home page </title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		body{ background-image: url("img/back.jpeg"); 


               
  overflow-y: scroll;
   
            }
		#main{
			font-size: 80px;
			color: aqua;
		}
		img{
			width: 170px;
			height: 100px;
		}
		.wrapper2 {
          border-radius: 20%;
          margin-top: -10px;
         
        }
        .wrapper1 {
          border-radius: 20%;
          margin-top: -118px;
         
        }
        .navbar a{
        	text-decoration: none;
        }
        .navbar a:hover {
  color: green;
  text-decoration: none;
}

	</style>
	<link rel="stylesheet" href="icons/fontawesome/css/all.min.css">
	  <link rel="stylesheet"  href="bootstrap-3.4.1-dist/css/bootstrap.min.css">
</head>
<body>
<h1 id="main">malisafi online studio</h1>



 
    <div class="wrapper1">
        <a href="home.html">
            <img src="img/logo.png" alt="studiologo">
        </a>


     </div>
      <div class="wrapper2">
    	<img src="img/avatar.png" alt="Avatar" id="img2">

     </div>

	<nav class=" navbar bg-light">
	<div class="navbar">
	
	  
	   
		<a  class="nav-link"href="production.html">production</a>
	
	
		<a  class="nav-link"href="instruments.html">instruments</a>
	
	
		<a class="nav-link" href="bookings.php">bookings</a>
		<a class="nav-link" href="bookings.php">my account</a>



		<a class="nav-link" href="logout.php">logout</a><br>
	
		

    </div>


</nav>
</body>
</html>
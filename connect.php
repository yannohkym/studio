<?php
$dbuser = "root";
$dbhost = "localhost";
$dbpassword = "kym123";
$dbname = "users";

$conn = new mysqli('localhost','root','kym123','users') ;

if ($conn) {
    echo "";
}
else{

    echo "wtf";
}


/* try {
  $dsn="mysql:host=".$dbhost.";dbname=".$dbname;
    $pdo= new PDO($dsn,$dbname,$dbpassword);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCHMODE,PDO::FETCH_ASSOC);
        echo "connected succesfully!";
        } catch (PDOException $e)
                  {
        echo "connection failed:".$e->getMessage();  */

 
    
 



?>
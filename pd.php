<?php

	$dbuser="root";
	$host="127.0.0.1";
	$dbpass="kym123";
	$db= new mysqli($host,$dbuser,$dbpass);
	if ($db) {
		echo "successfull";
	}else{
		echo "fatal error";
	}

 try{


	$dbuser="root";
	$host="127.0.0.1";
	$dbpass="kym123";
	$db= new PDO('mysql:host=127.0.0.1;dbname=users',$dbpass,$dbuser);
	$db->setattribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

 
 }
 catch(PDOException $e){
 	$e->getmessage();
 }
 

?>
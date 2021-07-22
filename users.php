<?php
class users
  {
  	 private $username;
  	 private $idno;
  	 private $email;
  	 private $password;
  	 private static lastidno;
  	function __construct($username,$idno,$email,$lastidno,$password)
  	{
  		$this->username=$username;
  		$this->idno=$idno;
  		$this->email=$email;
  		$this->password=$password;
  		$this->lastidno=self::lastidno;
  	}
  	  function getUsername(){
  	  	return $this->username;

  	  }
  	  function getIdno(){
  	  	return $this->Idno;

  	  }
  	  function getEmail(){
  	  	return $this->email;

  	  }
  	  function getPassword(){
  	  	return $this->password;

  	  }
     public function create_account(){


return $this->addUser();


     }
     public function delete_account(){

     }
     public function edit_account(){


         if (isset($_POST['send'])) {
             if (empty($_POST['username'])) {
                 $error .='<p><label class="text-danger">your username is required</label></p>';

             }
             else
             {
                 $subject=clean_text($_POST['username']);
                 if (!preg_match("/^[a-z A-Z]*$", $subject)) {
                     $error .='<p><label class="text-danger">your name format is wrong</label></p>';
                 }
             }


             if (empty($_POST['email'])) {
                 $error .='<p><label class="text-danger">your email is required</label></p>';

             }else
             {
                 $username=clean_text($_POST['email']);
                 if (!filter_var($email,FILTER_VALIDATE_EMAIL))
                 {
                     $error .='<p><label class="text-danger">your email format is wrong</label></p>';

                 }
             }
             if (empty($_POST['subject'])) {
                 $error .='<p><label class="text-danger">your username is required</label></p>';

             }
             else
             {
                 $subject=clean_text($_POST['subject']);
                 if (!preg_match("/^[a-z A-Z]*$", $subject)) {
                     $error .='<p><label class="text-danger">your subject is wrong</label></p>';
                 }
             }
             if (empty($_POST['message'])) {
                 $error .='<p><label class="text-danger">your username is required</label></p>';
             }
             else
             {
                 $message=clean_text($_POST['message']);
                 if (!preg_match("/^[a-z A-Z]*$", $subject)) {
                     $error .='<p><label class="text-danger">message cant be empty</label></p>';
                 }
             }
             if ($error !='')
             {



     }
  }  





$japanese= new users('kimani',234556,'iankym@gmail.com',2333
);
var_dump($japanese);





?>
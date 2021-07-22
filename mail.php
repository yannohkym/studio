<?php
requireAutoloader();
if (isset($_POST['username'])&&isset($_POST['email'])){
   $username=$_POST['username'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
   // require_once 'PHPmailer/PHPMailer.php';
   // require_once 'PHPmailer/SMTP.php';
   // require_once 'PHPmailer/Exception.php';
    $mail= new studio\mail\PHPMailer;
    //smtp settings
    $mail->isSMTP();
    $mail->host="smtp.gmail.com";
    $mail->SMTPAuth="true";
    $mail->username="malisafistudio1@gmail.com";
    $mail->pasword="35601697studio";
    $mail->port=587;//587 465
    $mail->SMTPSecure="tls";//tls ssl
    $mail->SMTPSecure = studio\mail\PHPMailer::ENCRYPTION_STARTTLS;
    //email settings
    $mail->setfrom($email,$username);
    $mail->addAddress("iankym1997@gmail.com");
    $mail->isHTML(true);
    $mail->subject=$subject;
    $mail->message=$message;

    $mail->MsgHTML($message);
    if ($mail->send()){
        $response="email sent successfully";
    }else{
        $response="something went wrong".$mail->ErrorInfo;
        exit(json_encode(array ("response"=>$response)));
    }











}












     $username='';
     $email='';
     $subject='';
     $message='';









?>
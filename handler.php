<?php

$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];


$email_from='sharifa_taimur2@hotmail.com';
$email_subject="New Form Submission";
$email_body= "User Name: $name .\n".
             "User Name: $visitor_email .\n".
			 "User subject: $subject .\n".
			 "User message: $message .\n"


$to="sharifa_taimur2@hotmail";


?>
<?php
$name=$_POST['name'];
$vistor_email=$_POST['email'];
$number=$_POST['number'];
$message=$_POST['message'];

$email_form='inthinktech@gmail.com';
$email_subject='New Form Submission';

$email_body="User Name: $name.\n".
             "User Email: $vistor_email.\n".
             "User Number: $number.\n".
             "User Message: $message.\n";
$to='inthinktech@gmail.com';
$headers ="From: $email_form \r\n";
$headers.="Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");

             




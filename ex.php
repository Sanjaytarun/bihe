<?php
$name=$_post['name'];
$email=$_post['email'];
$subject=$_post['subject'];
$message=$_post['message'];
$email_form='sanjays8139@gmail.com';
$email_sub="new form submition";
$email_body="user name: $name.\n"."user email: $email.\n"."subject: $subject.\n"."message: $message.\n";
$to="sanjays8139@gmail.com";
$header="from: $email_form \n\r";
$header .="reply-to: $email \n\r";
mail($to,$email_sub,$email_body,$header);
header("Loction:ex.html");

?>
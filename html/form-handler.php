<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$phone_number = $_POST['phone'];
$message = $_POST['message'];

$email_from ='info@github.com'

$email_subject ='New Form submission'

$email_body = "User Name: $name.\n".

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "User Phone: $phone_number.\n".
              "User Message: $message.\n";
              
              
$to = 'solutionsmwit@gmail.com';
$headers = "From : $email_from \r\n";

$headers .= "Reply-To : $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: submit.html");


?>
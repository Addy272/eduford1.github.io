<?php
$name = $_POST['name'];
$visitor_email = $_POST['visitor_email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@adityatech.com';

$email_subject = 'New from Submission';

$emai_body = "User Name: $name.\n".
"User Email: $visitor_email.\n".
"Subject: $subject.\n".
"User Message: $message.\n";

$to = 'adityashaw272@gmail.com';
$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email\r\n";

mail($to,$email_subject,$emai_body,$headers);

header ("Location. contact.html");

?>
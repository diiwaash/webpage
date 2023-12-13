<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$place = $_POST['place'];
$message = $_POST['message'];

$email_from = 'info@diiwaash.shop';

$email_subject = 'New form Submission'

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Place: $place.\n".
                 "User Message: $message.\n";
$to = 'diwash.shrestha88@gmail.com';

$headers = "From: $email_from\r\n";

$headers = "Reply To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");
?>
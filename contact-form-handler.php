<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'laura.a.wainer@outlook.com';

$email_subject = "new contactform portfolio";

$email_body = "User Name: $name. \n".
    "User email: $visitor_email. \n".
    " user message: $message. \n";

$to = "laura.a.wainer@outlook.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html")

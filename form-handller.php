<?php
$name = $_post['name'];
$visitor_email = $_post['email'];
$subject = $_post['subject'];
$message = $_post['message'];

$email_from = '@gmail.com'

$email_subject = 'New From Submission'
    
$email_body = "User Name: $name.\n".
               "User email: $visitor_email.\n".
                "Subject: $subject.\n".
               "User message: $message .\n";
$to = 'mmarawanff@gmail.com';
$headers = "From $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("location: contact.html");
?>
<?php
$name = $_POST['name'];
$visitor = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['meage'];

$email_from = 'info@roxdforduni.com';

$email_subject = 'New Form Submission';

$email_body = `User Name: $name.\n`.
              `User Email: $visitor_email.\n`.
              `Subject: $subject.\n`.
              `User Message: $message.\n`;

$to = 'alan.kelechi@gmail.com';

$headers = `From: $email_from \r\n`;

$headers = `Reply-To: $visitor_email \r\n`;

mail($to,$email_subject,$email_body,$headers);

header(`Location: contact.html`)
?>
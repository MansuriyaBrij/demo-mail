<?php
$to      = 'mansuriyabri@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$test = mail($to, $subject, $message, $headers);
print_r($test);
?>
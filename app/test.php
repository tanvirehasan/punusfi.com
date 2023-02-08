<?php
$to = "recipient@example.com";
$subject = "Test email using PHP";
$message = "This is a test email message.";
$headers = "From: team@punusfi.com" . "\r\n" .
    "X-Mailer: PHP/" . phpversion() . "\r\n" .
    "SMTP-Host: mail.punusfi.com\r\n" .
    "SMTP-Username: team@punusfi.com\r\n" .
    "SMTP-Password: TaNVIR@@114\r\n";

mail($to, $subject, $message, $headers);

?>
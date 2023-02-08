<?php


$to = "tanvirhasanbcse@gmail.com";
$subject = "Test email using PHP";
$message = "This is a test email message.";
$headers = "From: team@punusfi.com";

mail($to, $subject, $message, $headers);



?>
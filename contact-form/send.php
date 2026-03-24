<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "jarnekampshof@student.gc-webhosting.nl";

// Email settings
$subject = "New Contact Form Submission";
$body = "Name: $name\nEmail: $email\nMessage: $message";

$headers = "From: noreply@jarnekampshof.gc-webhosting.nl";

$headers += "\r\nReply-To: $email";

// Send email
if (mail($to, $subject, $body, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}

?>

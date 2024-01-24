<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';
// Access form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Validate and sanitize input (important for security!)
// ...

// Send email
$to = "johnoke.work@gmail.com"; // Replace with your email address
$subject = "New message from website";
$body = "Name: $name\nEmail: $email\nMessage:\n$message";
$headers = "From: $email";

if (mail($to, $subject, $body, $headers)) {
  echo "Message sent successfully!";
} else {
  echo "Error sending message";
}
?>

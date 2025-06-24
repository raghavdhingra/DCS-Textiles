<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function sanitize($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = sanitize($_POST['name'] ?? '');
    $email = sanitize($_POST['email'] ?? '');
    $phone = sanitize($_POST['phone'] ?? '');
    $message = sanitize($_POST['message'] ?? '');

    $mail = new PHPMailer(true);
    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'YOUR_GMAIL_ADDRESS@gmail.com'; // Your Gmail address
        $mail->Password = 'YOUR_APP_PASSWORD'; // Your Gmail app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom($mail->Username, 'Website Contact Form');
        $mail->addAddress('dcstextiles26@gmail.com');
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $mail->addReplyTo($email, $name);
        }

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body    = "<b>Name:</b> $name<br><b>Email:</b> $email<br><b>Phone:</b> $phone<br><b>Message:</b> $message";
        $mail->AltBody = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";

        $mail->send();
        echo '<h2>Thank you! Your message has been sent successfully.</h2>';
    } catch (Exception $e) {
        echo '<h2>Sorry, your message could not be sent. Please try again later.</h2>';
        // For debugging: echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
} else {
    header('Location: index.php');
    exit();
} 
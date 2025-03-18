<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include PHPMailer classes
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["send"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Validate Email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email address!'); window.location.href = 'contact.php';</script>";
        exit();
    }

    try {
        $mail = new PHPMailer(true);
        
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'tamilselvan8775@gmail.com'; // Replace with your Gmail
        $mail->Password   = 'itwmfrbqogkvfhaz'; // Replace with App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('recipient-email@gmail.com'); // Replace with recipient email
        $mail->addReplyTo($email, $name);

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = "<strong>Name:</strong> $name <br>
                          <strong>Email:</strong> $email <br>
                          <strong>Message:</strong> $message";

        // Send email
        $mail->send();
        echo "<script>alert('Message sent successfully!'); window.location.href = 'contact.php';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Message could not be sent. Error: {$mail->ErrorInfo}'); window.location.href = 'contact.php';</script>";
    }
}
?>

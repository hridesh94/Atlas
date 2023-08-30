<?php
require 'PHPMailer/PHPMailerAutoload.php'; // Make sure to download and include PHPMailer

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $mail = new PHPMailer;
    $mail->setFrom($email, $name);
    $mail->addAddress('hridesh.web@gmail.com', 'Hridesh'); // Your Gmail address here
    $mail->Subject = 'New Message from Contact Form';
    $mail->Body = $message;
    
    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
}
?>

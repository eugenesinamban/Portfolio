<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
    $parameters = [
        //
        'email',
        'name',
        'message'
    ];

    foreach ($parameters as $param) {
        //
        $$param = $_POST[$param];
    }

    try {
        //Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = True;                                   // Enable SMTP authentication
        $mail->Username   = 'eugene.sinamban@gmail.com';                     // SMTP username
        $mail->Password   = 'ofbdfotodunvknxt';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('eugene.sinamban@gmail.com');     // Add a recipient

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = "Comment received on Portfolio";
        $mail->Body    = MailTemplate::generate($message, $name);
        $mail->AltBody = $message;

        $mail->send();
        $alert = 'Message has been sent';
        //
    } catch (Exception $e) {
        //
        $_SESSION['error'] = $mail->ErrorInfo;
        header("location:contact.php?error=on");
        exit;
    }
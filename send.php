<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';




    $mail = new PHPMailer(true);

    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'manikarthic321@gmail.com';
    $mail->Password = 'hkcorhofghvkwxjn';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = '465';

    $mail->setFrom('manikarthic321@gmail.com');

    $mail->addAddress('manikarthic321@gmail.com');

    $mail->isHTML(true);

    $mail->Subject = "DAILYKAI";
    $mail->Body = '<h1>NEWSLETTER REGISTRATION</h1>.<p>You registered for the Motrax Auto Hub in our online shop</p>.
    <p>Thank you for your interest in our newsletter</p>.<h2>Your Motrax Auto Hub Team</h2>';

 
    $mail->send();
    
    echo
    "
    <script>
    // alert('Sent Successfully');
    document.location.href = 'home'
    </script>
    ";
   


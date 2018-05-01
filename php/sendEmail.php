<?php

use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';

function sendEmail($toAddress, $toName, $fromAddress, $fromName, $subject, $messageBody) {

    $mail = new PHPMailer(true);

    $mail->CharSet = 'UTF-8';
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = "topqmatrix2018@gmail.com";
    $mail->Password = "topqsupport18";
    
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    
    // Email Sending Details
    $mail->setFrom("topqmatrix2018@gmail.com", $fromName);
    $mail->addAddress($toAddress, $toName);
    $mail->Subject = $subject;
    $mail->msgHTML($messageBody);
    
    // Success or Failure
    if (!$mail->send()) {
        return false;
    }
    else {
        return true;
    }
}
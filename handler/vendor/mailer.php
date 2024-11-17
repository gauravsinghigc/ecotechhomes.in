<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('PHPMailer/src/Exception.php');
require('PHPMailer/src/PHPMailer.php');
require('PHPMailer/src/SMTP.php');

function sendmail($to, $subject, $message, $CCMail = null, $BCCMail =  null)
{
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = 'smtp.hostinger.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'noreply@navix.in';
    $mail->Password   = 'Navix@1800';
    // $mail->SMTPDebug = 2;                            
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    //Recipients
    $mail->setFrom('noreply@navix.in', "@ecotechhomes.in");
    if ($CCMail != "") {
        foreach ($CCMail as $ccmail) {
            $mail->addCC("$ccmail");
        }
    }
    if ($BCCMail != "") {
        foreach ($BCCMail as $bccmail) {
            $mail->addBCC("$bccmail");
        }
    }
    $mail->addAddress($to);

    //Content
    $mail->isHTML(true);
    $mail->Subject = "$subject";
    $mail->Body    = ($message);

    if (!$mail->Send()) {
        return false;
    } else {
        return true;
    }
}

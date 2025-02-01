<?php
require_once __DIR__ . '/../libs/PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/../libs/PHPMailer/src/SMTP.php';
require_once __DIR__ . '/../libs/PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

function sendEmail($toEmail, $toName, $subject, $body)
{
    $config = require __DIR__ . '/../config/mail.php'; // Load mail configuration


    try {
        $options["ssl"] = array(
            "verify_peer" => false,
            "verify_peer_name" => false,
            "allow_self_signed" => true,
        );
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        //   $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->SMTPDebug = false; //2
        $mail->Host = $config['host'];
        $mail->SMTPAuth = true;
        $mail->Username = $config['username'];
        $mail->Password = $config['password'];
        $mail->SMTPSecure = $config['encryption'];
        $mail->Port = $config['port'];
        $mail->smtpConnect($options);

        $mail->setFrom($config['from_email'], $config['from_name']);
        $mail->addAddress($toEmail, $toName);

        $mail->isHTML(true);
        // $mail->msgHTML(file_get_contents('contents.html'), __DIR__);
        //$mail->addAttachment('images/phpmailer_mini.png');


        $mail->Subject = $subject;
        $mail->Body = $body;

        return $mail->send();
    } catch (Exception $e) {
        return false;
    }
}

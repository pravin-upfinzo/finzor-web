<?php
require_once __DIR__ . '/../libs/PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/../libs/PHPMailer/src/SMTP.php';
require_once __DIR__ . '/../libs/PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

function sendEmail($toEmail, $toName="", $subject, $body)
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

function contactus_mail_body($type="admin_mail",$data=[]){
    $mail_body = "";

    if($type == "admin_mail"){ 
        $mail_body = "<p>Hello Admin,</p><p> You have received a new contact through Finzor website.</p>
                        <table style='border-collapse: collapse;'>
                        <tbody>
                        <tr><td style='border:1px solid #000;padding: 5px;'>Name</td><td style='border:1px solid #000;padding: 5px;'>".$data['name']."</td></tr>
                        <tr><td style='border:1px solid #000;padding: 5px;'>Email</td><td style='border:1px solid #000;padding: 5px;'>".$data['email']."</td></tr>
                        <tr><td style='border:1px solid #000;padding: 5px;'>Phone</td><td style='border:1px solid #000;padding: 5px;'>".$data['phone']."</td></tr>
                        <tr><td style='border:1px solid #000;padding: 5px;'>Message</td><td style='border:1px solid #000;padding: 5px;'>".$data['message']."</td><tr>
                        </tbody>
                        </table>
                        <p><b>Best regards,<b><br>Finzor</p>";
    } else { //user_thank_mail (if needed)
        $mail_body = "";
    }

    return $mail_body;
}

function book_demo_mail_body($type="admin_mail",$data=[]){
    $mail_body = "";

    if($type == "admin_mail"){ 
        $mail_body = "<p>Hello Admin,</p><p> You have received a new demo request through Finzor website.</p>
                        <table style='border-collapse: collapse;'>
                        <tbody>
                        <tr><td style='border:1px solid #000;padding: 5px;'>Name</td><td style='border:1px solid #000;padding: 5px;'>".$data['name']."</td></tr>
                        <tr><td style='border:1px solid #000;padding: 5px;'>Company Name</td><td style='border:1px solid #000;padding: 5px;'>".$data['Companyname']."</td></tr>
                        <tr><td style='border:1px solid #000;padding: 5px;'>Email</td><td style='border:1px solid #000;padding: 5px;'>".$data['email']."</td></tr>
                        <tr><td style='border:1px solid #000;padding: 5px;'>Phone</td><td style='border:1px solid #000;padding: 5px;'>".$data['phone']."</td></tr>
                        <tr><td style='border:1px solid #000;padding: 5px;'>Message</td><td style='border:1px solid #000;padding: 5px;'>".$data['message']."</td><tr>
                        <tr><td style='border:1px solid #000;padding: 5px;'>Ref.Page</td><td style='border:1px solid #000;padding: 5px;'>".$data['ref_url']."</td><tr>
                        </tbody>
                        </table>
                        <p><b>Best regards,<b><br>Finzor</p>";
    } else { //user_thank_mail (if needed)
        $mail_body = "";
    }

    return $mail_body;
}


function subscribe_mail_body($type="admin_mail",$data=[]){
    $mail_body = "";

    if($type == "admin_mail"){ 
        $mail_body = "<p>Hello Admin,</p><p> You have received a new subscriber through Finzor website.</p>
        <table style='border-collapse: collapse;'>
        <tbody>
       
        <tr><td style='border:1px solid #000;padding: 5px;'>Email</td><td style='border:1px solid #000;padding: 5px;'>".$data['email']."</td></tr>
        <tr><td style='border:1px solid #000;padding: 5px;'>Ref.Page</td><td style='border:1px solid #000;padding: 5px;'>".$data['ref_url']."</td><tr>
        <tr><td style='border:1px solid #000;padding: 5px;'>Received on</td><td style='border:1px solid #000;padding: 5px;'>".$data['created_on']."</td><tr>
        </tbody>
        </table>
        <p><b>Best regards,<b><br>Finzor</p>";
    } else { //user_thank_mail
        $mail_body = "Thankyou for subscribing Finzor";
    }

    return $mail_body;
}
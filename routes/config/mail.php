<?php
require_once __DIR__ . '/constant.php';

//ref site: https://github.com/PHPMailer/PHPMailer/blob/master/examples/gmail.phps
return [
    'host' => getenv('SMTP_HOST'),
    'username' => getenv('SMTP_USER'), //SMTP username config
    'password' => getenv('SMTP_PASS'),      //SMTP password config
    'port' => getenv('SMTP_PORT'),
    'encryption' => PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS,
    'from_email' => getenv('MAIL_FROM_ADDRESS'),
    'from_name' => getenv('MAIL_FROM_NAME'),   
];

<?php
//ref site: https://github.com/PHPMailer/PHPMailer/blob/master/examples/gmail.phps
return [
    //'host' => 'smtp.gmail.com',
    'host' => 'tls://smtp.gmail.com',
    'username' => 'jothivijay4716@gmail.com', //SMTP username config
    'password' => 'voli vqwx bdiy vydk',      //SMTP password config
    'encryption' => PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS,
    'port' => 587,
    //'port' => 465,
    'from_email' => 'jothivijay4716@gmail.com',
    'from_name' => 'Finzor',
];

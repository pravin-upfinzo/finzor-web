<?php
//ref site: https://github.com/PHPMailer/PHPMailer/blob/master/examples/gmail.phps
return [
    'host' => 'smtppro.zoho.in',
    'username' => 'support@finzor.com', //SMTP username config
    'password' => 'sHM84qtCQ6Hq',      //SMTP password config
    'port' => 587,
    'encryption' => PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS,
    'from_email' => 'support@finzor.com',
    'from_name' => 'Finzor',
];

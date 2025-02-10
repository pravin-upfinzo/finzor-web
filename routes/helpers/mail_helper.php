<?php
require_once __DIR__ . '/../libs/PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/../libs/PHPMailer/src/SMTP.php';
require_once __DIR__ . '/../libs/PHPMailer/src/Exception.php';
require_once __DIR__ . '/../config/constant.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

function sendEmail(array $toGroupEmails, $subject, $body)
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
        $mail->SMTPDebug = false; //2 - debug
        $mail->Host = $config['host'];
        $mail->SMTPAuth = true;
        $mail->Username = $config['username'];
        $mail->Password = $config['password'];
        $mail->SMTPSecure = $config['encryption'];
        $mail->Port = $config['port'];
        $mail->smtpConnect($options);

        $mail->setFrom($config['from_email'], $config['from_name']);
        //$mail->addAddress($toEmail, $toName);

        if(is_array($toGroupEmails) && !empty($toGroupEmails)){
            $recipientsAdded = addRecipientsToMail($mail, $toGroupEmails);  //group emails
            if (!$recipientsAdded) {
                $error_message = CURRENT_DATETIME ." :- Error: Issue in constructing group emails. "."\n";
                //die($error_message);
                createDirectoryIfNotExists(__DIR__ . '/../logs/');
                error_log($error_message, 3, __DIR__ . '/../logs/email_template_errors.log');
            }
        } else {
            $mail->addAddress(ADMIN_EMAIL, ADMIN_NAME);
        }
       

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

// Function to add recipients (To, CC, BCC) to PHPMailer
function addRecipientsToMail(PHPMailer $mail, array $email_name_constant) {
    // Check if the specific email array is valid and not empty
    if (!empty($email_name_constant)) {

        // Add "To" recipients
        if (!empty($email_name_constant['to'])) {
            foreach ($email_name_constant['to'] as $email => $name) {
                $mail->addAddress($email, $name);
            }
        }

        // Add "CC" recipients
        if (!empty($email_name_constant['cc'])) {
            foreach ($email_name_constant['cc'] as $email => $name) {
                $mail->addCC($email, $name);
            }
        }

        // Add "BCC" recipients
        if (!empty($email_name_constant['bcc'])) {
            foreach ($email_name_constant['bcc'] as $email => $name) {
                $mail->addBCC($email, $name);
            }
        }

        return true; // Return true if recipients are added successfully
    } else {
        return false; // Return false if the array is invalid or empty
    }
}

function contactus_mail_body($type="admin_mail",$data=[]){
    $mail_body = "";

    if($type == "admin_mail"){ 
        $template_name = "contact-us";
        $email_template = getEmailTemplate($template_name);
        if ($email_template) {
            $email_content = "You have received a new contact through Finzor website";
           // echo "Before Replacement:<br><pre>" . htmlspecialchars($email_template) . "</pre><br>"; die();
            $updated_template = str_replace(
                ['{{name}}', '{{email}}', '{{phone}}', '{{message}}', '{{current_year}}', '{{email_content}}' ],
                [$data['name'], $data['email'], $data['phone'], $data['message'],CURRENT_YEAR, $email_content ],
                $email_template
            );
            //echo "After Replacement:<br><pre>" . htmlspecialchars($updated_template) . "</pre><br>"; die();
            $mail_body = $updated_template;
            
        } else {
            //if template not loaded
            $mail_body = "<p>Hello Admin,</p><p> You have received a new contact through Finzor website. <span style='color:red;'>(Could't load the Email Template)</span></p>
                        <table style='border-collapse: collapse;'>
                        <tbody>
                        <tr><td style='border:1px solid #000;padding: 5px;'>Name</td><td style='border:1px solid #000;padding: 5px;'>".$data['name']."</td></tr>
                        <tr><td style='border:1px solid #000;padding: 5px;'>Email</td><td style='border:1px solid #000;padding: 5px;'>".$data['email']."</td></tr>
                        <tr><td style='border:1px solid #000;padding: 5px;'>Phone</td><td style='border:1px solid #000;padding: 5px;'>".$data['phone']."</td></tr>
                        <tr><td style='border:1px solid #000;padding: 5px;'>Message</td><td style='border:1px solid #000;padding: 5px;'>".$data['message']."</td><tr>
                        </tbody>
                        </table>
                        <p><b>Best regards,<b><br>Finzor</p>";
        } 

        
    } else { //user_thank_mail (if needed)
        $mail_body = "";
    }

    return $mail_body;
}

function book_demo_mail_body($type="admin_mail",$data=[]){
    $mail_body = "";

    if($type == "admin_mail"){ 
        $template_name = "book-demo";
        $email_template = getEmailTemplate($template_name);
        if ($email_template) {
            $email_content = "You have received a new Demo request through Finzor website";
           // echo "Before Replacement:<br><pre>" . htmlspecialchars($email_template) . "</pre><br>"; die();
            $updated_template = str_replace(
                ['{{name}}', '{{email}}', '{{phone}}', '{{message}}','{{ref_url}}', '{{current_year}}', '{{email_content}}' ],
                [$data['name'], $data['email'], $data['phone'], $data['message'], $data['ref_url'] ,CURRENT_YEAR, $email_content ],
                $email_template
            );
            //echo "After Replacement:<br><pre>" . htmlspecialchars($updated_template) . "</pre><br>"; die();
            $mail_body = $updated_template;
            
        } else {
            $mail_body = "<p>Hello Admin,</p><p> You have received a new demo request through Finzor website. <span style='color:red;'>(Could't load the Email Template)</span></p>
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
        }
    } else { //user_thank_mail (if needed)
        $mail_body = "";
    }

    return $mail_body;
}


function subscribe_mail_body($type="admin_mail",$data=[]){
    $mail_body = "";

    if($type == "admin_mail"){ 
        $template_name = "subscribe";
        $email_template = getEmailTemplate($template_name);
        if ($email_template) {
            $email_content = "You have received a new subscriber through Finzor website";
           // echo "Before Replacement:<br><pre>" . htmlspecialchars($email_template) . "</pre><br>"; die();
            $updated_template = str_replace(
                ['{{email}}', '{{ref_url}}', '{{created_on}}', '{{current_year}}', '{{email_content}}' ],
                [$data['email'], $data['ref_url'], $data['created_on'] ,CURRENT_YEAR, $email_content ],
                $email_template
            );
            //echo "After Replacement:<br><pre>" . htmlspecialchars($updated_template) . "</pre><br>"; die();
            $mail_body = $updated_template;
            
        } else {
            $mail_body = "<p>Hello Admin,</p><p> You have received a new subscriber through Finzor website. <span style='color:red;'>(Could't load the Email Template)</span></p>
            <table style='border-collapse: collapse;'>
            <tbody>
        
            <tr><td style='border:1px solid #000;padding: 5px;'>Email</td><td style='border:1px solid #000;padding: 5px;'>".$data['email']."</td></tr>
            <tr><td style='border:1px solid #000;padding: 5px;'>Ref.Page</td><td style='border:1px solid #000;padding: 5px;'>".$data['ref_url']."</td><tr>
            <tr><td style='border:1px solid #000;padding: 5px;'>Received on</td><td style='border:1px solid #000;padding: 5px;'>".$data['created_on']."</td><tr>
            </tbody>
            </table>
            <p><b>Best regards,<b><br>Finzor</p>";
        }
    } else { //user_thank_mail
        $mail_body = "<p>Thankyou for subscribing Finzor. You will receive updates soon from our side. </p><p><b>Best regards,<b><br>Finzor</p>";
    }

    return $mail_body;
}

function createDirectoryIfNotExists($dir_path) {
    if (!file_exists($dir_path)) {
        mkdir($dir_path, 0777, true);
    }
}

function getEmailTemplate($template_name) {
    static $templates = [];  // Cache loaded templates
    static $timestamps = []; // Store last modified timestamps

    switch ($template_name) {
        case 'contact-us':
            $template_path = __DIR__ . '/../../partials/email-templates/contact-us-email.html';
            break;
        case 'book-demo':
            $template_path = __DIR__ . '/../../partials/email-templates/book-demo-email.html';
            break;
        case 'subscribe':
            $template_path = __DIR__ . '/../../partials/email-templates/subscribe-email.html';
            break;
        //add new cases here..
        default:
            //die("Error: Email template '{$template_name}' not found.");
            $error_message = CURRENT_DATETIME ." :- Error: Email template '{$template_name}' not found. "."\n";
            createDirectoryIfNotExists(__DIR__ . '/../logs/');
            error_log($error_message, 3, __DIR__ . '/../logs/email_template_errors.log');
            return false; 
    }

    if (!file_exists($template_path)) {
       // die("Error: Template file '{$template_path}' does not exist.");
        $error_message = CURRENT_DATETIME ." :- Error: Template file '{$template_path}' does not exist. "."\n";
        createDirectoryIfNotExists(__DIR__ . '/../logs/');
        error_log($error_message, 3, __DIR__ . '/../logs/email_template_errors.log');

        return false; 
    }

    $last_modified = filemtime($template_path); // Get file modification time

    // Reload the template if the file has changed
    if (!isset($templates[$template_name]) || $timestamps[$template_name] !== $last_modified) {
        $templates[$template_name] = file_get_contents($template_path);
        $timestamps[$template_name] = $last_modified; 
    }

    return $templates[$template_name];
}
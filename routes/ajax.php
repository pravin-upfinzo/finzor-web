<?php
header("Content-Type: application/json");
session_start();
$canSaveOnDB = 0; //configure this to 1 if DB is ready

if ($canSaveOnDB == 1) {
    require_once __DIR__ . '/config/db.php';
}
require_once __DIR__ . '/helpers/mail_helper.php';
require_once __DIR__ . '/config/constant.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$response = ['status' => 'error', 'message' => 'Invalid request'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    switch ($action) {
        case 'submit_contact_form':
            // $canSaveOnDB = 0;
            $name = $_POST['name'] ?? '';
            $email = $_POST['email'] ?? '';
            $phone = $_POST['phone'] ?? '';
            $message = $_POST['message'] ?? '';
            

            if (empty($name) || empty($email) || empty($phone) || empty($message)) {
                echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
                exit;
            }

            try {
                $db_saved = false;
                if ($canSaveOnDB == 1) {
                    $stmt = $pdo->prepare("INSERT INTO contact_us (`name`, `email`, `phone`,`message`) VALUES (?, ?, ?, ?)");
                    $db_saved = $stmt->execute([$name, $email, $phone, $message]);
                }

                if ($db_saved || $canSaveOnDB == 0) {
                    // Send contact us email
                    $toGroupEmails = CONTACT_ADMIN_EMAILS;
                    $subject = 'New Contact received from Finzor';
                    $data = ['name' => $name, 'email' => $email,'phone' => $phone,'message' => $message];
                    $body = contactus_mail_body($type="admin_mail",$data);

                    if (sendEmail($toGroupEmails, $subject, $body)) {
                        $response = ['status' => 'success', 'message' => 'We will reachout to you in a while.'];
                    } else {
                        $response = ['status' => 'error', 'message' => 'Email could not be sent.'];
                    }
                } else {
                    $response = ['status' => 'error', 'message' => 'Sorry! Please Try again later'];
                }
            } catch (Exception $e) {
                echo json_encode(['status' => 'error', 'message' => 'Error: ' . $e->getMessage()]);
            }

            break;

            case 'submit_book_demo':
                // $canSaveOnDB = 0;
                $name = $_POST['name'] ?? '';
                $Companyname = $_POST['Companyname'] ?? '';
                $email = $_POST['email'] ?? '';
                $phone = $_POST['phone'] ?? '';
                $message = $_POST['message'] ?? ''; 
                $ref_url =  $_POST['ref_url'] ?? '';
    
                if (empty($name) || empty($Companyname) || empty($email) || empty($phone) || empty($message)) {
                    echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
                    exit;
                }
    
                try {
                    $db_saved = false;
                    if ($canSaveOnDB == 1) {
                        $stmt = $pdo->prepare("INSERT INTO book_demo (`name`,`company_name`, `company_email`, `company_phone`,`message`,`ref_url`) VALUES (?, ?, ?, ?, ?, ?)");
                        $db_saved = $stmt->execute([$name, $Companyname, $email, $phone, $message, $ref_url]);
                    }
    
                    if ($db_saved || $canSaveOnDB == 0) {
                        // Send book demo email
                        $toGroupEmails = BOOK_DEMO_ADMIN_EMAILS;
                        $subject = 'New Demo Request received from Finzor';

                        $data = ['name' => $name,'Companyname' => $Companyname, 'email' => $email,'phone' => $phone,'message' => $message, 'ref_url' => $ref_url ];
                        $body = book_demo_mail_body($type="admin_mail", $data);
    
                        if (sendEmail($toGroupEmails, $subject, $body)) {
                            $response = ['status' => 'success', 'message' => 'Your demo request was received. We will reachout to you in a while.'];
                        } else {
                            $response = ['status' => 'error', 'message' => 'Email could not be sent.'];
                        }
                    } else {
                        $response = ['status' => 'error', 'message' => 'Sorry! Please Try again later'];
                    }
                } catch (Exception $e) {
                    echo json_encode(['status' => 'error', 'message' => 'Error: ' . $e->getMessage()]);
                }
    
                break;

        case 'subscribe':
            // $canSaveOnDB = 0;
            $email = $_POST['subs_email'] ?? '';
            $ref_url =  $_POST['ref_url'] ?? '';

            if (empty($email)) {
                echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
                exit;
            }

            try {
                $db_saved = false;
                if ($canSaveOnDB == 1) {
                    $stmt = $pdo->prepare("SELECT COUNT(id) FROM subscribers WHERE subscriber_email = ?");
                    $stmt->execute([$email]);
                    $emailExists = $stmt->fetchColumn();

                    if ($emailExists) {
                        $response = ['status' => 'error', 'message' => 'Email already exists!'];
                        echo json_encode(['status' => 'error', 'message' => 'Your Email address was already subscribed!']);
                        exit;
                    } else {
                        $stmt1 = $pdo->prepare("INSERT INTO subscribers (`subscriber_email`,`ref_url`) VALUES (?, ?)");
                        $db_saved = $stmt1->execute([$email, $ref_url]);
                    }
                }

                if ($db_saved || $canSaveOnDB == 0) {
                   
                    $created_on = date('Y-m-d H:i:s');
                    $toGroupEmails = SUBSCRIBERS_ADMIN_EMAILS;

                    $subject = 'New Subscriber Alert - Finzor';
                    $data = ['email' => $email, 'ref_url' => $ref_url, 'created_on' => $created_on, ];
                    $body = subscribe_mail_body('admin_mail', $data);

                    //User thankyou mail
                    $subs_thanx_subject = 'Finzor - Thanks for Subscribing us!';
                    $data = [];
                    $subs_thanx_body = subscribe_mail_body('user_thank_mail', $data);
                    $subs_thanx_email = ['to' => [$email => 'Finzor Subscriber']];


                    if (sendEmail($toGroupEmails, $subject, $body) && sendEmail($subs_thanx_email, $subs_thanx_subject, $subs_thanx_body)) {
                        $response = ['status' => 'success', 'message' => 'Subscribed successfully.'];
                    } else {
                        $response = ['status' => 'error', 'message' => 'Email could not be sent.'];
                    }
                } else {
                    $response = ['status' => 'error', 'message' => 'Sorry! Please Try again later'];
                }
            } catch (Exception $e) {
                echo json_encode(['status' => 'error', 'message' => 'Error: ' . $e->getMessage()]);
            }

            break;
        
        case 'sign_up_form':
            // $canSaveOnDB = 0;
            $name = $_POST['name'] ?? '';
            $email = $_POST['email'] ?? '';
            $phone = $_POST['phone'] ?? '';

            if (empty($name) || empty($email) || empty($phone)) {
                echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
                exit;
            }

            try {
                $db_saved = false;
                if ($canSaveOnDB == 1) {
                    $stmt = $pdo->prepare("SELECT COUNT(id) FROM registered_users WHERE email = ?");
                    $stmt->execute([$email]);
                    $emailExists = $stmt->fetchColumn();

                    if ($emailExists) {
                        $response = ['status' => 'error', 'message' => 'Your Email Address has been already registered !'];
                        echo json_encode($response);
                        exit;
                    } else {
                        $stmt1 = $pdo->prepare("INSERT INTO registered_users (`name`, `email`, `phone`) VALUES (?, ?, ?)");
                        $db_saved = $stmt1->execute([$name, $email, $phone]);
                    }
                   
                }

               // if ($db_saved || $canSaveOnDB == 0) {
                if ($db_saved) {
                    $response = ['status' => 'success', 'message' => 'Registered Successfully.'];
                } else {
                    if($canSaveOnDB == 0){
                        $response = ['status' => 'error', 'message' => 'Sorry! Error on saving your details'];
                        echo json_encode($response);
                        exit;
                    }
                    $response = ['status' => 'error', 'message' => 'Sorry! Please Try again later'];
                }
            } catch (Exception $e) {
                echo json_encode(['status' => 'error', 'message' => 'Error: ' . $e->getMessage()]);
            }
            break;


        default:
            $response = ['status' => 'error', 'message' => 'Unknown action.'];
    }
}

echo json_encode($response);
exit;

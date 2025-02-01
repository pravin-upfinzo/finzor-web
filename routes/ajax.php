<?php
header("Content-Type: application/json");
session_start();

require_once __DIR__ . '/config/db.php';
require_once __DIR__ . '/helpers/mail_helper.php';
// require_once 'config/db.php';
// require_once 'helpers/mail_helper.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$response = ['status' => 'error', 'message' => 'Invalid request'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    switch ($action) {
        case 'submit_contact_form':
            $canSaveOnDB = 0;
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
                    $to_email = "jothi@upfinzo.in"; //setup reqd
                    $to_name  = "Jothi Annamalai - Upfinzo"; //setup reqd
                    $subject = 'New Contact received from Finzor';
                    $body = "<p>Hello Admin,</p><p> You have received a new contact through Finzor website.</p>
                    <table style='border-collapse: collapse;'>
                    <tbody>
                    <tr><td style='border:1px solid #000;padding: 5px;'>Name</td><td style='border:1px solid #000;padding: 5px;'>$name</td></tr>
                    <tr><td style='border:1px solid #000;padding: 5px;'>Email</td><td style='border:1px solid #000;padding: 5px;'>$email</td></tr>
                    <tr><td style='border:1px solid #000;padding: 5px;'>Phone</td><td style='border:1px solid #000;padding: 5px;'>$phone</td></tr>
                    <tr><td style='border:1px solid #000;padding: 5px;'>Message</td><td style='border:1px solid #000;padding: 5px;'>$message</td><tr>
                    </tbody>
                    </table>
                    <p><b>Best regards,<b><br>Finzor</p>";

                    if (sendEmail($to_email, $to_name, $subject, $body)) {
                        $response = ['status' => 'success', 'message' => 'Thank you!! We will reachout to you in a while.'];
                    } else {
                        $response = ['status' => 'error', 'message' => 'Thank you. Email could not be sent.'];
                    }
                } else {
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

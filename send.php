<?php
// include('admin/db.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $contactNumber = htmlspecialchars($_POST['number']);
    $email = htmlspecialchars($_POST['email']);
    $comments = htmlspecialchars($_POST['comments']);
    $subject = htmlspecialchars($_POST['subject']);

    $mail = new PHPMailer(true);

    // $stmt = $connection->prepare("INSERT INTO admission_enquiry (name, mob_no, email_id, address, city, state, country, courceName, message, created_date, updated_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, now(), now())");
    // $stmt->bind_param("sssssssss", $name, $contactNumber, $email, $address, $city, $state, $country, $courceName, $comments);
    // $stmt->execute();
    // $stmt->close();

    try {
        // SMTP Server Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'harshithamaniyani@gmail.com'; // Your Gmail ID
        $mail->Password = 'llnygboollcidtms'; // Your App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Change from ENCRYPTION_SMTPS
        $mail->Port = 587; // Change from 465

        // Sender & Recipient
        $mail->setFrom($email, $name);
        $mail->addAddress('harshithamaniyani@gmail.com', 'Enquiry Form Hira kids School'); // Receiver
        $mail->addReplyTo($email, $name);

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = "
            <h3>New Enquiry From  Hira Kids School</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Mobile Number:</strong> $contactNumber</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Message:</strong><br> $comments</p>
        ";
        $mail->AltBody = "Name: $name\nMobile: $contactNumber\nEmail: $email\nMessage: $comments";

        // Send Email
        $mail->send();
        header("Location: thankyou.php");
        exit();
    } catch (Exception $e) {
        header("Location: index.php");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
?>
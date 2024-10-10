<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["firstname_contact"];
    $lname = $_POST["lastname_contact"];
    $mail = $_POST["email_contact"];
    $phone = $_POST["phone_contact"];
    $msg = $_POST["message_contact"];
    $verify=$_POST["verify_contact"];
   
    $to = "info@pnthotels.com"; 
    $subject = "Contact form from $fname";
    
    $body = "Last Name: $lname\n<br>";
    $body = "First Name: $fname\n<br>";
    $body.= "Email: $mail\n<br>";
    $body.= "Contact: $phone\n<br>";
    $body.= "Message: $msg\n<br>";
    $body.= "Number of Persons: $verify\n<br>";
    

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'test.jorim@gmail.com';
        $mail->Password = 'lzgqvrublhfdjmfx'; 
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom('test.jorim@gmail.com', 'PnT Hotel Contact'); 
        $mail->addAddress($to);
        $mail->addAddress('info@pnthotels.com');
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->send();
        
        // Return success status as JSON
        echo json_encode(['status' => 'success', 'message' => 'Email sent successfully']);
    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => 'Error: ' . $e->getMessage()]);
    }
}
?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $check_in = $_POST["check_in"];
    $check_out = $_POST["check_out"];
    $hotel = $_POST["hotel"];
    $room = $_POST["room"];
    $msg = $_POST["msg"];
   
    $to = "info@pnthotels.com"; 
    $subject = "Booking form from $name";
    $body = "Name: $name\n <br>";
    $body.= "Email: $mail\n<br>";
    $body.= "Contact: $phone\n<br>";
    $body.= "Address: $address\n<br>";
    $body.= "Hotel Name: $hotel\n<br>";
    $body.= "Room: $room\n<br>";
    $body.= "Check In: $check_in\n<br>";
    $body.= "Check Out: $check_out\n<br>";
    $body.= "Message: $msg\n<br>";

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'test.jorim@gmail.com';
        $mail->Password = 'lzgqvrublhfdjmfx'; 
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom('test.jorim@gmail.com', 'PnT Hotel Booking'); 
        $mail->addAddress($to);
        $mail->addAddress('info@pnthotels.com');
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->send();
         // Return success status
         echo 'success';
        } catch (Exception $e) {
            echo 'Error cant sent the mail: ' . $e->getMessage();
        }
    }

?>
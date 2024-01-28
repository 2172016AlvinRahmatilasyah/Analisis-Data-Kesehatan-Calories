<?php

$name = isset($_POST["name"]) ? $_POST["name"] : '';
$email = isset($_POST["email"]) ? $_POST["email"] : '';
$subject = "MyCalorieLog Vitamin Reminder";
$messageContent = "Terima kasih telah menggunakan fitur dari app kami dan terima kasih sudah mendaftarkan vitamin, kami akan mengirimkan email reminder setiap siang hari, salam sehat!\n\nVitamin yang didaftarkan: " . (isset($_POST["message"]) ? $_POST["message"] : '');

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";  // Corrected SMTP host name
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;  // Corrected port number

$mail->Username = "alvinmaranatha09@gmail.com";
$mail->Password = "difqeklmxauhwyut";

// Check if $email and $name are not empty before using them
if (!empty($email) && !empty($name)) {
    $mail->setFrom($email, $name);
} else {
    // Handle the case where $email or $name is empty
    echo "Email address or name is empty.";
    exit();
}

$mail->addAddress($email, "MyCalorieWeb");

$mail->Subject = $subject;
$mail->Body = $messageContent;

try {
    $mail->send();
    header("Location: home.php");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>

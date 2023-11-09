<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../../vendor/autoload.php';


$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;


require_once("config.php");

$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
$mail->Host = $smtp_server;
$mail->Port = $smtp_port;
$mail->Username = $smtp_username;
$mail->Password = $smtp_password;

$mail->setFrom($email,$name);
$mail->addAddress('lkristopher62@gmail.com');

$mail->Subject = "AJ-Improvment Job";
$mail->Body = "Name: " . $name . "\n" . // Message body
              "Phone: " . $phone . "\n" .
              "Message: " . $message;

$mail->send();

echo "email sent";
?>

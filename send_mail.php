<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// var_dump(getenv('SMTP_PASSWORD'));

$mail = new PHPMailer(true);
$mail->SMTPDebug = 0;
$mail->isSMTP();
$mail->Host = 'smtp.googlemail.com';
$mail->SMTPAuth = true;
$mail->Username = 'michaelsaiba84@gmail.com';
$mail->Password = 'ygxvsqgfobrtmbof';
// $mail->Password = getenv('SMTP_PASSWORD');
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('leads@mecoartltd.co.ke', 'Meco Art Lead Form');
$mail->addAddress('sales@mecoartltd.co.ke', 'Meco Art Support');
$mail->Subject = 'New Lead From Meco Website';

$mail->Body = 'Name: ' . $_POST['name']. "\n" .  
              'Phone: '.$_POST['phone']. "\n" .
              'Email: '.$_POST['email']. "\n" .
              'Message: '.$_POST['message'];
$mail->send();

session_start();
$_SESSION['email_sent'] = true;

header('Location: contact.php');
exit();

?>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$mail = new PHPMailer(true);
$mail->SMTPDebug = 0;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'joshuaclifford254@gmail.com';
$mail->Password = 'oypsdddjdapaqkoz';
$mail->SMTPSecure = 'ssl';
// $mail->SMTPSecure = 'tls';
$mail->Port = 465;
// $mail->Port = 587;

$mail->setFrom('leads@mecoartltd.co,ke', 'Meco Art Lead Form');
$mail->addAddress('michaelsaiba84@gmail.com', 'Recipient Name');
$mail->Subject = 'Subject of the email';
$mail->Body = 'Body of the email';

$mail->send();

var_dump($mail);

return;

$to = 'michaelsaiba84@gmail.com';

$subject = 'LEAD FROM WEBSITE';

$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';

$message = 'Name: ' . $_POST['name'] . "\r\n" .
    'Email: ' . $_POST['email'] . "\r\n" .
    'Phone: ' . $_POST['phone'] . "\r\n";
    'Message: ' . $_POST['message'] . "\r\n";
$headers = 'From: ' . $_POST['email'] . "\r\n" .
    'Reply-To: ' . $_POST['email'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>
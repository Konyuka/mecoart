<?php
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
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable('.');
$dotenv->load();

if ($_POST) {
    $name = $_POST['name'];
    $from = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        $content = wordwrap(str_replace("\n.", "\n..", $message),70);

        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = $_ENV['MAIL_HOST'];
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV['MAIL_USERNAME'];
        $mail->Password = $_ENV['MAIL_PASSWORD'];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom($_ENV['MAIL_USERNAME']);
        $mail->addAddress($_ENV['MAIL_ADDRESS'], $_ENV['MAIL_NAME']);
        $mail->addReplyTo($from, $name);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $content;
        $mail->AltBody = $content;

        $mail->send();
    }

    catch (Exception $exception) {}
}
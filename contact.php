<?php

require("vendor/autoload.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_POST) {
    $name = $_POST['name'];
    $from = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        $content = wordwrap(str_replace("\n.", "\n..", $message),70);

        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

        $mail->Host = getenv("MAILERTOGO_SMTP_HOST", true);
        $mail->Port = intval(getenv("MAILERTOGO_SMTP_PORT", true));
        $mail->Username = getenv("MAILERTOGO_SMTP_USER", true);
        $mail->Password = getenv("MAILERTOGO_SMTP_PASSWORD", true);

        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->setFrom(getenv("MAILERTOGO_SMTP_USER", true));
        $mail->addAddress(getenv("MAILERTOGO_DOMAIN", true), getenv("MAILERTOGO_NAME", true));
        $mail->addReplyTo($from, $name);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $content;
        $mail->AltBody = $content;

        $mail->send();
    }

    catch (Exception $exception) {}
}
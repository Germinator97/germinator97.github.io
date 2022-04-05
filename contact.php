<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

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
        $mail->Host = 'smtp-mail.outlook.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'germinator97@outlook.fr';
        $mail->Password = 'qemdun-pYqty3-jebdyr';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('germinator97@outlook.fr');
        $mail->addAddress('agbegermain@gmail.com', 'AGBETOGOR Germain');
        $mail->addReplyTo($from, $name);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $content;
        $mail->AltBody = $content;

        $mail->send();
    }

    catch (Exception $exception) {
    }
}
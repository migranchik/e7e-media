<?php


    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\PHPMailer;

    require "PHPMailer/src/PHPMailer.php"
    require "PHPMailer/src/Exception.php"

    $mail = new PHPMailer(true)
    $mail->CharSet = "UTF-8";

    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $body = $name . ' ' . $phone . ' ' . $message;
    $theme = "[Заявка с формы]";
    
    $mail->addAddress("migran4ikcool@gmail.com");

    $mail->Subject = $theme;
    $mail->Body = $body;

    $mail->send();
?>
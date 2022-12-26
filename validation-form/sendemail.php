<?php
    require_once '../blocks/connect.php';
    $to = trim($_POST['message']);
    $from = $_COOKIE['user'];

    $subject = "BETHER Client Manager";

    $message = htmlspecialchars($_POST['mes_area']);
    $message = urldecode($message);
    $message = trim($message);

    $headers = "From: $from" . "\r\n" .
    "Reply-To: $from" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

    mail($to, $subject, $message, $headers);

    header('Location: ../pages/indexDash.php');
?>
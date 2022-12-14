<?php
    $email = filter_var(trim($_POST['email-auth']),
    FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['pass-auth']),
    FILTER_SANITIZE_STRING);

    $password = md5($password."zxczxczxc");

    require "../blocks/connects.php";

    $result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email' AND `pass` = '$password'");
    $user = $result->fetch_assoc();

    if(count($user) == 0) { 
        echo "ERROR";
        exit();
    }

    setcookie('user', $user['email'], time() + 3600, "/");

    $mysql->close();

    header('Location: ../indexDash.php');

?>
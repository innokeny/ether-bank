<?php
    $email = filter_var(trim($_POST['email-auth']),
    FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['pass-auth']),
    FILTER_SANITIZE_STRING);

    $password = md5($password."zxczxczxc");

    require "../blocks/connects.php";

    $result = $mysql->query("SELECT * FROM `user_customer` WHERE `email` = '$email' AND `password` = '$password'");
    $user = $result->fetch_assoc();

    if(count($user) == 0) { 
        echo "ERROR";
        exit();
    }

    setcookie('user', $user['id'], time() + 3600, "/");

    $mysql->close();

    header('Location: ../pages/indexCat.php');

?>
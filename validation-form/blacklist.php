<?php
    require_once '../blocks/connect.php';

    $id = $_POST['taskOption'];
    $id = $id[2];

    mysqli_query($connect, "INSERT INTO `blacklist` (`id`, `email`, `password`, `full_name`, `phone_number`) 
                            SELECT *
                            FROM `user_customer`
                            WHERE`id` = $id");

    mysqli_query($connect, "DELETE FROM user_customer WHERE `user_customer`.`id` = $id");

    header('Location: ../pages/indexDash.php');
?>
<?php
    require_once '../blocks/connect.php';

    $id = $_GET['id'];

    mysqli_query($connect, "DELETE FROM `transactions` WHERE `transactions`.`id` = '$id'");

    header('Location: ../pages/indexShC.php');
?>
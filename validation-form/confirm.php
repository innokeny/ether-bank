<?php
    require_once '../blocks/connect.php';

    $id = $_GET['id'];

    mysqli_query($connect, "UPDATE `transactions` SET `status` = 'Confirmed' WHERE `transactions`.`id` = '$id'");

    header('Location: ../pages/indexTrans.php');
?>
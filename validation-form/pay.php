<?php
    require_once '../blocks/connect.php';

    $id = $_GET['id'];
    $date = date("Y-m-d");

    mysqli_query($connect, "UPDATE `transactions` SET `payment` = 'Paid' WHERE `transactions`.`id` = '$id'");
    mysqli_query($connect, "UPDATE `transactions` SET `payment_date` = '$date' WHERE `transactions`.`id` = '$id'");

    header('Location: ../pages/indexShC.php');
?>
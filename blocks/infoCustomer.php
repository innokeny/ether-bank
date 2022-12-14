<?php
    $infoCustomer = mysqli_query($connect, "SELECT * FROM `user_customer`");
    $infoCustomer = mysqli_fetch_all($infoCustomer);
?>
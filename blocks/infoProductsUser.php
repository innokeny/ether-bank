<?php
    require_once '../blocks/connect.php';
    
    $user_id = $_COOKIE['user'];
    $product_name = $_COOKIE[$user_id];
    
    $products = mysqli_query($connect, "SELECT * FROM `transactions` WHERE `customer_id`= '$user_id';");
    $products = mysqli_fetch_all($products);
?>
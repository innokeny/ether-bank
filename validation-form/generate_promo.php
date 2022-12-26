<?php
    setcookie('promo', $promo, time() - 3600, "/");

    require_once '../blocks/connect.php';
    $product = $_GET['product'];
    $percent = $_GET['percent'];
    
    $promo = rand();
    $promo = md5($promo."promo");
    

    $result = mysqli_query($connect, "INSERT INTO `promocode` (`id`, `product_name`, `percent`, `promocode`) 
                                      VALUES (NULL, '$product', '$percent', '$promo')");
    
    setcookie('promo', $promo, time() + 3600, "/");

    header('Location: ../pages/indexDash.php');
?>
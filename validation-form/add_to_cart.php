<?php
    require_once '../blocks/connect.php';

    include ("../blocks/infoProduct.php");
    
    $id = $_POST['add_btn'];
    $product = $infoProduct[$id][1];
    $date = date('Y-m-d');
    $user_id = $_COOKIE['user'];    

    mysqli_query($connect, "INSERT INTO `transactions` (`id`, `product_name`, `status`, `order_date`, `payment`, `payment_date`, `customer_id`) 
                            VALUES (NULL, '$product', 'Pending', '$date', 'Not paid', NULL, '$user_id')");

    header('Location: ../pages/indexShC.php');
?>

<?php
    $infoProduct = mysqli_query($connect, "SELECT * FROM `products`");
    $infoProduct = mysqli_fetch_all($infoProduct);
?>
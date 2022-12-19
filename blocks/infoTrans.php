<?php
    $trans = mysqli_query($connect, "SELECT * FROM `transactions`");
    $trans = mysqli_fetch_all($trans);
?>
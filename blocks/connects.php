<?php
    $mysql = new mysqli('localhost', 'root', 'root', 'bether');

    if (!$mysql) {
        die('Error connect to database!');
    }
?>
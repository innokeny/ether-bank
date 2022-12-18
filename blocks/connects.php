<?php
    $mysql = new mysqli('localhost', 'root', '', 'bether');

    if (!$mysql) {
        die('Error connect to database!');
    }
?>
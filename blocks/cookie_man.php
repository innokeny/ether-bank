<?php
    if(!isset($_COOKIE['user']) OR trim($_COOKIE['user'])==''){
        header("Location: ../indexManager.html");
        exit;
    }
?>
<?php
    setcookie('user', $user['email'], time() - 3600, "/");
    setcookie('promo', $promo, time() - 3600, "/");
    header('Location: ../indexManager.html');
?>
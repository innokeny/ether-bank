<?php
    require_once '../blocks/connect.php';
    require_once '../blocks/cookie_man.php';
    include ("../blocks/infoCustomer.php");
    include ("../blocks/infoTrans.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/styles1.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>

<body>

    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxs-bank'></i>
            <div class="logo_name">Bether</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="indexDash.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="indexTrans.php">
                    <i class='bx bx-list-ul'></i>
                    <span class="links_name">Transactions</span>
                </a>
                <span class="tooltip">Transactions</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                    <div class="name_job">
                        <div class="name" id="name"></div>
                        <div class="job">Senior Client Manager</div>
                    </div>
                    <a href="../blocks/exit.php" class="btnLogOut">
                        <i class='bx bx-log-out' id="log_out"></i>
                    </a>
                </div>
            </li>
        </ul>
    </div>
    <?php require ("../blocks/get_name.php"); ?>
    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");

        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange();
        });

        function menuBtnChange() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");
            }
        }
    </script>
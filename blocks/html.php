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
                <!--<img src="profile.jpg" alt="profileImg">-->
                <div class="name_job">
                    <div class="name">Rum Roman</div>
                    <div class="job">Senior Client Manager</div>
                </div>
                <a href="index2.php" class="btnLogOut">
                    <i class='bx bx-log-out' id="log_out"></i>
                </a>
            </div>
        </li>
    </ul>
</div>

<script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");

        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange();//calling the function(optional)
        });

        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");//replacing the iocns class
            }
        }
        
    </script>
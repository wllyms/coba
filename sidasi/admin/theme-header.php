<header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand">
            <div class="mobile-toggle-menu"><i class='bx bx-menu'></i></div>
            <div class="top-menu ms-auto">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item dropdown dropdown-large">
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="header-notifications-list"></div>
                        </div>
                    </li>
                    <li class="nav-item dropdown dropdown-large">
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="header-message-list"></div>
                        </div>
                    </li>
                </ul>
            </div>
            <h5 class="px-4">Sistem Informasi Data Akreditasi</h5>
            <div class="user-box dropdown">
                <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../assets/images/users/<?php echo $_SESSION["foto"] ?>" class="user-img" alt="user avatar">
                    <div class="user-info ps-3">
                        <p class="user-name mb-0"><?php echo $_SESSION["nm_admin"] ?></p>
                        <p class="designattion mb-0">Admin</p>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="profile.php"><i class="bx bx-user"></i><span>Profile</span></a></li>
                    <li>
                        <div class="dropdown-divider mb-0"></div>
                    </li>
                    <li><a class="dropdown-item" href="logout.php"><i class='bx bx-log-out-circle'></i><span>Logout</span></a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
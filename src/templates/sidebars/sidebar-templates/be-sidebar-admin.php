<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">
                <div class="sidenav-menu-heading">Hub</div>
                <a class="nav-link" href="admin.php">
                    <div class="nav-link-icon">
                        <i data-feather="home"></i>
                    </div>
                    Korisnički Panel
                </a>
                <a class="nav-link" href="index.php" target="_blank">
                    <div class="nav-link-icon">
                        <i data-feather="globe"></i>
                    </div>
                    Poseti Sajt
                </a>
                <a class="nav-link" href="profile.php">
                    <div class="nav-link-icon">
                        <i data-feather="user"></i>
                    </div>
                    Profil
                </a>
                <div class="sidenav-menu-heading">Interfejs</div>

                <a class="nav-link collapsed" href="users.php">
                    <div class="nav-link-icon">
                        <i data-feather="users"></i>
                    </div>
                    Korisnici
                </a>
                <a class="nav-link" href="ads.php">
                    <div class="nav-link-icon">
                        <i data-feather="volume-2"></i>
                    </div>
                    Oglasi
                </a>
            </div>
        </div>
        <?php include realpath('src/templates/sidebars/sidebar-templates/be-sidebar-footer.php'); ?>
    </nav>
</div>

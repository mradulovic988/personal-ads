<div class="sidenav-footer">
    <div class="sidenav-footer-content">
        <div class="sidenav-footer-subtitle">Dobrodošli</div>
        <div class="sidenav-footer-title">
            <?php
            if (!empty($_SESSION['user_fname']) && !empty($_SESSION['user_lname'])) :
                echo $_SESSION['user_fname'] . ' ' . $_SESSION['user_lname'];
            endif;
            ?>
        </div>
    </div>
</div>
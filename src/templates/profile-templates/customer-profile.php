<div id="layoutSidenav">
    <?php include realpath('src/templates/sidebars/be-sidebar.php'); ?>
    <?php include realpath('src/templates/profile-templates/customer/customer-controllers/additional-information.php'); ?>

    <?php $profile = $db->query('SELECT user_pimage, user_fname, user_phone, user_city FROM users WHERE user_name = ?', $_SESSION['user_name'])->fetchArray(); ?>

    <?php $user_pimage = !empty($profile['user_pimage']) ? 'assets/img/register-user/' . $profile['user_pimage'] : 'assets/img/register-user/avatar.png'; ?>
    <?php $user_phone = !empty($profile['user_phone']) ? $profile['user_phone'] : 'Telefon'; ?>
    <?php $user_city = !empty($profile['user_city']) ? $profile['user_city'] : 'Grad'; ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
                <div class="container-fluid">
                    <div class="page-header-content d-inline-flex">
                        <div class="col-xs-7">
                            <img src="<?= $user_pimage ?>" class="profileImage" />
                        </div>
                        <div class="myProfilWrapper">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="user"></i></div>
                                <span>Zdravo <?= $profile['user_fname'] ?></span>
                            </h1>
                            <div class="page-header-subtitle">Mesto gde možeš ažurirati svoje informacije</div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include realpath('src/templates/profile-templates/customer/customer-templates/additional-info.php'); ?>
            <?php include realpath('src/templates/profile-templates/customer/customer-templates/change-password.php'); ?>
            <?php include realpath('src/templates/profile-templates/customer/customer-templates/problem-contact.php'); ?>
            <?php include realpath('src/templates/profile-templates/customer/customer-templates/delete-account.php'); ?>

        </main>
<?php
if (isset($_POST['login_submit'])) {
    $login_username     = $_POST['login_username'];
    $login_password     = $_POST['login_password'];

    $login_password = md5($login_password);

    $update_users = $db->query('SELECT id, user_name, user_fname, user_lname, user_email, user_password, user_role, user_date FROM users WHERE user_name = ?', $login_username)->fetchAll();

    foreach ($update_users as $update_user) {
        $db_id          = $update_user['id'];
        $db_username    = $update_user['user_name'];
        $db_firstname   = $update_user['user_fname'];
        $db_lastname    = $update_user['user_lname'];
        $db_email       = $update_user['user_email'];
        $db_password    = $update_user['user_password'];
        $db_user_role   = $update_user['user_role'];
        $db_date        = $update_user['user_date'];
    }

    if ($login_username !== $db_email && $login_password !== $db_password) {
        $function->redirect('login.php');
    } elseif ($login_username == $db_username && $login_password == $db_password) {

        $_SESSION['id']             = $db_id;
        $_SESSION['user_name']      = $db_username;
        $_SESSION['user_fname']     = $db_firstname;
        $_SESSION['user_lname']     = $db_lastname;
        $_SESSION['user_email']     = $db_email;
        $_SESSION['user_password']  = $db_password;
        $_SESSION['user_role']      = $db_user_role;
        $_SESSION['user_date']      = $db_date;

        $function->redirect('admin.php');
    } else {
        $function->redirect('login.php');
    }

    $update_users->close();
}
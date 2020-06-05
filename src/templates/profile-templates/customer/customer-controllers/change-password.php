<?php
$errors = [];

if (isset($_POST['changePassword_submit'])) {

    $checkOldPass = $db->query('SELECT user_password FROM users WHERE user_name = ?', $_SESSION['user_name'])->fetchArray();

    $oldPassword        = $_POST['oldPassword'];
    $changePassword     = $_POST['changePassword'];
    $confirmPassword    = $_POST['confirmPassword'];

    $oldPassword = md5($oldPassword);

    $password_lenght = strlen($changePassword);
    if ($password_lenght < 8) { array_push($errors, "Lozinka mora imati minimum 8 karaktera."); }

    if (count($errors) === 0) {
        if ($oldPassword == $checkOldPass['user_password'] && $changePassword === $confirmPassword) {
            $changePasswordPrepared = md5($changePassword);

            $updatePass = $db->query('UPDATE users SET user_password = ? WHERE user_name = ?', $changePasswordPrepared, $_SESSION['user_name']);

            echo '<div class="col"><div id="custom_success" class="alert alert-success">Lozinka je uspešno promenjena.</div></div>';
        } else {
            echo '<div class="col"><div id="custom_error" class="alert alert-danger" role="alert">Niste uneli ispravne informacije. Pokušajte ponovo.</div></div>';
        }
    }

}
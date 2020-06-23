<?php
if (isset($_POST['forgetPassword_submit'])) {

    // Declaring variables
    $username = $_POST['forgetUsername'];
    $email = $_POST['forgetEmail'];

    $passwordRecovery = $db->query('SELECT user_name, user_email FROM users WHERE user_name = ?', $username)->fetchAll();

    foreach ($passwordRecovery as $password) {
        $db_username = $password['user_name'];
        $db_email = $password['user_email'];
    }

    if ($username !== $db_username && $email !== $db_email) {
        $error = '<div class="col"><div id="custom_error" class="alert alert-danger" role="alert">Poruka nije poslata. Molimo pokušajte ponovo.</div></div>';
    } elseif ($username === $db_username && $email === $db_email) {

        $recovery = $function->password_generate(12) . '\n';

        $recoverySuccessMsg = '<div class="col"><div id="custom_success" class="alert alert-success">Nova privremena lozinka vam je poslata na email.</div></div>';

        $recPassword = md5($recovery);

        $updatePassword = $db->query('UPDATE users SET user_password = ? WHERE user_name = ?', $recPassword, $username);

        $to      = $db_email;
        $subject = 'Zaboravljena Lozinka - LO';
        $message = 'Ovde je vaša trenutna lozinka. Ulogujte se sa njom na svoj profil i nakon toga je promenite. Hvala <b>Nova lozinka: '.$recovery.'</b>';
        $headers = 'From: lo@lo.com' . "\r\n" .
            'Reply-To: lo@lo.com'. "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        if (!mail($to, $subject, $message, $headers)) {
            echo '<div class="col"><div id="custom_error" class="alert alert-danger" role="alert">Poruka nije poslata. Molimo pokušajte ponovo.</div></div>';
        }

    } else {
        $error = '<div class="col"><div id="custom_error" class="alert alert-danger" role="alert">Ne možemo da pronađemo nalog sa tim kredencijalima. Proverite ponovo.</div></div>';
    }
}
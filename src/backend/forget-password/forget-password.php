<?php
if (isset($_POST['forgetPassword_submit'])) {
    $forgetPassword_email = $_POST['forgetPassword_email'];


    $checkEmail = $db->query('SELECT user_email FROM users WHERE user_email = ?', $forgetPassword_email)->fetchArray();

    $newPassword = $function->password_generate(12);


    if ($forgetPassword_email == $checkEmail['user_email']) {

        $to      = $checkEmail['user_email'];
        $subject = 'Zaboravljena Lozinka - LO';
        $message = 'Ovde je vaša trenutna lozinka. Ulogujte se sa njom na svoj profil i nakon toga je promenite. Hvala <b>Nova lozinka: '.$newPassword.'</b>';
        $headers = 'From: lo@lo.com' . "\r\n" .
            'Reply-To: lo@lo.com'. "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        if (mail($to, $subject, $message, $headers)) {
            echo '<div class="col"><div id="custom_success" class="alert alert-success">Nova privremena lozinka vam je poslata na email.</div></div>';
        } else {
            echo '<div class="col"><div id="custom_error" class="alert alert-danger" role="alert">Poruka nije poslata. Molimo pokušajte ponovo.</div></div>';
        }
    } else {
        echo '<div class="col"><div id="custom_error" class="alert alert-danger" role="alert">Proverite email adresu i pokusajte ponovo.</div></div>';
    }
}
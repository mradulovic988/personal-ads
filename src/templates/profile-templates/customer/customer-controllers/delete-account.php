<?php
// Sending email about details
if (isset($_POST['reasonSubmit']) && isset($_POST['reasonSubmitRadio'])) {
    $radioButton = $_POST['reasonSubmitRadio'];
    $explainMore = $_POST['explainMore'];
    $name = $_SESSION['user_fname'] . ' ' . $_SESSION['user_lname'];

    $profileEmail = $_SESSION['user_email'];
    $to      = 'upss070288@gmail.com';
    $subject = 'Izbrisan Profil - Razlog';
    $message = '<b>Email: </b> ' . $profileEmail . '<br><b>Name: </b> ' . $name .'<br><b>Razlog:</b> ' . $radioButton . '<br><b>Objašnjenje: </b>' . $explainMore;
    $headers = 'From: ' . $profileEmail . "\r\n" .
        'Reply-To: ' . $profileEmail . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
}

// Delete user
if (isset($_POST['deleteAccountDb'])) {

    $deleteImage = $db->query('SELECT user_pimage FROM users WHERE user_name = ?', $_SESSION['user_name'])->fetchArray();
    unlink(realpath('assets/img/register-user/' . $deleteImage['user_pimage']));

    $deleteUser = $db->query('DELETE FROM users WHERE user_name = ?', $_SESSION['user_name']);

    $function->logout();
}
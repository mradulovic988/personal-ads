<?php
if (isset($_POST['problemContact_submit'])) {
    $chooseSubject = print_r(implode('', $_POST['chooseSubject']), true);
    $problemText = $_POST['problemText'];
    $profileEmail = $_SESSION['user_email'];

    $to      = 'upss070288@gmail.com';
    $subject = $chooseSubject;
    $message = $problemText;
    $headers = 'From: ' . $profileEmail . "\r\n" .
        'Reply-To: ' . $profileEmail . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    if(mail($to, $subject, $message, $headers)) {
        echo '<div class="col"><div id="custom_success" class="alert alert-success">Hvala na kontaktu. Uskoro ćemo vas kontaktirati.</div></div>';
    } else {
        echo '<div class="col"><div id="custom_error" class="alert alert-danger" role="alert">Poruka nije poslata. Molimo pokušajte ponovo.</div></div>';
    }
}
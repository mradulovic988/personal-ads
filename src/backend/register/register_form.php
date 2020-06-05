<?php
$errors = [];
if (isset($_POST['register_submit'])) {


    $register_firstName = mysqli_real_escape_string($db->connection, $_POST['register_firstName']);
    $register_lastName = mysqli_real_escape_string($db->connection, $_POST['register_lastName']);
    $register_email = mysqli_real_escape_string($db->connection, $_POST['register_email']);
    $register_userName = mysqli_real_escape_string($db->connection, $_POST['register_userName']);
    $register_password = mysqli_real_escape_string($db->connection, $_POST['register_password']);
    $register_confirmPassword = mysqli_real_escape_string($db->connection, $_POST['register_confirmPassword']);
    $user_role = mysqli_real_escape_string($db->connection, $_POST['user_role']);
    $acceptpolicy = mysqli_real_escape_string($db->connection, $_POST['acceptpolicy']);

    // Validation
    if (empty($register_firstName)) { array_push($errors, "Ime je neophodno."); }
    if (empty($register_lastName)) { array_push($errors, "Prezime je neophodno.");}
    if (empty($register_userName)) { array_push($errors, "Korisničko ime je neophodno.");}
    if (empty($register_email)) { array_push($errors, "E-mail adresa je neophodna");}
    if (empty($register_password)) { array_push($errors, "Lozinka je neophodna.");}
    if (empty($acceptpolicy)) { array_push($errors, "Morate prihvatiti uslove korišćenja.");}
    if ($register_password != $register_confirmPassword) { array_push($errors, "Lozinke nisu identične.");}

    $username_lenght = strlen($register_userName);
    $password_lenght = strlen($register_password);

    if ($username_lenght < 5) { array_push($errors, "Korisničko ime mora imati minimum 5 karaktera."); }
    if ($password_lenght < 8) { array_push($errors, "Lozinka mora imati minimum 8 karaktera."); }

    // Check if the username and email are uniq
    $checkUser = $db->query('SELECT user_name, user_email FROM users WHERE user_name = ? OR user_email = ? LIMIT 1', $register_userName, $register_email)->fetchArray();

    if ($checkUser) {
        if ($checkUser['user_name'] === $register_userName) {
            array_push($errors, "Korisničko ime je zauzeto. Pokušajte drugo.");
        }

        if ($checkUser['user_email'] === $register_email) {
            array_push($errors, "E-mail adresa je zauzeta. Pokušajte drugu.");
        }
    }


    if (count($errors) === 0) {
        $register_password = md5($register_confirmPassword);

        $add_user = $db->query("INSERT INTO users (user_fname, user_lname, user_email, user_name, user_password, user_role, user_date) VALUES (?, ?, ?, ?, ?, ?, NOW())", $register_firstName, $register_lastName, $register_email, $register_userName, $register_password, $user_role);

        $_SESSION['user_name']  = $register_userName;
        $_SESSION['user_email'] = $register_email;

        $add_user->close();

        $function->redirect('login.php');
    }
}
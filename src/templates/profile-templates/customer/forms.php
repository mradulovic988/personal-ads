<?php
if (isset($_POST['phoneNumber_submit'])) {
    $phoneNumber = $_POST['phoneNumber'];
    $profilePhone = $db->query('UPDATE users SET user_phone = ? WHERE user_name = ?', $phoneNumber, $_SESSION['user_name']);
}

if (isset($_POST['birth_submit'])) {
    $birth = $_POST['birth'];
    $profileBirth = $db->query('UPDATE users SET user_birth = ? WHERE user_name = ?', $birth, $_SESSION['user_name']);
}

if (isset($_POST['city_submit'])) {
    $city = $_POST['city'];
    $profileCity = $db->query('UPDATE users SET user_city = ? WHERE user_name = ?', $city, $_SESSION['user_name']);
}

if (isset($_POST['profileImage_submit'])) {
    $fileTmpPath    = $_FILES['profileImage']['tmp_name'];
    $profileImage   = $_FILES['profileImage']['name'];
    $fileSize       = $_FILES['profileImage']['size'];
    $fileType       = $_FILES['profileImage']['type'];

    $fileNameCmps           = explode(".", $profileImage);
    $fileExtension          = strtolower(end($fileNameCmps));
    $allowedfileExtensions  = ['jpg', 'png', 'jpeg'];

    if (in_array($fileExtension, $allowedfileExtensions)) {
        $uploadFileDir = 'assets/img/register-user/';
        $dest_path = $uploadFileDir . $profileImage;

        if(move_uploaded_file($fileTmpPath, $dest_path)) {
            $profileImage = $db->query('UPDATE users SET user_pimage = ? WHERE user_name = ?', $profileImage, $_SESSION['user_name']);
        }
    }
}
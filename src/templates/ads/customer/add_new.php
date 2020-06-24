<?php
if (isset($_POST['adsSubmit'])) {

//    $ads_fileTmpPath        = $_FILES['adsImages']['tmp_name'];
//    $adsImages              = $_FILES['adsImages']['name'];
//    $fileSize               = $_FILES['adsImages']['size'];
//    $fileType               = $_FILES['adsImages']['type'];

    $adsName = mysqli_real_escape_string($db->connection, $_POST['adsName']);
    $adsDescription = mysqli_real_escape_string($db->connection, $_POST['adsDescription']);
    $adsCategory = mysqli_real_escape_string($db->connection, print_r(implode('', $_POST['adsCategory']), true));
    $adsTown = mysqli_real_escape_string($db->connection, print_r(implode('', $_POST['adsTown']), true));
    $adsPlan = mysqli_real_escape_string($db->connection, print_r(implode('', $_POST['adsPlan']), true));

    $targetDir = realpath('assets/img/ads/');
    $allowTypes = array('jpg', 'png', 'jpeg');

    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
    $fileNames = array_filter($_FILES['adsImages']['name']);

    if (!empty($fileNames)) {

        foreach ($_FILES['adsImages']['name'] as $key => $val) {
            // File upload path
            $fileName = basename($_FILES['adsImages']['name'][$key]);
            $targetFilePath = $targetDir . $fileName;

            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            if (in_array($fileType, $allowTypes)) {
                // Upload file to server
                if (move_uploaded_file($_FILES["adsImages"]["tmp_name"][$key], $targetFilePath)) {
                    // Image db insert sql
                    $insertValuesSQL .= "('" . $fileName . "', NOW()),";
                } else {
                    $errorUpload .= $_FILES['adsImages']['name'][$key] . ' | ';
                }
            } else {
                $errorUploadType .= $_FILES['adsImages']['name'][$key] . ' | ';
            }
        }

        if (!empty($insertValuesSQL)) {
            $insertValuesSQL = trim($insertValuesSQL, ',');
            // Insert image file name into database
            $insert = $db->query("INSERT INTO users_ads (user_id, ads_name, ads_description,	ads_category, ads_images, ads_location,	ads_plan, ads_end_date, ads_pending) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)", '1', 'test', 'test', 'test', $insertValuesSQL, 'test', 'test', 'test', 1);
            if ($insert) {
                $errorUpload = !empty($errorUpload) ? 'Upload Error: ' . trim($errorUpload, ' | ') : '';
                $errorUploadType = !empty($errorUploadType) ? 'File Type Error: ' . trim($errorUploadType, ' | ') : '';
                $errorMsg = !empty($errorUpload) ? '<br/>' . $errorUpload . '<br/>' . $errorUploadType : '<br/>' . $errorUploadType;
                $statusMsg = "Files are uploaded successfully." . $errorMsg;
            } else {
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        $statusMsg = 'Please select a file to upload.';
    }

}
<?php
/**
 * Functions class
 */

class Functions extends Database
{

    public function __construct($dbhost = 'localhost', $dbuser = 'root', $dbpass = 'komra1988', $dbname = 'lo', $charset = 'utf8')
    {
        parent::__construct($dbhost, $dbuser, $dbpass, $dbname, $charset);
    }

    // Redirection
    public function redirect($location)
    {
        header("Location: " . $location);
        exit();
    }

    // Logged in or Logged out
    public function ifIsloggedIn()
    {
        return isset($_SESSION['user_name']);
    }

    // Check if it's user logged in
    public function loggedIn()
    {
        if (!isset($_SESSION['user_name']) && $_SESSION['user_name'] !== '') {
            $this->redirect('login.php');
        }
    }

    // User Logout
    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();

        $this->redirect('./index.php');
        exit;
    }

    // If is the user an admin
    public function isAdmin()
    {
        return $_SESSION['user_role'] == 10;
    }

    // Password generator
    public function password_generate($chars)
    {
        $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz!@#$%^&*()_+';
        return substr(str_shuffle($data), 0, $chars);
    }
}

$function = new Functions();
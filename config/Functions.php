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

    public function redirect($location)
    {
        header("Location: " . $location);
        exit();
    }
}

$function = new Functions();
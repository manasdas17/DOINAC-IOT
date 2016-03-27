<?php 

    require_once 'db_credentials.php';

    $db = new PDO("mysql:host=".$db_hostname.";dbname=".$db_database.";charset=utf8",
                  $db_username, $db_password);

    /* So PDO will throw an expcetion if something goes wrong */
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    function create_table($tbl_name, $fields) {
       
        global $db;

        $query = "CREATE TABLE IF NOT EXISTS `$tbl_name` (";

        foreach($fields as $field => $type) {
            $query .= "`$field` $type,";
        }

        $query = rtrim($query, ',') .") ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";

        $db->exec($query);

    }


    function safe_string($string) {

        $string = strip_tags($string);
        $string = htmlentities($string);
        $string = stripcslashes($string);

        return $string;
    }

    /* Returns the variable value if it exists or empty if it doesn't.
       Note that we make a pass by reference so we can send globals and it will work 
    */
    function isset_or_empty(&$variable) {
        if (isset($variable)) {
            return $variable;
        } else {
            return "";
        }
    }

    function start_session_if_not_started() {
        if (!isset($_SESSION)) {
            session_start();
    }

    }

    function destroy_session_and_data() {
        
        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION = array();
        setcookie(session_name(), '', time() - 2592000, '/');
        session_destroy();
    }

    function redirect_and_exit($url) {
        header("Location: " . $url);
        exit();
    }

 ?>
<?php 

    require_once 'credentials.php';

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




 ?>
<?php 

    require_once 'functions.php';

    function db_users_create_table() {

        create_table("users",  
        array(
                "id"         => "INT NOT NULL AUTO_INCREMENT PRIMARY KEY",
                "first_name" => "VARCHAR(20) NOT NULL",
                "last_name"  => "VARCHAR(20) NOT NULL",
                "email"      => "VARCHAR(30) NOT NULL UNIQUE KEY",
                "password"   => "CHAR(64) NOT NULL"
            )
        );
    }

    function db_users_add_user($first_name, $last_name, $email, $password) {

        global $db;

        $password = hash('sha256', $password);
        $sql = "INSERT INTO users VALUES(NULL, '$first_name', '$last_name', '$email', '$password')";
        $db->exec($sql);
    }

    function db_users_check_email_exists($email) {

        global $db;

        $sql = "SELECT * FROM users WHERE email = '$email'";

        $rows = $db->query($sql);
        return $rows->rowcount() !== 0;
    }

    function db_users_check_credentials($email, $password) {

        global $db;

        $password = hash('sha256', $password);
        $sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";

        $rows = $db->query($sql);
        return $rows->rowcount() != 0;
    }


 ?>
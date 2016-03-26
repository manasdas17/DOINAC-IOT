<?php 
    
    require_once 'functions.php';
    require_once 'db_users.php';
    require_once 'setup.php';

    $email    = "";
    $password = "";


    /* validate credebtuaks AJAX request */


    /* Not very DRY, TODO: refactor! */
    if (isset($_POST['signin-email'])) {
        $email = safe_string($_POST['signin-email']);
    } else {
        echo "error";
        exit();
    }

    if (isset($_POST['signin-password'])) {
        $password = safe_string($_POST['signin-password']);
    } else {
        echo "error";
        exit();
    }

    if (db_users_check_credentials($email, $password)) {
        echo "success";
    } else {
        echo "Nope, not found";
    }


 ?>
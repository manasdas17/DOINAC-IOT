<?php 
    
    require_once 'functions.php';
    require_once 'db_users.php';
    require_once 'setup.php';

    $email    = "";
    $password = "";

    $email    = safe_string(isset_or_empty($_POST['signin-check-email']));
    $password = safe_string(isset_or_empty($_POST['signin-check-password']));
    if (db_users_check_credentials($email, $password)) {

        if (!isset($_SESSION)) {
            session_start();
        }

        $user_data = db_users_get_by_email($email);
        

        $_SESSION['login-email']      = $email;
        $_SESSION['login-first-name'] = $user_data['first_name'];
        $_SESSION['login-last-name']  = $user_data['last_name'];
        $_SESSION['loggedin']         = true;
        
        echo "ok";
    } else {
        echo "invalid";
    }

 ?>
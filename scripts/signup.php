<?php 
    
    require_once 'functions.php';
    require_once 'db_users.php';
    require_once 'setup.php';

    /* validate email AJAX request */
    if (isset($_POST['check-email'])) {
        
        $signup_email = safe_string($_POST['check-email']);
        echo db_users_check_email_exists($signup_email) ? "exists" : "ok";
    } 

    else {

        /* Elements are validated by javascript so here we are */

        $first_name = safe_string($_POST['signup-fname']);
        $last_name  = safe_string($_POST['signup-lname']);
        $email      = safe_string($_POST['signup-email']);
        $password   = safe_string($_POST['signup-password']);

        db_users_add_user($first_name, $last_name, $email, $password);
        
        /* ECHO a page that account is created succesful etc. */



    }
  
 ?>
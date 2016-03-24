<?php 
    
    require_once 'db_users.php';

    $first_name = $_POST['firstName'];
    $last_name  = $_POST['lastName'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];

    db_users_add_user($fist_name, $last_name, $email, $password);
    
 ?>
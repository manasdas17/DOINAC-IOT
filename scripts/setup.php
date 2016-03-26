<?php 

    require_once 'functions.php';

    db_users_create_table();

    /* Temporary add root user for admin */
    if (!db_users_check_credentials("root", "root")) {
        db_users_add_user("ADMIN", "ADMIN", "root", "root");
    }


 ?>
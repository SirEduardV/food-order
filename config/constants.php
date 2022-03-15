<?php
    // Start Session
    session_start();

    // Create Constants to Store Non Repeating Values
    define('SITEURL', 'http://food-order/');
    define('DB_HOST', 'food-order');
    define('DB_USERNAME', 'mysql');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'food-order');

    $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error($e)); // Database Connection
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error($e)); // Selecting Database
?>
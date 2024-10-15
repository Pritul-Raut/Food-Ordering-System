<?php
// Sessions
session_start();

// Constants
define('LOCALHOST', 'localhost');
define('DB_PORT', 3307);
define('DB_USERNAME', 'root@');
define('DB_PASSWORD', '');
define('DB_NAME', 'food_order');
define("INDEXPAGE", 'http://localhost/db-file/');

// Making connection to database
$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>
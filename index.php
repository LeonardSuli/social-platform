<?php

// Database connection

// 1. Define some constants
define('DB_SERVERNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'social_platform');

// 2. Create an instance of the new connection
$connection = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

// 3. Check if there is a connection error
if ($connection && $connection->connect_error) {

    echo "Connection failed: " . $connection->connect_error;

    die;
}

<?php

// DATABASE CONNECTION

// Define some constants
define('DB_SERVERNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'social_platform');

// Create an instance of the new connection
$connection = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check if there is a connection error
if ($connection && $connection->connect_error) {

    echo "Connection failed: " . $connection->connect_error;

    die;
}

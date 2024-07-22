<?php
// Database credentials
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'superdaddyghostpromax';

// Establish a connection to the database
$conn = mysqli_connect($host, $user, $password, $database);

// Check the connection
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}
?>
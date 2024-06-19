<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rental_db";

// Create connection
$connect = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
?>

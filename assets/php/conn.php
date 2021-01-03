<?php

// define('ROOT_PATH', 'localhost\PD');

$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "parkdeli";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>
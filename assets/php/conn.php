<?php

// define('ROOT_PATH', 'localhost\PD');
// ("parkdelione","mysqlv7","parkdelione","Ab123456");

$servername = "mysqlv7";
$username = "parkdelione";
$password = "Ab123456";
$dbname = "parkdelione";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "parkdeli";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>
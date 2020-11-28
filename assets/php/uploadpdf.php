<?php

include 'conn.php';

$file = $_FILES["specials"];

print($file);

$conn->close();

?>
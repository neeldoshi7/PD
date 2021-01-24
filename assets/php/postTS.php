<?php

include 'conn.php';

if (isset($_POST['yes'])) {
    $query = "UPDATE `specials` SET `todays_special` = 1";
    echo 'YES';
    header('Location: .\..\..\adminpage.php');
} else {
    $query = "UPDATE `specials` SET `todays_special` = 0";
    echo 'NO';
    header('Location: .\..\..\adminpage.php');
}

$result = $conn->query($query);

?>
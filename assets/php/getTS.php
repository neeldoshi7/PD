<?php

include 'conn.php';

$query = 'SELECT `todays_special` FROM `specials`';
$bool = $conn->query($query);
$val;

if ($bool) {
    if ($bool->num_rows == 1) {
        $row = mysqli_fetch_assoc($bool);
        $val = $row['todays_special'];
    } else {
        echo '<p>There are no files in the database</p>';
    }
} else {
    echo 'Error! SQL query failed:';
                echo "<pre>{$conn->error}</pre>";
}

?>
<?php

include 'conn.php';

$username = "neelpatel";
$password = "12345678";

$query = "SELECT password WHERE username like $username";

$result = $conn->query($mysql_qry);

if($result->num_rows === 1) {
    while($row = $result->fetch_assoc()) {
        if ($row["password"] === $password) {
            print("Login");
        }
	}
} else {
    print("Unsuccessful");
}

$conn->close();

?>
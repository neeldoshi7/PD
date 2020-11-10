<?php

include 'conn.php';

$username = "neelpatel";
$password = "12345678";

$query = "SELECT * FROM authentication where username = '{$username}'";

$result = mysqli_query($conn, $query);

if($result === false) {
    print("false");
}

if(mysqli_num_rows($result) === 1) {
    while($row = $result->fetch_assoc()) {
        if ($row["password"] === $password) {
            print("Login");
            print(ROOT_PATH);
            header('Location: .\..\..\admin.html');
            exit;
        }
	}
} else {
    print("Unsuccessful");
    exit;
}

$conn->close();

?>
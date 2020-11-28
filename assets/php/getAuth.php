<?php

include 'conn.php';

$username = $_POST["username"];
$password = $_POST["password"];

$query = "SELECT * FROM authentication where username = '{$username}'";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) === 1) {
    while($row = $result->fetch_assoc()) {
        if ($row["password"] === $password) {
            print("Login");
            header('Location: .\..\..\adminpage.html');
            exit;
        } else {
            print("Wrong pass");
            echo "<script>alert('Wrong Credentials');</script>";
            // echo "<script>document.location = 'admin.html';</script>";
            header('Location: .\..\..\admin.html');
        }
	}
} else {
    print("Unsuccessful");
    // echo "<script>alert('Wrong Credentials');</script>";
    header('Location: .\..\..\admin.html');
}

$conn->close();

?>
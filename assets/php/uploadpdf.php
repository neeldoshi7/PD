<?php

include 'conn.php';

if(isset($_FILES['uploaded_file'])) {
    // Make sure the file was sent without errors
    if($_FILES['uploaded_file']['error'] == 0 && $_FILES['uploaded_file']['type'] == "application/pdf") {
        // Connect to the database
 
        // Gather all required data
        $data = $conn->real_escape_string(file_get_contents($_FILES  ['uploaded_file']['tmp_name']));
 
        // Create the SQL query
        $query = "UPDATE `pdf` SET `pdf_file` = '{$data}' WHERE `id` = 1";
 
        // Execute the query
        $result = $conn->query($query);
 
        // Check if it was successfull
        if($result) {
            echo 'Success! Your file was successfully added!';
            header('Location: .\..\..\adminpage.html');
        }
        else {
            echo 'Error! Failed to insert the file'
               . "<pre>{$conn->error}</pre>";
        }
    }
    else {
        echo 'An error accured while the file was being uploaded. '
           . 'Error code: '. intval($_FILES['uploaded_file']['error']);
    }
}
else {
    echo 'Error! A file was not sent!';
}

$conn->close();

?>
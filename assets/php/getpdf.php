<?php

include 'getTS.php';

// $query = 'SELECT `todays_special` FROM `specials`';
// $bool = $conn->query($query);

// if ($bool) {
//     if ($bool->num_rows == 1) {
//         $row = mysqli_fetch_assoc($bool);
        if ($val === 1) {
            // Query for a list of all existing files
            $sql = 'SELECT `pdf_file` FROM `pdf`';
            $result = $conn->query($sql);
            
            // Check if it was successfull
            if($result) {
                // Make sure there are some files in there
                if($result->num_rows == 1) {

                    $row = mysqli_fetch_assoc($result);

                    header("Content-type:application/pdf");

                    echo $row['pdf_file'];
            
                    
                } else {
                    echo '<p>There are no files in the database</p>'; 
                }
            } else {
                echo 'Error! SQL query failed:';
                echo "<pre>{$conn->error}</pre>";
            }
        } else {
            echo "<script>alert('Not Available');";
            echo "window.location.pathname = '/PD/index.html'</script>";
            // header('Location: .\..\..\index.html');
        }



$conn->close();

?>
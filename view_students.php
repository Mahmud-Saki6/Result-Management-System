<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student Information</title>
</head>
<body>
    <h1>View Student Information</h1>
</body>
</html>


<?php
    include("database.php");
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    // Prepare the SQL query to retrieve data from the database table
    $sql = "SELECT * FROM student";
    
    // Execute the query
    $result = mysqli_query($conn, $sql);
    
    //echo $result; 

    if (!$result) {
        die("Error: " . mysqli_error($conn));
    }
    
    // Check if there are any records
    if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Student ID: " . $row["id"] . "<br>";
            echo "Student Name: " . $row["student_name"] . "<br>";
            echo "Class: " . $row["class"] . "<br>";
            echo "Phone Number: " . $row["phone_number"] . "<br>";
            echo "Address: " . $row["address"] . "<br>";
            echo "Father Name: " . $row["father_name"] . "<br>";
            echo "Mother Name: " . $row["mother_name"] . "<br><br>";
        }
    } else {
        echo "No records found.";
    }
    
    mysqli_close($conn);
    ?>
    




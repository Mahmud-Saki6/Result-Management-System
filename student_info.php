<?php
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student Information</title>
</head>
<body>
            
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method = "post">
        <h2>Add Student Information</h2>
        
        Student Name:<br>
        <input type="text" name="student_name"><br>
        <br>
        Class :<br>
        <input type="text" name="class"><br>
        <br>
        Phone Number :<br>
        <input type="text" name="phone_number"><br>
        <br>
        Address: <br>
        <input type="text" name="address"><br>
        <br>
        Father Name: <br>
        <input type="text" name="father_name"><br>
        <br>
        Mother Name: <br>
        <input type="text" name="mother_name"><br>
        <br>
        <input type="submit" name="submit" value="register">
        
 </form>

</body>
</html>

 <?php


    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // Retrieve the form data
        $studentName = $_POST["student_name"];
        $class = $_POST["class"];
        $phoneNumber = $_POST["phone_number"];
        $address = $_POST["address"];
        $fatherName = $_POST["father_name"];
        $motherName = $_POST["mother_name"];
        // You may want to perform some data validation here before inserting into the database
        // Prepare the SQL query to insert data into the database table
        $sql = "INSERT INTO student (student_name, class, phone_number, address, father_name, mother_name) 
        VALUES ('$studentName', '$class', '$phoneNumber', '$address', '$fatherName', '$motherName')";
        // Execute the query
        if (mysqli_query($conn, $sql)) 
        {
             echo "Data inserted successfully!";
        } else
        {
             echo "Error: " . mysqli_error($conn);
        }

    }     // web server(apache) and database server(myslq) 
    mysqli_close($conn);
?>


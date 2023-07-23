<?php
    include("database.php");
    // Code will only execute if the form was submitted using the "POST" method.
    // Here, you can process the form data, validate it, and perform actions based on the submitted data.
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {
        // Retrieve the student ID to be deleted from the text box
        $studentIDToDelete = $_POST["student_id_to_delete"];
        // Prepare the SQL query to delete the row from the database
        $sql = "DELETE FROM student WHERE id = '$studentIDToDelete'";
        // Execute the query
        if (mysqli_query($conn, $sql)) {
            echo "Data with Student ID $studentIDToDelete deleted successfully!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
?>
<!-- Code for the delete button will run html = client, php = server --> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Student Information</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2>Delete Student Information</h2>
        Student ID to Delete:<br>
        <input type="text" name="student_id_to_delete"><br>
        <input type="submit" name="delete" value="Delete">
        
    </form>
</body>
</html>
<!-- Code to view student information -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style> 
        form {
            margin-top: 20px; /* Add space between the heading and the form */
        }
    </style> 
</head>
<body> 
    <h1>View Student Information</h1>
    <form action="http://localhost:3000/view_students.php">
        <button type="submit">View Students</button>
    </form>
</body>
</html>

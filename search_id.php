<?php
    include("database.php");
    
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["search"])) {
        // Retrieve the student ID to be searched from the input field
        $studentIDToSearch = $_POST["student_id_to_search"];
        
        // Prepare the SQL query to fetch the row from the database based on the provided student ID
        $sql = "SELECT * FROM student WHERE id = '$studentIDToSearch'";
        
        // Execute the query
        $result = mysqli_query($conn, $sql);     
        // Check if the query was successful and if there are any matching rows
        if ($result && mysqli_num_rows($result) > 0) {
            echo "Data with Student ID $studentIDToSearch:<br><br>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "Student ID: " . $row["id"] . "<br>";
                echo "Student Name: " . $row["student_name"] . "<br>";
                echo "Class: " . $row["class"] . "<br>";
                echo "Phone Number: " . $row["phone_number"] . "<br>";
                echo "Address: " . $row["address"] . "<br>";
                echo "Father Name: " . $row["father_name"] . "<br>";
                echo "Mother Name: " . $row["mother_name"] . "<br><br>";
            }
            echo "</table>";
        } else {
            // If no matching rows are found, display a message
            echo "No results found for Student ID: ".$studentIDToSearch;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Student Information</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2>Search Student Information</h2>
        Student ID to Search:<br>
        <input type="text" name="student_id_to_search"><br>
        <input type="submit" name="search" value="Search">
    </form>
</body>
</html>


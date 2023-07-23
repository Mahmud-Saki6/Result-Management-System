# Result-Management-System
This is a simple Result Management System built using PHP. It provides basic functionalities to manage student information, including adding new students, viewing student information, searching students by various criteria, and deleting students from the database.

Features
Add Student Information: The system allows users to add new student information, including student name, class, phone number, address, father's name, and mother's name.
View Student Information: Users can view a list of all students along with their details, such as student ID, name, class, phone number, address, father's name, and mother's name.
Search Students: The system offers three search options:
1. Search by Student ID: Users can search for students using their unique student ID.
2. Search by Student Name: Users can search for students by their names.
3. Search by Student Class: Users can search for students based on their class.
Delete Students: Users can delete a student's record from the database by providing the student's ID.
Getting Started

To run the Result Management System locally on your machine, follow these steps:
1. Requirements:
   Apache Server
   MySQL Server
  PHP   
2. Database Configuration:
   Ensure your MySQL server is running.
   Open the database.php file and update the $db_server, $db_user, $db_pass, and $db_name variables with your MySQL credentials.
3. Installation:
   Copy all project files to the htdocs or www directory of your Apache server.
4. Create Database:
   Import the rms.sql file into your MySQL database to create the necessary tables.
5. Run the Application:
   Start your Apache server and visit http://localhost/ResultManagementSystem in your web browser.

How to Use
1. Add Student Information:
   Click on "Student Admission" to add a new student's information.
   Fill in the student details in the form and click the "Register" button to add the student to the database.
2. View Student Information:
   Click on "View Student Information" to see a list of all students and their details.
3. Search Students:
   Click on "Search for Students" and choose the appropriate search option:
  "Search by Student ID": Enter the student's ID and click "Search" to find the student's information.
  "Search by Student Name": Enter the student's name and click "Search" to find the student's information.
  "Search by Student Class": Enter the student's class and click "Search" to find all students in that class.
4. Delete Students:
   Click on "Delete Students" to delete a student from the database.
   Enter the student's ID and click "Delete" to remove the student's record.

Notes
This project is for educational purposes and may require further enhancements for production use.
Ensure proper error handling and data validation before deploying this system in a real-world scenario.
Feel free to contribute to this project and make it more robust and user-friendly.

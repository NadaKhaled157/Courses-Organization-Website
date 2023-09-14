<?php
session_start();
//if (isset($_SESSION['courseDetails'])) {
//    // Retrieve the course details from the session variable
//    $courseDetails = json_decode($_SESSION['courseDetails'], true);
$courseID= $_GET['courseID'];

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "courses-db";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

// Retrieve the course details from the database
$sql = "SELECT * FROM `courses-data` WHERE course_id='" . $courseID . "'";
$result = $conn->query($sql);

// Present the course details to the user
//if ($result->num_rows>0) {
//while($row = $result->fetch_assoc()) {
    $row = $result->fetch_assoc();
echo "<h1>" . $row['title'] . "</h1>";
echo "<p>" . $row['description'] . "</p>";
//echo "<p>Instructor: " . $row['instructor'] . "</p>";
//echo "<p>Price: $" . $row['price'] . "</p>";
//}
//} else {
//echo "0 results";
//}

$conn->close();
//} else {
//    echo "Error: courseDetails key is not defined in the session array.";
//}

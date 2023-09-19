<?php
require_once "db.php";
global $conn;
if(isset($_POST['review'])) {
    $review = $_POST["review"];
    $sql = "INSERT INTO reviews (UserID, CourseID, review) VALUES (2,'RO','$review')";
//$result = mysqli_query($conn, $sql) or die("Query failed: " . mysqli_error($conn));
    if ($conn->query($sql)) {
        echo "Query executed successfully!";
    } else {
        echo "Query failed!";
    }
}

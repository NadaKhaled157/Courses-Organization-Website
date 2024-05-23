<?php
require_once 'db.php'; global $conn;
session_start();
$email = $_GET['user'];
$courseID= $_GET['course'];

$sql1= "SELECT id FROM users WHERE email='".$email."'";
$result1 = mysqli_query($conn, $sql1) or die("Query failed: " . mysqli_error($conn));
$userID = $result1->fetch_assoc();
echo $userID['id'];
echo $courseID;
if ($_GET['type']=='enroll') {
    $sql2 = "INSERT INTO Enrollment (UserID, CourseID) VALUES (" . $userID['id'] . ", '$courseID')";
    $sql3 = "INSERT INTO quizzes (UserID,CourseID) VALUES (" . $userID['id'] . ", '$courseID')";

    if ($conn->query($sql2) === TRUE && $conn->query($sql3) === TRUE) {
        $_SESSION["alert"] = "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
  Successfully Enrolled.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
    } else {
        $_SESSION["alert"] = "<div class='alert alert-danger alert-dismissible' role='alert'>
  Failed to Enroll. Make sure you haven't previously enrolled in this course then try again.
</div>";
    }
} else if ($_GET['type']=='save'){
    $sql2= "INSERT INTO saved (UserID, CourseID) VALUES (".$userID['id'].", '$courseID')";

    if($conn->query($sql2) === TRUE) {
        $_SESSION["alert"]= "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
  Course saved successfully. You can find it in your profile under 'Saved Courses'.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
    } else {
        $_SESSION["alert"]= "<div class='alert alert-danger alert-dismissible' role='alert'>
  Failed to save course. Please make sure you don't already have it saved and try again.
</div>";
    }
}

header("Location: Homepage.php");




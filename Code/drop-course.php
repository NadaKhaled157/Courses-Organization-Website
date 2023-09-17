<?php//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "courses-db";
//
//// Create Connection
//$conn = new mysqli($servername, $username, $password, $dbname);
//// Check Connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//
//session_start();
//include 'logged-nav.php';
//$courseID= $_GET["courseId"];
//$userID= $_GET["userId"];
//
//$sql = "DELETE FROM enrollment WHERE CourseID='".$courseID."' AND UserID='".$userID."'";
//if($conn->query($sql) === TRUE) {
//    $_SESSION["alert"]= "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
//  Successfully dropped course.
//  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
//</div>";
//} else {
//    $_SESSION["alert"]= "<div class='alert alert-danger' role='alert'>
//  Failed to drop course. Please refresh page and try again.
//</div>";
//}
//header("Location: Homepage.php");
//

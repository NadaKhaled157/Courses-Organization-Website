<?php
require_once "db.php";
global $conn;
global $userID;
session_start();
if(isset($_SESSION["alert"])) {
    echo $_SESSION["alert"];
    unset($_SESSION["alert"]);
}

if(isset($_POST['review'])) {
    $review = $_POST["review"];
    $courseID= $_GET['course'];
    $userID= $_GET['user'];
    $sql = "INSERT INTO reviews (UserID, CourseID, review) VALUES (2,'$courseID','$review')";
//$result = mysqli_query($conn, $sql) or die("Query failed: " . mysqli_error($conn));
    if ($conn->query($sql)) {
        $_SESSION["alert"]= "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
  Review posted successfully. You can find it by clicking on the course rating.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
    } else {
        $_SESSION["alert"]= "<div class='alert alert-danger' role='alert'>
  Error posting course review. Please refresh the page and try again.
</div>";
    }
    header("Location: Course-Details.php?id=".$courseID."");
}

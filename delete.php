<?php
require_once 'db.php';
global $conn;

//include 'navbar.php';

session_start();
$ID= $_GET["id"];
$table= $_GET["table"];

$sql = "DELETE FROM ".$table." WHERE id='".$ID."' ";
$deleted=null;
//$courseID= $_GET["id"];
if($table=="users") {
    $deleted= "User";
}
else if ($table=="courses") {
    $deleted= "Course";
} else if ($table=="enrollment"){
    $deleted= "Course";
    $userID=$_GET['userId'];
    $sql = "DELETE FROM enrollment WHERE CourseID='".$ID."' AND UserID='".$userID."'";
    $sql2= "DELETE FROM quizzes WHERE CourseID='".$ID."' AND UserID='".$userID."'";
    if(!$conn->query($sql2)){
        $_SESSION["alert"]= "<div class='alert alert-danger' role='alert'>
  Error deleting ".$deleted." Record. Please refresh page and try again.
</div>";
    }
}
if($conn->query($sql) === TRUE) {
    $_SESSION["alert"]= "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
  ".$deleted." record deleted successfully.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
} else {
    $_SESSION["alert"]= "<div class='alert alert-danger' role='alert'>
  Error deleting ".$deleted." Record. Please refresh page and try again.
</div>";
}
if($table=="enrollment"){
    header("Location: Homepage.php");
}
else header("Location: edit-".$table.".php");





<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "courses-db";

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
include 'admin-nav.php';

$courseID= $_POST["id"];
$title= $_POST["title"];
$brief= $_POST["brief"];
$description= $_POST["description"];
$duration= $_POST["duration"];
$projects= $_POST["projects"];
$price= $_POST["price"];

if($_GET['text']=='add'){
$sql = "INSERT INTO courses (id, title, brief, description, rating, duration, projects, price) VALUES
('$courseID','$title','$brief','$description',0,'$duration','$projects','$price')";

if($conn->query($sql) === TRUE) {
    $_SESSION["alert"]= "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
  Course Record created successfully.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
} else {
    $_SESSION["alert"]= "<div class='alert alert-danger' role='alert'>
  Error creating Course Record. Please double-check the information you entered and try again.
</div>";
}
header("Location: addOrEdit-course.php?text=add");
} else if($_GET['text']=='edit'){
    $oldID= $_GET['id'];
    $sql2 = "UPDATE courses SET title ='".$title."' WHERE id='".$oldID."' ";
    $sql3 = "UPDATE courses SET brief ='".$brief."' WHERE id='".$oldID."' ";
    $sql4 = "UPDATE courses SET description ='".$description."' WHERE id='".$oldID."' ";
    $sql5 = "UPDATE courses SET duration ='".$duration."' WHERE id='".$oldID."' ";
    $sql6 = "UPDATE courses SET projects ='".$projects."' WHERE id='".$oldID."' ";
    $sql7 = "UPDATE courses SET price ='".$price."' WHERE id='".$oldID."' ";
//    $sql1 = "UPDATE courses SET id ='".$courseID."' WHERE id='".$oldID."' ";

    if($conn->query($sql2) === TRUE
        && $conn->query($sql3) === TRUE && $conn->query($sql4) === TRUE
        && $conn->query($sql5) === TRUE && $conn->query($sql6) === TRUE
        && $conn->query($sql7) === TRUE) {
        $_SESSION["alert"]= "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
  Course Record edited successfully.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
    } else {
        $_SESSION["alert"]= "<div class='alert alert-danger' role='alert'>
  Error editing Course Record. Please double-check the information you entered and try again.
</div>";
    }
    header("Location: edit-courses.php");
}





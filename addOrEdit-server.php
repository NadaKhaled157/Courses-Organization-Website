<?php
require_once 'db.php';
global $conn;
session_start();
//include 'navbar.php';

if(isset($_POST['submit'])) {
    $courseID = $_POST["id"];
    $title = $_POST["title"];
    $brief = $_POST["brief"];
    $description = $_POST["description"];
    $duration = $_POST["duration"];
    $projects = $_POST["projects"];
    $price = $_POST["price"];
    $img = $_FILES["img"]["name"];
    $img_temp = $_FILES["img"]["tmp_name"];
    $folder = "Photos/Courses/" . $img;

    echo $img;
    echo "<br>";
    echo $img_temp;
    echo "<br>";
    echo $folder;


    if ($_GET['text'] == 'add') {
        $sql = "INSERT INTO courses (id, title, brief, description, rating, duration, projects, price, img) VALUES
('$courseID','$title','$brief','$description',0,'$duration','$projects','$price','$img')";


        if ($conn->query($sql) === TRUE) {
            $_SESSION["alert"] = "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
  Course Record created successfully.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
            move_uploaded_file($img_temp, $folder);
        } else {
            $_SESSION["alert"] = "<div class='alert alert-danger' role='alert'>
  Error creating Course Record. Please double-check the information you entered and try again.
</div>";
        }
        header("Location: addOrEdit-course.php?text=add");
    } else if ($_GET['text'] == 'edit') {
        $courseId = $_GET['id'];
        $sql2 = "UPDATE courses SET title ='" . $title . "' WHERE id='" . $courseId . "' ";
        $sql3 = "UPDATE courses SET brief ='" . $brief . "' WHERE id='" . $courseId . "' ";
        $sql4 = "UPDATE courses SET description ='" . $description . "' WHERE id='" . $courseId . "' ";
        $sql5 = "UPDATE courses SET duration ='" . $duration . "' WHERE id='" . $courseId . "' ";
        $sql6 = "UPDATE courses SET projects ='" . $projects . "' WHERE id='" . $courseId . "' ";
        $sql7 = "UPDATE courses SET price ='" . $price . "' WHERE id='" . $courseId . "' ";
        $sql8 = "UPDATE courses SET img ='" . $img . "' WHERE id='" . $courseId . "' ";
//    $sql1 = "UPDATE courses SET id ='".$courseID."' WHERE id='".$oldID."' ";

        if ($conn->query($sql2) === TRUE
            && $conn->query($sql3) === TRUE && $conn->query($sql4) === TRUE
            && $conn->query($sql5) === TRUE && $conn->query($sql6) === TRUE
            && $conn->query($sql7) === TRUE && $conn->query($sql8) === TRUE) {
            $_SESSION["alert"] = "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
  Course Record edited successfully.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
            move_uploaded_file($img_temp, $folder);
        } else {
            $_SESSION["alert"] = "<div class='alert alert-danger' role='alert'>
  Error editing Course Record. Please double-check the information you entered and try again.
</div>";
        }
        header("Location: edit-courses.php");
    }
}





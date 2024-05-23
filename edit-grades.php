<?php
require_once 'db.php';
global $conn;
session_start();
if(isset($_POST['submit'])) {
    $courseId = $_GET['courseId'];
    $userId = $_GET['userId'];
    $quiz1 = $_POST['quiz1'];
    $quiz2 = $_POST['quiz2'];
    $quiz3 = $_POST['quiz3'];
    $quiz4 = $_POST['quiz4'];
    $quiz5 = $_POST['quiz5'];
    $assignment1 = $_POST['assignment1'];
    $assignment2 = $_POST['assignment2'];
    $assignment3 = $_POST['assignment3'];
    $assignment4 = $_POST['assignment4'];
    $assignment5 = $_POST['assignment5'];

    $sql1 = "UPDATE quizzes SET quiz1 ='" . $quiz1 . "' WHERE CourseID='" . $courseId . "' AND UserID='" . $userId . "'";
    $sql2 = "UPDATE quizzes SET quiz2 ='" . $quiz2 . "' WHERE CourseID='" . $courseId . "' AND UserID='" . $userId . "'";
    $sql3 = "UPDATE quizzes SET quiz3 ='" . $quiz3 . "' WHERE CourseID='" . $courseId . "' AND UserID='" . $userId . "'";
    $sql4 = "UPDATE quizzes SET quiz4 ='" . $quiz4 . "' WHERE CourseID='" . $courseId . "' AND UserID='" . $userId . "'";
    $sql5 = "UPDATE quizzes SET quiz5 ='" . $quiz5 . "' WHERE CourseID='" . $courseId . "' AND UserID='" . $userId . "'";
    $sql6 = "UPDATE quizzes SET assignment1 ='" . $assignment1 . "' WHERE CourseID='" . $courseId . "' AND UserID='" . $userId . "'";
    $sql7 = "UPDATE quizzes SET assignment2 ='" . $assignment2 . "' WHERE CourseID='" . $courseId . "' AND UserID='" . $userId . "'";
    $sql8 = "UPDATE quizzes SET assignment3 ='" . $assignment3 . "' WHERE CourseID='" . $courseId . "' AND UserID='" . $userId . "'";
    $sql9 = "UPDATE quizzes SET assignment4 ='" . $assignment4 . "' WHERE CourseID='" . $courseId . "' AND UserID='" . $userId . "'";
    $sql10 = "UPDATE quizzes SET assignment5 ='" . $assignment5 . "' WHERE CourseID='" . $courseId . "' AND UserID='" . $userId . "'";

if ($conn->query($sql1) === TRUE
    && $conn->query($sql2) === TRUE && $conn->query($sql3) === TRUE
    && $conn->query($sql4) === TRUE && $conn->query($sql5) === TRUE
    && $conn->query($sql6) === TRUE && $conn->query($sql7) === TRUE
    && $conn->query($sql8) === TRUE && $conn->query($sql9) === TRUE
    && $conn->query($sql10) === TRUE) {
    $_SESSION["alert"] = "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
  User grades edited successfully.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
    } else {
    $_SESSION["alert"] = "<div class='alert alert-danger' role='alert'>
  Failed to edit user grades. Please refresh the page and try again.
</div>";
}
    header("Location:grades-table.php?userId=" . $userId);
}
?>

<?php
require_once 'db.php';
global $conn;
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/homepage.css">
    <title>Course Details</title>
</head>
<body>
<?php
include 'navbar.php';
if (isset($_POST['search'])) {
    $title = $_POST["search"];
    $sql = "SELECT id from courses WHERE title='" . $title . "' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo $row['id'];
        header("Location: Course-Details.php?id=".$row['id']);
    } else {
        echo "<div class='container my-2 d-flex justify-content-center'>
  <img src='Photos/search.png' alt='..'>
</div>
<div class='d-flex align-items-center flex-column'>
<h1 class='my-2 d-block' style='color: #1c1f4c;font-weight: bold;'>NOT FOUND</h1>
<h4 style='color: #1c1f4c;font-weight: bold;'>We cannot find the course you were searching for.</h4>
<h4 style='color: #1c1f4c;font-weight: bold;'>Maybe a little spelling mistake?</h4>
<h5 style='color: #1c1f4c;'>(Try typing the course's full name)</h5>
        </div>";
//        header("Location: Homepage.php");
    }
}
?>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

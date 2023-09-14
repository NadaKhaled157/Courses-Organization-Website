<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/homepage.css">
    <title>All Courses</title>
</head>
<body>
<?php
session_start();
if (isset($_SESSION["email"])) {
    if ($_SESSION["email"]=='admin')
        include 'admin-nav.php';
    else include 'logged-nav.php';
}else {
    include 'nav-bar.php';
}
?>
<h1 class="m-3">Enroll Now and kickstart your career!</h1>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="courses-db";

// Create Connection
$conn= new mysqli($servername, $username, $password,$dbname);
// Check Connection
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!--    <div class="container mt-3">-->
<!--        <div class="row">-->
<?php
$sql= "SELECT * FROM `courses-data`";
$result = mysqli_query($conn, $sql) or die("Query failed: " . mysqli_error($conn));
//            $result= $conn->query($sql);
echo "<div class='row mx-auto'>";
while ($row=$result->fetch_assoc()) {
    $_SESSION["title"] = $row["title"];
    $_SESSION["description"]= $row["description"];
    $_SESSION["course_id"] = $row["course_id"];
    echo "<div class='card d-inline-block my-2 col-sm-6' style='width: 18rem;'>
        <img src=../Photos/Courses/".$_SESSION["course_id"].".jpg class='card-img-top' alt=".$_SESSION['title'].">
        <div class='card-body'>
            <h5 class='card-title'>".$_SESSION["title"]."</h5>
            <p class='card-text'>".$_SESSION["description"]."</p>
            <div class='d-grid gap-2 d-md-flex justify-content-md-end'>
                <a href='course-data.php' class='course btn btn-vintage d-grid gap-2 d-md-flex justify-content-md-end'>Course Details</a>
<!--                <input type='submit' name='courseID' class='course btn btn-vintage d-grid gap-2 d-md-flex justify-content-md-end' value='Course Details'>-->
            </div>
        </div>
    </div>";
}
?>
<!--<div class="row mx-auto">-->
<!--    <div class="card d-inline-block mx-1 my-2 col-sm-6" style="width: 17.5rem;">-->
<!--        <img src="../Photos/Courses/autocad.jpg" class="card-img-top" alt="Robotics">-->
<!--        <div class="card-body">-->
<!--            <h5 class="card-title">AUTOCAD</h5>-->
<!--            <p class="card-text">Do you like tinkering with hardware parts? Check out our robotics workshop!-->
<!--                Includes a guided final project. </p>-->
<!--            <a href="#" class="btn btn-vintage">Enroll Now</a>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="card d-inline-block mx-1 my-2 col-sm-6" style="width: 17.5rem;">-->
<!--        <img src="../Photos/Courses/automotive.jpg" class="card-img-top" alt="Web Development">-->
<!--        <div class="card-body">-->
<!--            <h5 class="card-title">AUTOMOTIVE</h5>-->
<!--            <p class="card-text">Kickstart your web development career now! Learn HTML, CSS, Javascript with our finest instructors.</p>-->
<!--            <a href="#" class="btn btn-vintage">Enroll Now</a>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="card d-inline-block mx-1 my-2 col-sm-6" style="width: 17.5rem;">-->
<!--        <img src="../Photos/Courses/c-programming.jpg" class="card-img-top" alt="Web Development">-->
<!--        <div class="card-body">-->
<!--            <h5 class="card-title">C PROGRAMMING</h5>-->
<!--            <p class="card-text">Kickstart your web development career now! Learn HTML, CSS, Javascript with our finest instructors.</p>-->
<!--            <a href="#" class="btn btn-vintage">Enroll Now</a>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="card d-inline-block mx-1 my-2 col-sm-6" style="width: 17.5rem;">-->
<!--        <img src="../Photos/Courses/c++.jpg" class="card-img-top" alt="Web Development">-->
<!--        <div class="card-body">-->
<!--            <h5 class="card-title">C++</h5>-->
<!--            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
<!--            <a href="#" class="btn btn-vintage">Enroll Now</a>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="card d-inline-block mx-1 my-2 col-sm-6" style="width: 17.5rem;">-->
<!--        <img src="../Photos/Courses/c++&oop.jpg" class="card-img-top" alt="Web Development">-->
<!--        <div class="card-body">-->
<!--            <h5 class="card-title">C++ & OOP</h5>-->
<!--            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
<!--            <a href="#" class="btn btn-vintage">Enroll Now</a>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--<div class="row mx-auto">-->
<!--    <div class="card d-inline-block mx-1 my-2 col-sm-6" style="width: 17.5rem;">-->
<!--        <img src="../Photos/Courses/matlab.jpg" class="card-img-top" alt="Robotics">-->
<!--        <div class="card-body">-->
<!--            <h5 class="card-title">MATLAB</h5>-->
<!--            <p class="card-text">Do you like tinkering with hardware parts? Check out our robotics workshop!-->
<!--                Includes a guided final project. </p>-->
<!--            <a href="#" class="btn btn-vintage">Enroll Now</a>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="card d-inline-block mx-1 my-2 col-sm-6" style="width: 17.5rem;">-->
<!--        <img src="../Photos/Courses/photoshop.jpg" class="card-img-top" alt="Web Development">-->
<!--        <div class="card-body">-->
<!--            <h5 class="card-title">PHOTOSHOP</h5>-->
<!--            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
<!--            <a href="#" class="btn btn-vintage">Enroll Now</a>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="card d-inline-block mx-1 my-2 col-sm-6" style="width: 17.5rem;">-->
<!--        <img src="../Photos/Courses/python.jpg" class="card-img-top" alt="Web Development">-->
<!--        <div class="card-body">-->
<!--            <h5 class="card-title">PYTHON</h5>-->
<!--            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
<!--            <a href="#" class="btn btn-vintage">Enroll Now</a>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="card d-inline-block mx-1 my-2 col-sm-6" style="width: 17.5rem;">-->
<!--        <img src="../Photos/Courses/revit.jpg" class="card-img-top" alt="Robotics">-->
<!--        <div class="card-body">-->
<!--            <h5 class="card-title">REVIT</h5>-->
<!--            <p class="card-text">Do you like tinkering with hardware parts? Check out our robotics workshop!-->
<!--                Includes a guided final project. </p>-->
<!--            <a href="#" class="btn btn-vintage">Enroll Now</a>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="card d-inline-block mx-1 my-2 col-sm-6" style="width: 17.5rem;">-->
<!--        <img src="../Photos/Courses/robotics.jpg" class="card-img-top" alt="Web Development">-->
<!--        <div class="card-body">-->
<!--            <h5 class="card-title">ROBOTICS</h5>-->
<!--            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
<!--            <a href="#" class="btn btn-vintage">Enroll Now</a>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--<div class="row mx-auto">-->
<!--    <div class="card d-inline-block mx-1 my-2 col-sm-6" style="width: 17.5rem;">-->
<!--        <img src="../Photos/Courses/solidworks.jpg" class="card-img-top" alt="Web Development">-->
<!--        <div class="card-body">-->
<!--            <h5 class="card-title">SOLIDWORKS</h5>-->
<!--            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
<!--            <a href="#" class="btn btn-vintage">Enroll Now</a>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="card d-inline-block mx-1 my-2 col-sm-6" style="width: 17.5rem;">-->
<!--        <img src="../Photos/Courses/web-dev.jpg" class="card-img-top" alt="Web Development">-->
<!--        <div class="card-body">-->
<!--            <h5 class="card-title">WEB DEVELOPMENT</h5>-->
<!--            <p class="card-text">Kickstart your web development career now! Learn HTML, CSS, Javascript with our finest instructors.</p>-->
<!--            <a href="#" class="btn btn-vintage">Enroll Now</a>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
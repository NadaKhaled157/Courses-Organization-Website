<?php include 'db.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/homepage.css">
    <title>Home Page</title>
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
<div id="carousel" class="carousel" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active col-lg-3">
            <img id="carousel-image1" src="../Photos/carousel1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <h5>Become a Full Stack Developer</h5>
                <p>Enroll in our web development workshop now to learn HTML, CSS, and Javascript.</p>
            </div>
        </div>
        <div class="carousel-item col-lg-3">
            <img src="../Photos/carousel2.jpg" class="d-block w-100" alt="...">
            <div id="carousel-image2" class="carousel-caption d-md-block">
                <h5><a href="Signup.html">Signup Now</a></h5>
                <p>Get 10% off your first course when you sign up to our website.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<h1 class="m-3" style="color:#1c1f4c; font-family: 'Arial Black', Times,serif;">Browse Our Most Popular Courses!</h1>
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
    while ($row=$result->fetch_assoc()) {
        $_SESSION["title"] = $row["title"];
        $_SESSION["description"]= $row["description"];
        echo "<div class='card d-inline-block mx-auto my-2 col-sm-6' style='width: 18rem;'>
        <img src='../Photos/Courses/robotics.jpg' class='card-img-top' alt='Robotics'>
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

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/course-details.js"></script>
<!--<script async src='/browser-sync/browser-sync-client.2.29.3.js'></script>-->
</body>
</html>
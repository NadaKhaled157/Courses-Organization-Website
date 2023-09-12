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
if (isset($_SESSION["user"])) {
    include 'logged-nav.php';
} else {
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
<div class="row mx-auto">
    <div class="card d-inline-block mx-auto my-2 col-sm-6" style="width: 18rem;">
        <img src="../Photos/Courses/robotics.jpg" class="card-img-top" alt="Robotics">
        <div class="card-body">
            <h5 class="card-title">ROBOTICS</h5>
            <p class="card-text">Do you like tinkering with hardware parts? Check out our robotics workshop!
                Includes a guided final project. </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="Course-Details.php" class="btn btn-vintage d-grid gap-2 d-md-flex justify-content-md-end">Course Details</a>
            </div>
        </div>
    </div>
    <div class="card d-inline-block mx-auto my-2 col-sm-6" style="width: 18rem;">
        <img src="../Photos/Courses/web-dev.jpg" class="card-img-top" alt="Web Development">
        <div class="card-body">
            <h5 class="card-title">WEB DEVELOPMENT</h5>
            <p class="card-text">Kickstart your web development career now! Learn HTML, CSS, Javascript with our finest instructors.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="#" class="btn btn-vintage d-grid gap-2 d-md-flex justify-content-md-end">Course Details</a>
            </div>
        </div>
    </div>
    <div class="card d-inline-block mx-auto my-2 col-sm-6" style="width: 18rem;">
        <img src="../Photos/Courses/python.jpg" class="card-img-top" alt="Python">
        <div class="card-body">
            <h5 class="card-title">PYTHON</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="#" class="btn btn-vintage d-grid gap-2 d-md-flex justify-content-md-end">Course Details</a>
            </div>
        </div>
    </div>
    <div class="card d-inline-block mx-auto my-2 col-sm-6" style="width: 18rem;">
        <img src="../Photos/Courses/matlab.jpg" class="card-img-top" alt="Matlab">
        <div class="card-body">
            <h5 class="card-title">MATLAB</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="#" class="btn btn-vintage d-grid gap-2 d-md-flex justify-content-md-end">Course Details</a>
            </div>
        </div>
    </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
<!--<script src="js/course-details.js"></script>-->
<!--<script async src='/browser-sync/browser-sync-client.2.29.3.js'></script>-->
</body>
</html>
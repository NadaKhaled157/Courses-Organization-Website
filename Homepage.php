<?php require_once 'db.php'; global $conn;?>
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
//if (isset($_SESSION["email"])) {
//    if ($_SESSION["email"]=='admin')
//        include 'admin-nav.php';
//    else include 'logged-nav.php';
//}else {
//    include 'nav-bar.php';
//}
include "navbar.php";
if(isset($_SESSION["alert"])) {
    echo $_SESSION["alert"];
    unset($_SESSION["alert"]);
}
?>
<div id="carousel" class="carousel" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active col-lg-3">
            <img id="carousel-image1" src="Photos/carousel1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <h5><a href="Course-Details.php?id=WD">Become a Full Stack Developer</a></h5>
                <p>Enroll in our web development workshop now to learn HTML, CSS, and Javascript.</p>
            </div>
        </div>
        <div class="carousel-item col-lg-3">
            <img src="Photos/carousel2.jpg" class="d-block w-100" alt="...">
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
            <?php
            $sql= "SELECT * FROM courses WHERE id in ('RO','WD','CPP','ML')";
            $result = mysqli_query($conn, $sql) or die("Query failed: " . mysqli_error($conn));
//            $result= $conn->query($sql);
    while ($row=$result->fetch_assoc()) {
        echo "<div class='col-md-3'>
<div class='card my-2' style='width: 21rem; height: 35rem;'>
    <img src=Photos/Courses/" . $row['id'] . ".jpg class='card-img-top' alt='...'>
    <div class='card-body'>
      <h5 class='card-title'>".$row["title"]."</h5>
      <p class='card-text'>".$row["description"]."</p>
    </div>
    <div class='card-footer'>
      <a href='Course-Details.php?id=".$row['id']."' class='course btn btn-vintage d-block'>View Details</a>
    </div>
  </div>
  </div>";
    }
    ?>
    </div>


<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/course-details.js"></script>
<!--<script async src='/browser-sync/browser-sync-client.2.29.3.js'></script>-->
</body>
</html>
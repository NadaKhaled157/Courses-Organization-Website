<?php require_once 'db.php'; global $conn;?>
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
<h1 class="m-3" style="color:#1c1f4c; font-family: 'Arial Black', Times,serif;">Enroll Now and kickstart your career!</h1>

<!--    <div class="row mx-auto">-->
<!--        --><?php
//        $sql= "SELECT * FROM courses";
//        $result = mysqli_query($conn, $sql) or die("Query failed: " . mysqli_error($conn));
//        //            $result= $conn->query($sql);
//        while ($row=$result->fetch_assoc()) {
//            echo "<div class='card d-inline-block mx-1 my-2 col-sm-6' style='width: 15rem;'>
//        <img src=../Photos/Courses/".$row['id'].".jpg class='card-img-top' alt='Robotics'>
//        <div class='card-body'>
//            <h5 class='card-title'>".$row["title"]."</h5>
//            <p class='card-text'>".$row["description"]."</p>
//            <div class='d-grid gap-2 d-md-flex justify-content-md-end'>
//                <a href='Course-Details.php?id=".$row['id']."' class='course btn btn-vintage d-grid gap-2 d-md-flex'>Details</a>
//            </div>
//        </div>
//    </div>";
//        }
//        ?>
<!--    </div>-->

    <div class="row mx-auto">
<!--        <div class="card-deck d-flex flex-wrap">-->

    <?php
    $sql= "SELECT * FROM courses";
    $result = mysqli_query($conn, $sql) or die("Query failed: " . mysqli_error($conn));
    //            $result= $conn->query($sql);
    while ($row=$result->fetch_assoc()) {
        echo "<div class='col-md-3'>
<div class='card my-2 mx-1' style='width: 20rem; height: 35rem;'>
    <img src=../Photos/Courses/" . $row['id'] . ".jpg class='card-img-top' alt='...'>
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
        <div class="d-flex justify-content-center">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
            </div>
</div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
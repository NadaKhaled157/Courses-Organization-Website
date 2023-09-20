<?php require_once 'db.php'; global $conn;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/homepage.css">
    <title>Course Details</title>
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
global $userID;
$courseID=$_GET["id"];
$sql= "SELECT * FROM courses WHERE id='" . $courseID . "'";
$result = $conn->query($sql);
$course=$result->fetch_assoc();
?>


<!--<div class="" style="background-color: #faf1d7; height: 100vh;">-->
<div style="height: 200px; background-color: #1c1f4c;">
    <div class="d-lg-flex justify-content-end d-sm-none">
        <div class="card ms-auto my-3 col-sm-6 position-fixed" style="width: 20rem; margin-right: 100px;">
            <?php echo "<img src=../Photos/Courses/" .$course['id'].".jpg class='card-img-top' alt='Robotics'>";?>
            <div class="card-body">
                <h5 class="card-title"><?php echo $course['title']?></h5>
                <p class="card-text"><?php echo $course['description']?></p>
<!--                <p class="card-text">Course Overview:</p>-->
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">⏳ <?php echo $course['duration']?> Sessions</li>
                    <li class="list-group-item">💻 <?php echo $course['projects']?> Project Discussion(s)</li>
                    <li class="list-group-item">💰 <?php echo $course['price']?> EGP/session</li>
                </ul>
                <a class="btn btn-vintage d-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Enroll</a>
                <?php
                if (isset($_SESSION['email']))
                echo "<a href='save.php?user=". $_SESSION['email']."&course=".$course['id']."' type='button' class='btn btn-outline-sec d-block mt-2'>Save For Later</a>";
                else echo "<span class='d-block' tabindex='0' data-bs-toggle='popover' data-bs-trigger='hover focus' data-bs-content='Please login to save course.'>
<a href='#' type='button' class='btn btn-outline-sec d-block mt-2 disabled'>Save For Later</a>
</span>";?>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Enrollment Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to enroll in <?php echo $course['title']?> Course
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <?php echo "<a href='enroll.php?user=". $_SESSION['email']."&course=".$course['id']."' type='button' class='btn btn-vintage'>Enroll Now</a>";?>
                </div>
            </div>
        </div>
    </div>
    <h1 class="text mx-5 px-5 pt-3"><?php echo $course['title']?></h1>
    <div class="d-inline-block">
    <p class="text ms-5 ps-5 d-inline-block" style="width: 620px;"><?php echo $course['brief']?></p>
</div>
    <div class="rating px-5 mx-5">
        <button type="button" class="text" style="background: rgba(0,0,0,0);
        border-color:rgba(0,0,0,0);" data-bs-toggle="modal" data-bs-target="#reviewsWindow">
            <?php echo $course['rating']?>/5 ✩
        </button>
        <div class="modal fade" id="reviewsWindow" tabindex="-1" aria-labelledby="reviewsWindowLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="reviewsWindowLabel">Course Reviews</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php
                        $query= "SELECT * FROM reviews";
                        $result = $conn->query($query);
                        if($result->num_rows>0){
                            while($row=$result->fetch_assoc()){
                                $query2 = "SELECT firstname, lastname FROM users WHERE id='".$row['UserID']."' ";
                                $result2= $conn->query($query2);
                                $user=$result2->fetch_assoc();
                                $username= $user["firstname"] . " " . $user["lastname"];
                                echo "<h6 style='color:#1c1f4c;'>$username</h6>";
                                echo $row['review'];
                            }
                        } else echo "There are no reviews posted.";
                        ?>
<!--                        <h6 style="color:#1c1f4c;">Nada Khaled</h6>-->
<!--                        Great course! Highly recommend.-->
<!--                        <hr>-->
<!--                            <h6 style="color:#1c1f4c;">--><?php //echo $_SESSION['Name']?><!--</h6>-->
<!--                            This is some placeholder text.-->
<!--                        <hr>-->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-vintage" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

<div class="d-flex flex-wrap" style="width:800px;">
<div class="card ms-sm-3 ms-md-5 mt-4" style="width:20rem; background-color: #faf1d7" id="card1">
    <div class="card-body">
        <h5 class="card-title fw-bold" style="color:#1c1f4c;">What You Will Learn:</h5>
        <ul class="list-group list-group-flush" style="background-color: #faf1d7">
            <li class="list-group-item" style="background-color: #faf1d7; color:#1c1f4c;">Embedded Systems, IC, MPU & MCU Definitions</li>
            <li class="list-group-item" style="background-color: #faf1d7; color:#1c1f4c;">Configuring Hardware Components</li>
            <li class="list-group-item" style="background-color: #faf1d7; color:#1c1f4c;">Introduction to Machine Design</li>
        </ul>
    </div>
</div>
<div class="card ms-sm-3 ms-md-5 mt-4" style="width:20rem; background-color: #00848c" id="card2">
    <div class="card-body">
        <h5 class="card-title fw-bold text-white">Who Are The Instructors?</h5>
        <p class="text-white">Our instructors are engineers from the top universities in Egypt.</p>
    </div>
</div>
<div class="card ms-sm-3 ms-md-5 my-3" style="width:20rem; background-color: #00848c" id="card3">
    <div class="card-body">
        <h5 class="card-title fw-bold text-white">Bonus Features:</h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item text-white" style="background-color: #00848c">Craft a Professional CV</li>
            <li class="list-group-item text-white" style="background-color: #00848c">Build Your LinkedIn Profile</li>
            <li class="list-group-item text-white" style="background-color: #00848c">Improve Your Interview Skills</li>
        </ul>
    </div>
</div>
    <div class="card ms-sm-3 ms-md-5 my-3" style="width:20rem; background-color: #faf1d7" id="card4">
        <div class="card-body">
            <h5 class="card-title fw-bold" style="color:#1c1f4c">Leave a Review!</h5>
            <form action="review.php?user=<?php echo $userID?>&course=<?php echo $course['id']?>" method="post">
            <div class="rating"> ✩
                <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
                <input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
                <input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>
                <input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
                <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
            </div>
            <label>
                <textarea name="review" class="form-control" rows="3" cols="50"></textarea>
            </label>
            <?php
            if (isset($_SESSION["email"])){
                echo "<button type='submit' class='btn btn-vintage mt-2 d-inline active' style='margin-left:210px;'>Submit</button>";
            } else {

                echo "<span class='d-inline-block' tabindex='0' data-bs-toggle='popover' data-bs-trigger='hover focus' data-bs-content='Please login to leave a review.'>
  <button type='submit' class='btn btn-vintage mt-2 d-inline disabled' style='margin-left:210px;'>Submit</button>
</span>";
            }
            ?>
            </form>
        </div>
    </div>
</div>
<!--</div>-->
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/course-details.js"></script>
<!--<script src="js/reviews.js"></script>-->
</body>
</html>
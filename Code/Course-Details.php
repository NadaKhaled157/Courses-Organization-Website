<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet" href="css/popover.scss">
    <!-- Add icon library -->
<!--    <link rel="stylesheet" href="css/fontawesome.min.css">-->
    <title id="title">Course Title</title>
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
<!--<div class="" style="background-color: #faf1d7; height: 100vh;">-->
<div style="height: 200px; background-color: #1c1f4c;">
    <div class="d-lg-flex justify-content-end d-sm-none">
        <div class="card ms-auto my-3 col-sm-6 position-fixed" style="width: 20rem; margin-right: 100px;">
            <img src="../Photos/Courses/robotics.jpg" class="card-img-top" alt="Robotics">
            <div class="card-body">
                <h5 class="card-title">COURSE TITLE</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p class="card-text">Course Overview:</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">⏳ 12 Sessions</li>
                    <li class="list-group-item">💻 2 Project Discussions</li>
                    <li class="list-group-item">💰 40 EGP/session</li>
                </ul>
                <a href="#" class="btn btn-vintage d-block">Enroll Now</a>
            </div>
        </div>
    </div>
    <h1 class="text mx-5 px-5 pt-3">Course Name</h1>
    <div class="d-inline-block">
    <p class="text ms-5 ps-5 d-inline-block" style="width: 550px;">Brief Course Description. Maximum two sentences.</p>
</div>
    <div class="rating px-5 mx-5">
        <button type="button" class="text" style="background: rgba(0,0,0,0);
        border-color:rgba(0,0,0,0);" data-bs-toggle="modal" data-bs-target="#reviewsWindow">
            4.5
        </button>
        <div class="modal fade" id="reviewsWindow" tabindex="-1" aria-labelledby="reviewsWindowLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="reviewsWindowLabel">Course Reviews</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        This is some placeholder content to show a vertically centered modal.
                        We've added some extra copy here to show how vertically centering the modal works when combined with scrollable modals.
                        We also use some repeated line breaks to quickly extend the height of the content, thereby triggering the scrolling.
                        When content becomes longer than the prefedined max-height of modal, content will be cropped and scrollable within the modal.
                        Just like that.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-vintage" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-vintage">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
        <input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
        <input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>
        <input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
        <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
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
            <div class="rating">
                <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
                <input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
                <input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>
                <input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
                <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
            </div>

            <label>
                <textarea class="form-control" rows="3" cols="50"></textarea>
            </label>
            <?php
            if (isset($_SESSION["user"])){
                echo "<button type='submit' class='btn btn-vintage mt-2 d-inline active' style='margin-left:210px;'>Submit</button>";
            } else {
//                echo "<button type='submit' class='btn btn-vintage mt-2 d-inline disabled' style='margin-left:210px;'>Submit</button>";

                echo "<span class='d-inline-block' tabindex='0' data-bs-toggle='popover' data-bs-trigger='hover focus' data-bs-content='Please login to leave a review.'>
  <button type='submit' class='btn btn-vintage mt-2 d-inline disabled' style='margin-left:210px;'>Submit</button>
</span>";
            }
            ?>
        </div>
    </div>
</div>
<!--</div>-->
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/course-details.js"></script>
<!--<script src="js/reviews.js"></script>-->
</body>
</html>
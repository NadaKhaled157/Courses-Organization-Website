<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/homepage.css">
    <title>Add Course</title>
</head>
<body>
<?php
session_start();
include 'admin-nav.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "courses-db";

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php
//$query = "SELECT * FROM courses";
//$result = $conn->query($query);
if (isset($_SESSION["alert"])) {
    echo $_SESSION["alert"];
    unset($_SESSION["alert"]);
}?>
<div class="container mx-auto">

    <?php
    $courseID=null;
    $title=null;
    $brief=null;
    $description=null;
    $duration=null;
    $projects=null;
    $price=null;
    if($_GET['text']=='add'){
    echo "<h2 class='text-center mb-4 mt-2'>Add Course</h2>
<form action='addOrEdit-server.php?text=add' method='POST'>";
//        $courseID= "Please do not exceed 5 characters.";
//        $title= "Do not exceed 20 characters.";
//        $brief= "Please do not exceed 55 characters.";
//        $description= null;
//        $duration= "Please input the duration of your course.";
//        $projects= "Please input the number of projects in your course.";
//        $price= "Please input the price of your course.";
    } else if($_GET['text']=='edit'){
        echo "<h2 class='text-center mb-4 mt-2'>Edit Course</h2>
<h4 style='color:#d30000;'>Please re-enter data you do not wish to change.</h4>
<form action='addOrEdit-server.php?text=edit&id=" .$_GET['id']."' method='POST'>";
        $courseID= $_GET['id'];
        $title= $_GET["title"];
        $brief= $_GET["brief"];
        $description= $_GET["description"];
        $duration= $_GET["duration"];
        $projects= $_GET["projects"];
        $price= $_GET["price"];
    }

    ?>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"><strong>Course ID</strong> <i>(Do not exceed 5 characters.)</i></label>
        <input type="text" name="id" class="form-control" id="exampleFormControlInput1" placeholder="<?php echo $courseID?>">
        <h6 class="mt-1 ms-1" style='color:#d30000;'>Course ID cannot be changed.</h6>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"><strong>Course Title</strong> <i>(Do not exceed 20 characters.)</i></label>
        <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="<?php echo $title?>">
    </div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label"><strong>Course Brief</strong> <i>(Do not exceed 50 characters.)</i></label>
    <input type="text" name="brief" class="form-control" id="exampleFormControlInput1" placeholder="<?php echo $brief?>">
</div>
<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label"><strong>Course Description</strong> <i>(Do not exceed 150 characters.)</i></label>
    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $description?></textarea>
</div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"><strong>Duration</strong> <i>(Please enter the number of course sessions.)</i></label>
        <input type="text" name="duration" class="form-control" id="exampleFormControlInput1" placeholder="<?php echo $duration?>">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"><strong>Projects</strong> <i>(Please enter the number of project discussions.)</i></label>
        <input type="text" name="projects" class="form-control" id="exampleFormControlInput1" placeholder="<?php echo $projects?>">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"><strong>Price</strong> <i>(Please enter the price per
                session.)</i></label>
        <input type="text" name="price" class="form-control" id="exampleFormControlInput1" placeholder="<?php echo $price?>">
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label"><strong>Course Display Picture</strong></label>
        <input class="form-control" type="file" id="formFile">
    </div>
    <input type="submit" class="btn btn-vintage d-block mx-auto mb-3" style="width:100%;" value="Done">
    </form>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

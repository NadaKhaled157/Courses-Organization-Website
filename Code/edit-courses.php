<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/homepage.css">
    <title>Edit Courses</title>
</head>
<body>
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

$query= "SELECT * FROM courses";
$result= $conn->query($query);
session_start();
include 'admin-nav.php';
if(isset($_SESSION["alert"])) {
    echo $_SESSION["alert"];
    unset($_SESSION["alert"]);
}
?>
<div class="container mx-auto mt-3">
<table class="table table-bordered">
    <thead class="mx-auto">
    <tr>
        <th scope="col">Course ID</th>
        <th scope="col">Title</th>
        <th scope="col">Brief</th>
        <th scope="col" class="w-1">Description</th>
        <th scope="col">Rating</th>
        <th scope="col">Duration</th>
        <th scope="col">Projects</th>
        <th scope="col">Price</th>
        <th scope="col" class="mx-auto"><a href='addOrEdit-course.php?text=add' class='btn btn-outline-vintage d-block m-lg-2' style="font-size: 15px;">Add Course</a></th>
    </tr>
    </thead>
    <tbody>
    <tbody>
    <?php
    if ($result->num_rows>0){
        while ($course = $result->fetch_assoc()){
//            $_SESSION['courseID']= $course['id'];
//            $_SESSION['title']= $course['title'];
//            $_SESSION['brief']= $course['brief'];
//            $_SESSION['description']= $course['description'];
//            $_SESSION['duration']= $course['duration'];
//            $_SESSION['projects']= $course['projects'];
//            $_SESSION['price']= $course['price'];
            echo "
            <tr>
        <th scope='row''> ". $course['id'] ." </th>
        <td>".$course['title']."</td>
        <td>".$course['brief']."</td>
        <td>".$course['description']."</td>
        <td>".$course['rating']."</td>
        <td>".$course['duration']."</td>
        <td>".$course['projects']."</td>
        <td>".$course['price']."</td>
        <td><a href='addOrEdit-course.php?text=edit&id=".$course['id']."&title=".$course['title']."&brief=".$course['brief']."&description=".$course['description']."&duration=".$course['duration']."&projects=".$course['projects']."&price=".$course['price']."' class='btn btn-vintage d-block m-1 m-lg-2'>Edit</a><a href='delete.php?table=courses&id=".$course['id']."' class='btn btn-danger d-block m-1 m-lg-2'>Delete</a></td>
    </tr>
    ";
        }
    }
    ?>
    </tbody>
</table>
</div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>



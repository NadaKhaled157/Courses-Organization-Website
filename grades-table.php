<?php
require_once 'db.php';
global $conn;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/homepage.css">
    <title>Edit Grades</title>
</head>
<body>
<?php
session_start();
include 'navbar.php';
if(isset($_SESSION["alert"])) {
    echo $_SESSION["alert"];
    unset($_SESSION["alert"]);
}
$userId=$_GET['userId'];
$sql= "SELECT * FROM quizzes WHERE UserID='".$userId."'";
$result=$conn->query($sql);
?>
<div class='container mx-auto mt-3'>

    <?php
    if ($result->num_rows>0){
        while ($grades = $result->fetch_assoc()){
            echo "<form method='post' action='edit-grades.php?courseId=".$grades['CourseID']."&userId=".$userId."'>
<table class='table table-bordered'>
    <thead class='mx-auto'>
    <tr>
        <th scope='col'>User ID</th>
        <th scope='col'>Course ID</th>
        <th scope='col'>Quiz 1</th>
        <th scope='col'>Quiz 2</th>
        <th scope='col'>Quiz 3</th>
        <th scope='col'>Quiz 4</th>
        <th scope='col'>Quiz 5</th>
        <th scope='col'>Assignment 1</th>
        <th scope='col'>Assignment 2</th>
        <th scope='col'>Assignment 3</th>
        <th scope='col'>Assignment 4</th>
        <th scope='col'>Assignment 5</th>
    </tr>
    </thead>
    <tbody>
    <tbody>
            <tr>
        <th scope='row''> ". $grades['UserID'] ." </th>
        <td style='font-weight: bold;'><a id='course-name' type='button' class='btn btn-outline-danger d-block' style='border-color:rgba(0,0,0,0);' data-bs-toggle='modal' data-bs-target='#staticBackdrop'>".$grades['CourseID']."</a></td>
        <td><input style='width:50px; border-color:rgba(0,0,0,0);' type='text' name='quiz1' value='" .$grades['quiz1']."'></td>
        <td><input style='width:50px; border-color:rgba(0,0,0,0);' type='text' name='quiz2' value='" .$grades['quiz2']."'></td>
        <td><input style='width:50px; border-color:rgba(0,0,0,0);' type='text' name='quiz3' value='" .$grades['quiz3']."'></td>
        <td><input style='width:50px; border-color:rgba(0,0,0,0);' type='text' name='quiz4' value='" .$grades['quiz4']."'></td>
        <td><input style='width:50px; border-color:rgba(0,0,0,0);' type='text' name='quiz5' value='" .$grades['quiz5']."'></td>
        <td><input style='width:120px; border-color:rgba(0,0,0,0); text-transform: uppercase;' type='text' name='assignment1' value='".$grades['assignment1']."'></td>
        <td><input style='width:120px; border-color:rgba(0,0,0,0); text-transform: uppercase;' type='text' name='assignment2' value='".$grades['assignment2']."'></td>
        <td><input style='width:120px; border-color:rgba(0,0,0,0); text-transform: uppercase;' type='text' name='assignment3' value='".$grades['assignment3']."'></td>
        <td><input style='width:120px; border-color:rgba(0,0,0,0); text-transform: uppercase;' type='text' name='assignment4' value='".$grades['assignment4']."'></td>
        <td><input style='width:120px; border-color:rgba(0,0,0,0); text-transform: uppercase;' type='text' name='assignment5' value='".$grades['assignment5']."'></td>
    </tr>
    </tbody>
</table>
        <input type='submit' class='btn btn-vintage d-block mx-auto mb-3' name='submit' style='width:100%;' value='Done'>
    </form>";
            $query3="SELECT title from courses WHERE id='" . $grades['CourseID'] . "' ";
            $result3= mysqli_query($conn, $query3) or die("Query failed: " . mysqli_error($conn));
            $title= $result3->fetch_assoc();

            $query4="SELECT firstname, lastname from users WHERE id='" . $userId . "' ";
            $result4= mysqli_query($conn, $query4) or die("Query failed: " . mysqli_error($conn));
            $user= $result4->fetch_assoc();
            echo"<!-- Modal -->
    <div class='modal fade' id='staticBackdrop' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title' id='staticBackdropLabel'>Confirmation</h5>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            <div class='modal-body'>
                Are you sure you want to <strong>remove ".$title['title']." Course</strong> from <strong>".$user['firstname']." ".$user['lastname']."</strong>'s account? They can enroll again later, but they will
                            lose all their progress and grades. <p style='color:#d30000'>This action cannot be undone.</p>
            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancel</button>
                <a href='delete.php?table=enrollment&id=".$grades['CourseID']."&userId=".$userId."' type='button' class='btn btn-danger ms-auto my-2 d-block'>Yes, I am sure.</a>
            </div>
        </div>
    </div>
    </div>
    ";
        }
    }
    ?>
    <p style="color:#d30000; font-weight: bold;">Please Note: Click done after editing a course record before moving on to another one.</p>
</div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

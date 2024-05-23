<?php require_once 'db.php'; global $conn;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/homepage.css">
    <title>User Records</title>
</head>
<body>
<?php
session_start();
include 'navbar.php';
$query= "SELECT * FROM users";
$result= $conn->query($query);
if(isset($_SESSION["alert"])) {
    echo $_SESSION["alert"];
unset($_SESSION["alert"]);
}
?>
<div class="container mx-auto mt-3">
<table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">User ID</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">rd</th>
        <th scope="col">Courses ID</th>
        <th scope="col">Modify</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $enrolled=null;
    if ($result->num_rows>0) {
        while ($user = $result->fetch_assoc()) {
            $query2 = "SELECT courses.id
FROM enrollment
JOIN users ON Enrollment.UserID = users.id
JOIN courses ON Enrollment.CourseID = courses.id
WHERE users.id = '" . $user['id'] . "' ";
            $result2 = mysqli_query($conn, $query2) or die("Query failed: " . mysqli_error($conn));
            if ($result2->num_rows > 0) {
                while ($courses = $result2->fetch_assoc()) {
                    $enrolled.= $courses["id"] . "-";

                    $query3="SELECT title from courses WHERE id='" . $courses['id'] . "' ";
                    $result3= mysqli_query($conn, $query3) or die("Query failed: " . mysqli_error($conn));
                    $title= $result3->fetch_assoc();

//                    echo "<div class='modal fade' id='staticBackdrop' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
//                <div class='modal-dialog'>
//                    <div class='modal-content'>
//                        <div class='modal-header'>
//                            <h5 class='modal-title' id='staticBackdropLabel'>Confirmation</h5>
//                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
//                        </div>
//                        <div class='modal-body'>
//                            Are you sure you want to <strong>remove ".$title['title']." Course</strong> from <strong>".$user['firstname']." ".$user['lastname']."</strong>'s account? They can enroll again later, but they will
//                            lose all their progress and grades. <p style='color:#d30000'>This action cannot be undone.</p>
//                        </div>
//                        <div class='modal-footer'>
//                            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancel</button>
//                            <a href='delete.php?table=enrollment&id=".$courses['id']."&userId=".$user['id']."' type='button' class='btn btn-danger ms-auto my-2 d-block'>Yes, I am sure.</a>
//                        </div>
//                    </div>
//                </div>
//            </div>";

                }
            }
//            $query2="SELECT * FROM enrollment WHERE UserID='".$user['id']."' ";

            echo "
            <tr>
            <th scope='row'><a class='btn btn-outline-vintage' style='border-color:rgba(0,0,0,0);' href='grades-table.php?userId=".$user['id']."'>".$user['id']."</a></th>
        <td>" . $user['firstname'] . "</td>
        <td>" . $user['lastname'] . "</td>
        <td>" . $user['email'] . "</td>
        <td>" . $user['pass'] . "</td>";
            $split = explode('-', $enrolled);
            echo"<td>";
            for($i=0;$i<count($split);$i++) {
                if ($split[$i] != '') {
                    echo "
  <p id='course-name' class='d-inline' style='color:#00848c;'>$split[$i] - </p>";
                }
            }
            echo "</td>";
//            echo"<td><button class='btn btn-outline-vintage'>".$enrolled."</button></td>";
            $enrolled=null;
    ?>
<!--            <div class='modal fade' id='staticBackdrop' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>-->
<!--                <div class='modal-dialog'>-->
<!--                    <div class='modal-content'>-->
<!--                        <div class='modal-header'>-->
<!--                            <h5 class='modal-title' id='staticBackdropLabel'>Confirmation</h5>-->
<!--                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>-->
<!--                        </div>-->
<!--                        <div class='modal-body'>-->
<!--                            Are you sure you want to <strong>remove</strong> this course from this user's account? They can enroll again later, but they will-->
<!--                            lose all their progress and grades. <p style="color:#d30000">This action cannot be undone.</p>-->
<!--                        </div>-->
<!--                        <div class='modal-footer'>-->
<!--                            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancel</button>-->
<!--                            <a href='delete.php?table=enrollment&userId=--><?php //echo $user['id']?><!--$ID=--><?php //echo $courses["id"]?><!--' type='button' class='btn btn-danger ms-auto my-2 d-block'>Yes, I am sure.</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            
    <?php
                if($user['email']!='admin') {
                    echo "<td><a class='btn btn-vintage m-1 m-lg-2'>Edit</a><a href='delete.php?table=users&id=" . $user['id'] . "' class='btn btn-danger m-1 m-lg-2'>Delete</a></td>";
                } else {
                    echo "<td><a class='btn btn-vintage m-1 m-lg-2 d-block'>Edit</a>";
                }
        }
    }
    ?>

    </tbody>
</table>
    <p style="color:#d30000; font-weight: bold;">Please Note: To delete a user record, you must delete all the courses they are enrolled in from their account first.</p>
    <p style="color: #00848c;font-weight: bold;">You can edit a user's grades and the courses they are enrolled in by clicking on their User ID.</p>
</div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>



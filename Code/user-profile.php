<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile Information</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="css/sidebars.css" rel="stylesheet">
    <link rel="stylesheet" href="css/homepage.css">

</head>
<body>
<?php require_once 'db.php'; global $conn;?>
<?php
session_start();
include 'navbar.php';
$userID=$_SESSION['userID'];
?>
<!-----SYMBOLS----->
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="home" viewBox="0 0 16 16">
        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
    </symbol>
    <symbol id="people-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
    </symbol>
    <symbol id="grid" viewBox="0 0 16 16">
        <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
    </symbol>
    <symbol id="collection" viewBox="0 0 16 16">
        <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z"/>
    </symbol>
</svg>

<div class="m-0 p-0 d-flex" style="background: #1c1f4c;">
    <div>
<main class="p">
    <div class="b-example-divider" style="background:#1c1f4c;"></div>
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi me-2" width="16" height="16" style="color:#000;"><use xlink:href="#people-circle"/></svg>
            <span class="fs-4" style="color:#000;">Profile Information</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <?php
                if($_GET['tab']=="SC"){
                echo" <a href='user-profile.php?tab=SC' class='nav-link active' aria-current='page'>";
                } else echo" <a href='user-profile.php?tab=SC' class='nav-link link-dark' aria-current='page'>";
                ?>
                    <svg class='bi me-2' width='16' height='16'><use xlink:href='#collection'/></svg>
                    Saved Courses
                </a>
            </li>

                <?php
                if($_GET['tab']=="MC"){
                    echo" <a href='user-profile.php?tab=MC' class='nav-link active' aria-current='page'>";
                } else echo" <a href='user-profile.php?tab=MC' class='nav-link link-dark' aria-current='page'>";
                ?>
                    <svg class='bi me-2' width='16' height='16'><use xlink:href='#grid'/></svg>
                    My Courses
            </a>
<!--            </li>-->
            <li>
                <?php
                if($_GET['tab']=="AS"){
                    echo" <a href='user-profile.php?tab=AS' class='nav-link active' aria-current='page'>";
                } else echo" <a href='user-profile.php?tab=AS' class='nav-link link-dark' aria-current='page'>
 ";
                ?>
                    <svg class='bi me-2' width='16' height='16'><use xlink:href='#people-circle'/></svg>
                    Account Settings
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../Photos/Logo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong><?php echo $_SESSION['Name']; ?></strong>
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                <li><a class="dropdown-item" href="All-Courses.php">New Course...</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</main>
    </div>
    <div class='d-inline w-100 overflow-hidden'>
    <?php
    $tab= $_GET['tab'];
    if($tab=="MC") {
        echo "
        <h5 class='mt-3 mb-3 ms-4' style='color:#edebd9;'>View courses you are currently enrolled in and track your progress.</h5>";
        $sql = "SELECT * FROM enrollment WHERE UserID='".$_SESSION["userID"]."' ";
        $result = mysqli_query($conn, $sql) or die("Query failed: " . mysqli_error($conn));

        //            $result= $conn->query($sql);

    if($result->num_rows>0) {
        while ($row = $result->fetch_assoc()) {
            $sql2 = "SELECT * FROM courses WHERE id='" . $row['CourseID'] . "' ";
            $result2 = mysqli_query($conn, $sql2) or die("Query failed: " . mysqli_error($conn));
//            $i=1;
            $quizzes = "SELECT * FROM quizzes WHERE CourseID='".$row['id']."' AND UserID='".$userID."'";
            $result3 = mysqli_query($conn, $quizzes) or die("Query failed: " . mysqli_error($conn));
            $data=$result3->fetch_assoc();
            $progress=null;
            for($i=0;$i<4;$i++){
                if($data['quiz5']=='-'){
                    $progress=80;
                } else if($data['quiz4']=='-'){
                    $progress=60;
                } else if($data['quiz3']=='-'){
                    $progress=40;
                } else if($data['quiz2']=='-'){
                    $progress=20;
                } else if($data['quiz1']=='-'){
                    $progress=0;
                }
            }
            while($row = $result2->fetch_assoc()) {
                echo "<div class='accordion mx-md-5' id='accordionExample'>
        <div class='accordion-item my-2'>
            <h2 class='accordion-header'>
                <h4 class='mx-lg-2 my-lg-3' style='color:#1c1f4c; font-weight: bold;' aria-expanded='true'>
                    " . $row['title'] . "
                </h4>
            </h2>
            <div id='collapseOne' class='accordion-collapse collapse show' data-bs-parent='#accordionExample'>
                <div class='accordion-body'>
                    <strong>Progress</strong> <div class='progress my-2' role='progressbar' aria-label='Example with label' aria-valuenow='0' aria-valuemin='0' aria-valuemax='100' style='color:#00848c;'>
                  <div class='progress-bar' style='width: 10%'>0%</div>
                 </div>
                ";
//                $quizzes = "SELECT * FROM quizzes WHERE CourseID='".$row['id']."' AND UserID='".$userID."'";
//                $result3 = mysqli_query($conn, $quizzes) or die("Query failed: " . mysqli_error($conn));
                while ($quiz = $result3->fetch_assoc()){
                    echo "<table class='table table-bordered'>
  <thead>
    <tr>
      <th scope='col'>Assignment 1</th>
      <th scope='col'>Assignment 2</th>
      <th scope='col'>Assignment 3</th>
      <th scope='col'>Assignment 4</th>
      <th scope='col'>Assignment 5</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>".$quiz['assignment1']."</td>
      <td>".$quiz['assignment2']."</td>
      <td>".$quiz['assignment3']."</td>
      <td>".$quiz['assignment4']."</td>
      <td>".$quiz['assignment5']."</td>
    </tr>
  </tbody>
</table>";
                    echo "<table class='table table-bordered'>
  <thead>
    <tr>
      <th scope='col'>Quiz 1</th>
      <th scope='col'>Quiz 2</th>
      <th scope='col'>Quiz 3</th>
      <th scope='col'>Quiz 4</th>
      <th scope='col'>Quiz 5</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><i>".$quiz['quiz1']."</i></td>
      <td><i>".$quiz['quiz2']."</i></td>
      <td><i>".$quiz['quiz3']."</i></td>
      <td><i>".$quiz['quiz4']."</i></td>
      <td><i>".$quiz['quiz5']."</i></td>
    </tr>
  </tbody>
</table>";
                }
                echo"<div>
                <a class='btn btn-danger d-block' data-bs-toggle='modal' data-bs-target='#staticBackdrop'>Drop Course</a>
               
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class='modal fade' id='staticBackdrop' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title' id='staticBackdropLabel'>Confirmation</h5>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            <div class='modal-body'>
                Are you sure you want to <strong>drop</strong> Course? You can enroll again later, but you will
                lose all your progress and grades.
            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancel</button>
                <a href='delete.php?table=enrollment&id=".$row['id']."&userId=".$userID."' type='button' class='btn btn-danger ms-auto my-2 d-block'>Yes, I am sure.</a>
            </div>
        </div>
    </div>
    </div>";

            }
            $i++;
        }
    }

    } else if ($tab=="SC"){
        echo "<h4 class='mt-3 mb-3 ms-4' style='color:#edebd9;'>View Courses You Saved </h4>";
        echo"<div class=''>
  <div class='d-flex flex-row flex-nowrap mx-3 overflow-auto''>";
        $query= "SELECT CourseID from saved WHERE UserID='".$_SESSION['userID']."' ";
        $result = mysqli_query($conn, $query) or die("Query failed: " . mysqli_error($conn));
        if ($result->num_rows > 0) {
            while ($courses = $result->fetch_assoc()) {
                $query2 = "SELECT * from courses WHERE id='".$courses['CourseID']."' ";
                $result2 = mysqli_query($conn, $query2) or die("Query failed: " . mysqli_error($conn));
                while ($row=$result2->fetch_assoc()) {
                    echo "<div class='ms-2'>
<div class='card' style='width: 18rem; height: 34rem;'>
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
            }
        }
    }
    echo "</div></div>";
    ?>
    </div>
</div>
<script src="js/bootstrap.bundle.min.js"></script>
<!--<script src="test/sidebars.js"></script>-->
</body>
</html>


<?php
require_once "db.php";
global $conn;
global $userID;
session_start();
if(isset($_SESSION["alert"])) {
    echo $_SESSION["alert"];
    unset($_SESSION["alert"]);
}

if(isset($_POST['review'])) {
    $review = $_POST["review"];
    $rating= $_POST["rating"];
    $courseID= $_GET['course'];
    $userID= $_GET['user'];
    $sql = "INSERT INTO reviews (UserID, CourseID, review, rating) VALUES ($userID,'$courseID','$review',$rating)";

    if ($conn->query($sql)) {
        $sql2= "SELECT rating from reviews WHERE CourseID= '".$courseID."' ";
        $result2=$conn->query($sql2);
        if($result2->num_rows>0) {
            $count = 0;
            $ratings = 0;
            while ($row = $result2->fetch_assoc()) {
                $count += 1;
                $ratings += $row['rating'];
            }
            echo $count;
            echo"<br>";
            echo $ratings;
            echo "<br>";
            $finalRating = (float) ($ratings / $count);
            echo $finalRating;
            $sql3 = "UPDATE courses SET rating ='" . $finalRating . "' WHERE id='" . $courseID . "' ";

            if ($conn->query($sql2) && $conn->query($sql3)) {
                $_SESSION["alert"]= "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
  Review posted successfully. You can find it by clicking on the course rating.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
            } else {
                $sql4= "DELETE FROM reviews WHERE CourseID='".$courseID."' AND UserID='".$userID."'";
                $_SESSION["alert"]= "<div class='alert alert-danger' role='alert'>
  Error posting course review. Please refresh the page and try again.
</div>";
            }
        }
    } else {
        $_SESSION["alert"]= "<div class='alert alert-danger' role='alert'>
  Error posting course review. Please refresh the page and try again.
</div>";
    }
    header("Location: Course-Details.php?id=".$courseID."");
}

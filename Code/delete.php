<?php
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

include 'admin-nav.php';

session_start();
$userID= $_GET["id"];
$sql= "DELETE FROM users WHERE id= $userID";
if($conn->query($sql) === TRUE) {
//    $alert= "<div class='alert alert-primary' role='alert'>
//  User record deleted successfully.
//</div>";
//    echo "<div class='alert alert-primary' role='alert'>
//  User record deleted successfully.
//</div>";
    $_SESSION["alert"]= "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
  User record deleted successfully.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
} else {
    $_SESSION["alert"]= "<div class='alert alert-danger' role='alert'>
  Error deleting user record. Please refresh page and try again.
</div>";
}
header("Location: edit-users.php");



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
session_start();
$email=$_POST["email"];
$password=$_POST["pass"];
$error= "Incorrect Email or Password.";
$query = "SELECT email from users";
$result = mysqli_query($conn, $query) or die("Query failed: " . mysqli_error($conn));
if ($result->num_rows>0){
    while ($emails = $result->fetch_assoc()) {
        if ($emails["email"] == $email) {
            $query2 = "SELECT pass,id from users where email='$email'";
            $result2 = mysqli_query($conn, $query2) or die("Query failed: " . mysqli_error($conn));
            $userData = $result2->fetch_assoc();
//            echo $userData["pass"];
//            echo"<br>";
//            echo $userData["id"];
            if ($userData["pass"] == $password) {
                $_SESSION["email"] = $_POST["email"];
                $_SESSION["userID"]= $userData["id"];
                header("Location: Homepage.php");
            } else {
//                $error="Incorrect Password.";
                $_SESSION["error"] = $error;
                header("Location: Login.php");
            }
            break;
        } else {
//            $error="Incorrect Email.";
            $_SESSION["error"] = $error;
            header("Location: Login.php");
        }
    }
}
//$query = "SELECT firstname, lastname FROM users WHERE email='$email'";
//$result = mysqli_query($conn, $query) or die("Query failed: " . mysqli_error($conn));
//$user = $result->fetch_assoc();
//$_SESSION["firstname"] = $user["firstname"] . " " . $user["lastname"];
//if ($_POST["email"] == "nada@gmail.com" && $_POST["pass"]=="123" ||
//    $_POST["email"] == "sarabotros@gmail.com" && $_POST["pass"]=="1234") {
//    $_SESSION["email"] = $_POST["email"];
////    $_SESSION["user"]= $_POST["email"];
//    //echo("Hello,". $_POST["email"]);
//    header("Location: Homepage.php");
//}
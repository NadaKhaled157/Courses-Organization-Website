<?php
require_once 'db.php'; global $conn;
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
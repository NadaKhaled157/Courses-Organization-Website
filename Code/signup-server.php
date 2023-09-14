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
//echo "Connected Successfully." . "<br>";

$firstname= $_POST["firstname"];
$lastname= $_POST["lastname"];
$email= $_POST["email"];
//$number= $_POST["number"];
//$uni= $_POST["uni"];
//$faculty= $_POST["faculty"];
//$dep = $_POST["dep"];
//$gradYear= $_POST["gradYear"];
$pass= $_POST["pass"];

//$sql = "INSERT INTO users (firstName,lastName,email,phoneNumber,university,faculty,department,gradYear,pass) VALUES ('$firstName', '$lastName', '$email','$number','$uni','$faculty', '$dep', '$gradYear','$pass')";
$sql = "INSERT INTO users (firstname,lastname,email,pass) VALUES ('$firstname', '$lastname', '$email','$pass')";
if($conn->query($sql) === TRUE) {
    echo "New User Created Successfully";
} else {
    echo "ERROR: " . $sql . "<br>" . $conn->error;
}

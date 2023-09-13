<?php
session_start();
if ($_POST["email"] == "nada@gmail.com" && $_POST["pass"]=="123") {
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["user"]= $_POST["email"];
//    echo("Hello,". $_POST["user"]);
    header("Location: Homepage.php");
}
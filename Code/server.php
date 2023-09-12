<?php
session_start();
if ($_POST["user"] == "Nada Khaled" && $_POST["pass"]=="1234") {
    $_SESSION["user"] = $_POST["user"];
//    echo("Hello,". $_POST["user"]);
    header("Location: Homepage.php");
}

?>
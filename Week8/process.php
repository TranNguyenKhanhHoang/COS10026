<?php

session_start();

$username = $_POST["username"];
$password = $_POST["password"];
$token = $_POST["token"];

if ($username == "Hoang" && $password == "16042005") {

    $_SESSION["user"] = $username;
    $_SESSION["token"] = $token;

    header("Location: welcome.php");
    exit();

} else {

    $_SESSION["error"] = "Invalid username or password.";

    header("Location: login.php");
    exit();

}

?>
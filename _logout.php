<?php
include 'config.php';
session_start();
echo "Logging you out. Please wait...";
if(isset($_SESSION['username'])){
unset($_SESSION["loggedin"]);
unset($_SESSION["username"]);
unset($_SESSION["userId"]);

session_unset();
session_destroy();
}
if (isset($_COOKIE["user"]) AND isset($_COOKIE["pass"])){
    setcookie("user", '', time() - (3600));
    setcookie("pass", '', time() - (3600));
}
header("location: /MyFoodKart/home.html");
?>
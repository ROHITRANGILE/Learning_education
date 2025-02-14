<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "user_data";
$conn = mysqli_connect($host, $user, $password, $db);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    session_start();
    session_unset();
    session_destroy();
    header("location: admin_login.php");
}
?>
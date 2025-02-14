<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "user_data";
$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM register_user_data WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        function function_alert($message) {
            echo "<script>alert('$message');</script>";
        }
        function_alert("Login Successfully");
        echo "<script>location.href = '../index.php';</script>";
        
    }
    else {
       $sql = "SELECT * FROM login_user_data WHERE email = '$email' AND password = '$password'";
       $result = $conn->query($sql);
       if ($result->num_rows > 0) {
        function function_alert($message) {
            echo "<script>alert('$message');</script>";
        }
        function_alert("Login Successfully");
        echo "<script>location.href = '../admin_page/admin_page.php';</script>";
       }
       else {
        function function_alert($message) {
            echo "<script>alert('$message');</script>";
        }
        function_alert("Login Failed");
        echo "<script>location.href = 'login.php';</script>";
       }
    } 
    $conn->close();
}
?>
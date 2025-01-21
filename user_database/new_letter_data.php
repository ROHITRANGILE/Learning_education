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
    $sql = "insert into new_letter_data (email) values('$email')";
    $result = $conn->query($sql);
    if ($result === TRUE) {
        function function_alert($message) {
            echo "<script>alert('$message');</script>";
        }
        function_alert("Email send successfully");
        echo "<script>location.href = '../index.php';</script>";
    } else {
        function function_alert($message) {
            echo "<script>alert('$message');</script>";
        }
        function_alert("Email not send");
        echo "<script>location.href = '../index.php';</script>";
    }
    
    $conn->close();
}
?>
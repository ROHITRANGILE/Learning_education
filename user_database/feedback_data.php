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
    $f_name = $_POST['f_name'];
    $email = $_POST['email'];
    $additional = $_POST['additional'];
    
    $sql = "insert into feedback_data (f_name, email, additional) values('$f_name', '$email', '$additional')";
       $result = $conn->query($sql);
    if ($result === TRUE) {
        function function_alert($message) {
            echo "<script>alert('$message');</script>";
        }
        function_alert("Feedback send Successfully");
        echo "<script>location.href = '../index.php';</script>";
} else {
    function function_alert($message) {
        echo "<script>alert('$message');</script>";
    }
    function_alert("Feedback not send");
    echo "<script>location.href = '../index.php';</script>";
}
} 
?>
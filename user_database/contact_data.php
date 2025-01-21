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
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $addtional = $_POST['addtional'];
    
    $sql = "insert into contact_data (f_name, l_name, email, message, additional) values('$f_name', '$l_name', '$email', '$message', '$addtional')";
     $result = $conn->query($sql);
    if ($result === TRUE) {
        function function_alert($message) {
            echo "<script>alert('$message');</script>";
        }
        function_alert("Contact send Successfully");
        echo "<script>location.href = '../index.php';</script>";
} else {
    function function_alert($message) {
        echo "<script>alert('$message');</script>";
    }
    function_alert("Contact not send");
    echo "<script>location.href = '../index.php';</script>";
}
} 
?>
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
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM register_user_data WHERE email = '$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
           
        function function_alert($message) {
            echo "<script>alert('$message');</script>";
        }
        function_alert("Your email already exists");
        echo "<script>location.href = 'login.php';</script>";
        
    }
      
    $sql = "INSERT INTO register_user_data (`f_name`, `email`, `password`) VALUES ('$f_name', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        function function_alert($message) {
            echo "<script>alert('$message');</script>";
        }
        function_alert("Registered Successfully");
        echo "<script>location.href = '../index.php';</script>";
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    
    }
    $conn->close();
}
?>
<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = trim($_POST['fname']);
    $email = trim($_POST['email']);
    $usname = trim($_POST['usname']);  
    $pass = $_POST['pass'];
    $phone = trim($_POST['phone']);

    // Hash the password for security
    $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);  

    // Database connection details
    $servername = "localhost";
    $username = "root";  
    $password = ""; 
    $database = "Register";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare SQL query using prepared statements
    $sql = "INSERT INTO `SignUp` (fname, email, usname, pass, phone) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    
    // Bind parameters
    $stmt->bind_param("sssss", $fullname, $email, $usname, $hashed_pass, $phone);

    // Execute the statement
    if ($stmt->execute()) {
        // ✅ Redirect to homepage after successful signup
        header("Location: homepagetest.php");
        exit();  // Ensure no further execution after redirect
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}


?>

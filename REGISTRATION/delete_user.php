<?php
$conn = new mysqli("localhost", "root", "", "Register");

$email = $_GET['email']; // We're using email to identify the user

$sql = "DELETE FROM SignUp WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);

if ($stmt->execute()) {
    header("Location: users.php");
    exit();
} else {
    echo "❌ Deletion failed: " . $conn->error;
}
?>


<?php 


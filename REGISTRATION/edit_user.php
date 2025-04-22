<?php
$conn = new mysqli("localhost", "root", "", "Register");

$email = $_GET['email']; // Use email to find the user
$sql = "SELECT * FROM SignUp WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fname = $_POST['fname'];
    $usname = $_POST['usname'];
    $phone = $_POST['phone'];

    $update = $conn->prepare("UPDATE SignUp SET fname = ?, usname = ?, phone = ? WHERE email = ?");
    $update->bind_param("ssss", $fname, $usname, $phone, $email);
    if ($update->execute()) {
        echo "<p style='color:green;'>✅ Updated successfully.</p>";
        header("Location: users.php");
        exit();
    } else {
        echo "<p style='color:red;'>❌ Update error: " . $conn->error . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #1e3c72, #2a5298);
            color: #fff;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            font-size: 2.2rem;
            margin-bottom: 20px;
        }

        form {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            max-width: 500px;
            margin: 0 auto;
        }

        label {
            display: block;
            font-size: 1rem;
            margin-bottom: 8px;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            color: #333;
            background: #f9f9f9;
            transition: border 0.3s ease;
        }

        input[type="text"]:focus {
            border: 2px solid #4caf50;
            outline: none;
        }

        input[type="submit"] {
            background: #28a745;
            color: #fff;
            padding: 12px 25px;
            border: none;
            border-radius: 25px;
            font-weight: 500;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        input[type="submit"]:hover {
            background: #218838;
        }

        .back-link {
            display: inline-block;
            background: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: 500;
            text-decoration: none;
            text-align: center;
            margin-top: 20px;
            transition: background 0.3s ease;
        }

        .back-link:hover {
            background: #0056b3;
        }

        /* Responsive Styling */
        @media screen and (max-width: 768px) {
            form {
                padding: 20px;
                width: 90%;
            }

            h2 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>

    <h2>Edit User</h2>

    <form method="POST">
        <label for="fname">Full Name:</label>
        <input type="text" id="fname" name="fname" value="<?= htmlspecialchars($user['fname']) ?>" required>

        <label for="usname">Username:</label>
        <input type="text" id="usname" name="usname" value="<?= htmlspecialchars($user['usname']) ?>" required>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="<?= htmlspecialchars($user['phone']) ?>" required>

        <input type="submit" value="Update">
    </form>

    <a href="users.php" class="back-link">← Back to Users</a>

</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "Register";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM SignUp";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        .search-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .search-container input {
            padding: 10px;
            font-size: 1rem;
            border-radius: 15px;
            border: 2px solid #ddd;
            width: 50%;
            max-width: 300px;
        }

        .search-container button {
            background: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 15px;
            font-size: 1rem;
            cursor: pointer;
            margin-left: 10px;
            transition: background 0.3s ease;
        }

        .search-container button:hover {
            background: #45a049;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        td a {
            color: #28a745;
            text-decoration: none;
        }

        td a:hover {
            color: #218838;
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
    </style>
</head>
<body>

    <h2>Registered Users</h2>

    <!-- Search Input and Button -->
    <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search for users..." onkeyup="searchUsers()">
        <button onclick="searchUsers()">Search</button>
    </div>

    <!-- Table for Users -->
    <table id="usersTable">
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Username</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
        <?php while($row = $result->fetch_assoc()) { ?>
        <tr class="userRow">
            <td><?= $row['fname'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['usname'] ?></td>
            <td><?= $row['phone'] ?></td>
            <td>
                <a href="edit_user.php?email=<?= $row['email'] ?>">✏ Edit</a> | 
                <a href="delete_user.php?email=<?= $row['email'] ?>" onclick="return confirm('Are you sure?')">🗑 Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <!-- Add New User Link -->
    <a href="sign_up.php" class="back-link">➕ Add New User</a>

    <script>
        function searchUsers() {
            const input = document.getElementById("searchInput");
            const filter = input.value.toLowerCase();
            const table = document.getElementById("usersTable");
            const rows = table.getElementsByClassName("userRow");

            for (let i = 0; i < rows.length; i++) {
                let cells = rows[i].getElementsByTagName("td");
                let matchFound = false;

                for (let j = 0; j < cells.length - 1; j++) {  // Ignore the last column (Actions)
                    if (cells[j].textContent.toLowerCase().includes(filter)) {
                        matchFound = true;
                        break;
                    }
                }

                if (matchFound) {
                    rows[i].style.display = "";
                } else {
                    rows[i].style.display = "none";
                }
            }
        }
    </script>

</body>
</html>

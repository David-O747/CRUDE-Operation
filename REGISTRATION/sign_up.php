<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style5.css">  <!-- Link to external CSS -->
    <style>
        .error-message {
            color: red;
            font-size: 1.2vh;
        }
    </style>
</head>
<body>

<div class="signup-container">  <!-- Main container for form styling -->
    <h1>Sign Up</h1>

    <form id="signupForm" action="dbs_connect.php" method="POST">
        <label for="fname">Full Name:</label>
        <input type="text" id="fname" name="fname" required>
        <div id="fnameError" class="error-message"></div>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <div id="emailError" class="error-message"></div>

        <label for="usname">Username:</label>
        <input type="text" id="usname" name="usname" required>
        <div id="usnameError" class="error-message"></div>

        <label for="pass">Password:</label>
        <input type="password" id="pass" name="pass" required>
        <div id="passError" class="error-message"></div>

        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" required>
        <div id="phoneError" class="error-message"></div>

        <button type="submit" name="submit">Sign Up</button>
        <p>Already have an account? <a href="log in.php" class="signup-link">Log in</a></p>
    </form>
</div>

<div id="message"></div> <!-- Display success or error messages -->
</div>

<script src="script.js"></script> <!-- JavaScript for Fetch API -->

<script>
    // Regular expressions for validation
    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/; // Valid email
    const usernamePattern = /^[a-zA-Z0-9_]{3,20}$/; // Alphanumeric or underscore, 3 to 20 characters
    const passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/; // Minimum 8 characters, at least 1 letter and 1 number
    const phonePattern = /^\+?[0-9]{10,15}$/; // Phone number, optional "+" and 10-15 digits

    // Get the form element
    const form = document.getElementById('signupForm');

    // Function to validate form
    form.addEventListener('submit', function (event) {
        let valid = true;

        // Full Name validation (optional, you can add regex for more complex validation if needed)
        const fname = document.getElementById('fname');
        const fnameError = document.getElementById('fnameError');
        if (fname.value.trim() === "") {
            fnameError.textContent = "Full Name is required.";
            valid = false;
        } else {
            fnameError.textContent = "";
        }

        // Email validation
        const email = document.getElementById('email');
        const emailError = document.getElementById('emailError');
        if (!emailPattern.test(email.value)) {
            emailError.textContent = "Please enter a valid email address.";
            valid = false;
        } else {
            emailError.textContent = "";
        }

        // Username validation
        const usname = document.getElementById('usname');
        const usnameError = document.getElementById('usnameError');
        if (!usernamePattern.test(usname.value)) {
            usnameError.textContent = "Username must be alphanumeric and between 3 to 20 characters.";
            valid = false;
        } else {
            usnameError.textContent = "";
        }

        // Password validation
        const pass = document.getElementById('pass');
        const passError = document.getElementById('passError');
        if (!passwordPattern.test(pass.value)) {
            passError.textContent = "Password must be at least 8 characters long and include both letters and numbers.";
            valid = false;
        } else {
            passError.textContent = "";
        }

        // Phone Number validation
        const phone = document.getElementById('phone');
        const phoneError = document.getElementById('phoneError');
        if (!phonePattern.test(phone.value)) {
            phoneError.textContent = "Phone number must be 10 to 15 digits long, with an optional leading +.";
            valid = false;
        } else {
            phoneError.textContent = "";
        }

        // Prevent form submission if any validation fails
        if (!valid) {
            event.preventDefault(); // Prevent form from submitting
        }
    });
</script>

</body>
</html>

🗂️ Registration CRUD App
This project is a simple CRUD (Create, Read, Update, Delete) web application built using PHP, MySQL, HTML, CSS, and JavaScript. It allows users to register, view a list of registered entries, edit or delete existing records, and includes client-side form validation.

🚀 Features
✅ User registration form with validation

🔍 View all registered users in a table

✏️ Update existing records

🗑️ Delete users from the database

🧠 Connected to a MySQL database

📱 Responsive design using HTML/CSS

🔐 Basic input validation using JavaScript

🛠️ Technologies Used
PHP – Backend logic and database interaction

MySQL – Database to store user information

HTML/CSS – Structure and styling

JavaScript – Client-side form validation

📁 Folder Structure
bash
Copy
Edit
REGISTRATION/
├── config.php        # DB connection settings
├── index.php         # Main form + view
├── insert.php        # Handles form submission
├── delete.php        # Deletes a record
├── update.php        # Loads update form
├── edit.php          # Handles the update
├── style.css         # Styling for the form/UI
└── script.js         # JS for form validation
🧑‍💻 Getting Started
Clone this repository

bash
Copy
Edit
git clone https://github.com/David-O747/CRUDE-Operation.git
Import the SQL file into MySQL

Use a tool like phpMyAdmin or MySQL CLI to create a database and import the required tables.

Configure your database

Open config.php and update the DB credentials:

php
Copy
Edit
$conn = mysqli_connect("localhost", "root", "", "your_database_name");
Run the app

Start your local server (e.g. XAMPP, WAMP, MAMP).

Open your browser and go to:

bash
Copy
Edit
http://localhost/CRUDE-Operation/REGISTRATION/index.php
📸 Screenshots
Add screenshots here if you'd like (e.g. form view, table view)

🙋‍♂️ Author
David O.
GitHub Profile

📄 License
This project is open-source and available under the MIT License.


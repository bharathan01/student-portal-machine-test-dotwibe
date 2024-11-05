Demo images -https://github.com/bharathan01/student-portal-machine-test-dotwibe/tree/master/demo%20images

Student Portal
Overview
This project is a Student Portal application built using PHP. It follows the MVC (Model-View-Controller) architecture to separate concerns and ensure a modular structure.

Prerequisites
XAMPP (for running Apache and MySQL)
PHP (version compatible with your project)
MySQL (included with XAMPP)

Database Tables
The application requires two tables for user authentication and student details:

User Authentication Table
Columns: id, name, email, password
Student Details Table
Columns: id, name, email, gender, age, address, admission_id, location, status
Ensure these tables are created within your database with the appropriate columns.

Configuration
Update the database configuration file (usually located in the config directory) to set your database connection details:

php
Copy code
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');    
define('DB_NAME', 'student_portal');

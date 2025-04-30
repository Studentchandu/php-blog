<?php
// Database credentials (consider storing these securely in an environment file)
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "blog";

// Create a secure connection using MySQLi with error handling
$conn = new mysqli($host, $user, $pass, $dbname);

// Check for connection errors and handle them securely
if ($conn->connect_error) {
    // Log the error to a file instead of displaying it
    error_log("Connection failed: " . $conn->connect_error);
    die("Unable to connect to the database. Please try again later.");
}

// Optional: Set the character set for the connection to prevent encoding issues (important for security)
$conn->set_charset("utf8mb4");

// Enable prepared statements globally by default for any subsequent queries
?>

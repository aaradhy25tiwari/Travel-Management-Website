<?php
$servername = "localhost";  // Replace with your database server name (e.g., 'localhost' for local development)
$username = "root";         // Replace with your database username
$password = "";             // Replace with your database password
$dbname = "manzil";         // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

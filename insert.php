<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Change if you have a different username
$password = ""; // Change if you have a password set for MySQL
$database = "github_test"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$number = $_POST['number'];

// Prepare SQL statement to prevent SQL injection
$stmt = $conn->prepare("INSERT INTO users (name, number) VALUES (?, ?)");
$stmt->bind_param("ss", $name, $number);

// Execute and check if successful
if ($stmt->execute()) {
    echo "New record added successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();
?>

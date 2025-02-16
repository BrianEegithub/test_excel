<?php
$servername = "localhost";  // Change if needed
$username = "root";         // Default username in XAMPP/MAMP
$password = "";             // Default is empty in XAMPP
$dbname = "store_data";     // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $number = $_POST["number"];

    // Insert data into MySQL
    $sql = "INSERT INTO users (name, number) VALUES ('$name', '$number')";

    if ($conn->query($sql) === TRUE) {
        echo "Data stored successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>

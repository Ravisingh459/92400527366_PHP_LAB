<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Data to insert
$name = "Ravi";
$email = "ravi@example.com";

// SQL query
$sql = "INSERT INTO students (name, email)
        VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
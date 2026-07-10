<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

try {
    // Create PDO connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Set error mode
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Data to insert
    $name = "Ravi";
    $email = "ravi@example.com";

    // SQL query
    $sql = "INSERT INTO students (name, email)
            VALUES ('$name', '$email')";

    $conn->exec($sql);

    echo "Record inserted successfully";
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
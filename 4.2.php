<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

try {
    
    // Create PDO Connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Set Error Mode
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL Query to Create Table
    $sql = "CREATE TABLE students (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        email VARCHAR(100) NOT NULL,
        age INT
    )";

    // Execute Query
    $conn->exec($sql);

    echo "Table 'students' created successfully";

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;

?>
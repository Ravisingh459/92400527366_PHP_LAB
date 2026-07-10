<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",
                    $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE,
                        PDO::ERRMODE_EXCEPTION);

    $id = 1; // Record ID to delete

    $sql = "DELETE FROM students WHERE id=$id";

    $conn->exec($sql);

    echo "Record deleted successfully";
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "testdb";

// Create Connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check Connection
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

echo "Database Connected Successfully";

?>
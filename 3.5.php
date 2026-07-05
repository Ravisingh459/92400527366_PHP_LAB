<?php
session_start();

// Create Session Variables
$_SESSION["username"] = "Ravi";
$_SESSION["course"] = "BCA";

echo "<h2>Session Created Successfully</h2>";

echo "Username: " . $_SESSION["username"] . "<br>";
echo "Course: " . $_SESSION["course"];
?>
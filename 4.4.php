<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Prepare SQL Statement
    $stmt = $conn->prepare("INSERT INTO students (name, email) VALUES (?, ?)");

    // Bind Parameters
    $stmt->bind_param("ss", $name, $email);

    // Execute Statement
    if($stmt->execute())
    {
        echo "Record inserted successfully";
    }
    else
    {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Prepared Statement Example</title>
</head>
<body>

<h2>Student Registration Form</h2>

<form method="post">
    Name:
    <input type="text" name="name" required><br><br>

    Email:
    <input type="email" name="email" required><br><br>

    <input type="submit" name="submit" value="Save">
</form>

</body>
</html>
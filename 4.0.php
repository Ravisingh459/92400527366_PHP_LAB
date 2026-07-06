<?php
// Database Connection
$conn = mysqli_connect("localhost", "root", "", "studentdb");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['register'])) {

    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    // Insert Data into users table
    $sql = "INSERT INTO users (name, email, password)
            VALUES ('$name', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration Successful!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>

<h2>User Registration Form</h2>

<form method="post">
    Name:
    <input type="text" name="name" required><br><br>

    Email:
    <input type="email" name="email" required><br><br>

    Password:
    <input type="password" name="password" required><br><br>

    <input type="submit" name="register" value="Register">
</form>

</body>
</html>
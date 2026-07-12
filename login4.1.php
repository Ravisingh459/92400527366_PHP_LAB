<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>

<h2>User Login</h2>

<form method="post">
    Username:
    <input type="text" name="username" required><br><br>

    Password:
    <input type="password" name="password" required><br><br>

    <input type="submit" name="login" value="Login">
</form>

<?php
if(isset($_POST['login']))
{
    $conn = mysqli_connect("localhost", "root", "", "test");

    if(!$conn)
    {
        die("Connection Failed: " . mysqli_connect_error());
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users 
            WHERE username='$username' 
            AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)
    {
        header("Location: home.php");
        exit();
    }
    else
    {
        echo "<h3 style='color:red;'>Invalid Username or Password!</h3>";
    }

    mysqli_close($conn);
}
?>

</body>
</html>
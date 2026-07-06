<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>

<h2>Login Form</h2>

<form method="post" action="">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" name="login" value="Login">
</form>

<?php
session_start();

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Example Login Credentials
    if($username == "admin" && $password == "1234")
    {
        $_SESSION['user'] = $username;
        header("Location: home.php");
        exit();
    }
    else
    {
        echo "<p style='color:red;'>Invalid Username or Password!</p>";
    }
}
?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Remember Me Login Form</title>
</head>
<body>

<h2>Login Form</h2>

<?php
$username = "";
$password = "";

// Read cookies if available
if(isset($_COOKIE['username']) && isset($_COOKIE['password']))
{
    $username = $_COOKIE['username'];
    $password = $_COOKIE['password'];
}

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(isset($_POST['remember']))
    {
        // Store cookies for 30 days
        setcookie("username", $username, time() + (30 * 24 * 60 * 60), "/");
        setcookie("password", $password, time() + (30 * 24 * 60 * 60), "/");
    }
    else
    {
        // Delete cookies if Remember Me is not checked
        setcookie("username", "", time() - 3600, "/");
        setcookie("password", "", time() - 3600, "/");
    }

    echo "<h3>Login Successful!</h3>";
}
?>

<form method="post">
    Username:
    <input type="text" name="username" value="<?php echo $username; ?>">
    <br><br>

    Password:
    <input type="password" name="password" value="<?php echo $password; ?>">
    <br><br>

    <input type="checkbox" name="remember"> Remember Me
    <br><br>

    <input type="submit" name="login" value="Login">
</form>

</body>
</html>
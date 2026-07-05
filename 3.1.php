<!DOCTYPE html>
<html>
<head>
    <title>Create Cookie</title>
</head>
<body>

<h2>Create Cookie Using Form</h2>

<form method="post">
    Enter Your Name:
    <input type="text" name="username" required>
    <input type="submit" name="submit" value="Save Cookie">
</form>

<?php
if(isset($_POST['submit']))
{
    $username = $_POST['username'];

    // Create cookie for 1 hour
    setcookie("user", $username, time() + 3600);

    echo "<br>Cookie has been created successfully.";
    echo "<br>Refresh the page to see the cookie value.";
}

if(isset($_COOKIE['user']))
{
    echo "<br><br>Cookie Value: " . $_COOKIE['user'];
}
?>

</body>
</html>
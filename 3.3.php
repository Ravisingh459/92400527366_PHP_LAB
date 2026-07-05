<?php

if(isset($_POST['submit']))
{
    $name = $_POST['username'];

    // Create Cookie
    setcookie("username", $name, time()+3600);

    // Redirect to same page
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie with Header</title>
</head>
<body>

<h2>Create and Read Cookie Using Header</h2>

<form method="post">
    Enter Name:
    <input type="text" name="username" required>
    <input type="submit" name="submit" value="Save Cookie">
</form>

<?php
if(isset($_COOKIE['username']))
{
    echo "<br><b>Cookie Value:</b> ".$_COOKIE['username'];
}
?>

</body>
</html>
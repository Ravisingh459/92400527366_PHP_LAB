<!DOCTYPE html>
<html>
<head>
    <title>Cookie Example</title>
</head>
<body>

<?php
$cookie_name = "visitor";

// Check whether cookie exists or not
if(isset($_COOKIE[$cookie_name]))
{
    echo "<h2>Welcome Back!</h2>";
    echo "You are a repeated visitor.";
}
else
{
    // Create cookie for 30 days
    setcookie($cookie_name, "visited", time() + (30 * 24 * 60 * 60), "/");

    echo "<h2>Welcome!</h2>";
    echo "You are a new visitor.";
}
?>

</body>
</html>
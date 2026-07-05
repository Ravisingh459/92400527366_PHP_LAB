<?php

if(isset($_COOKIE['user']))
{
    echo "<h2>Reading Cookie</h2>";
    echo "Cookie Name: user <br>";
    echo "Cookie Value: " . $_COOKIE['user'];
}
else
{
    echo "Cookie does not exist.";
}

?>
<?php

if(isset($_COOKIE['username']))
{
    // Delete the cookie by setting expiry time in the past
    setcookie("username", "", time() - 3600);

    echo "Cookie Deleted Successfully.";
}
else
{
    echo "Cookie does not exist.";
}

?>
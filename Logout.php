<?php
session_start();

// Destroy Session
session_unset();
session_destroy();

// Redirect to Login Page
header("Location: login.php");
exit();
?>
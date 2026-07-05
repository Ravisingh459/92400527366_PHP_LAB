<?php
session_start();

// Destroy all session variables
session_unset();

// Destroy the session
session_destroy();

echo "Session Destroyed Successfully.";
?>
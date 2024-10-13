<?php
session_start(); // Start session
session_unset(); // Clear session data
session_destroy(); // Destroy session

header('Location: login.php?message=You have been logged out.');
exit;
?>

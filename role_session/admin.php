<?php
session_start();

if ($_SESSION['role'] !== 'admin') {
    echo "Access Denied!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Page</title>
</head>
<body>
    <h1>Welcome to the Admin Page</h1>
</body>
</html>

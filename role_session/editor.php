<?php
session_start();

if ($_SESSION['role'] !== 'editor') {
    echo "Access Denied!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editor Page</title>
</head>
<body>
    <h1>Welcome to the Editor Page</h1>
</body>
</html>

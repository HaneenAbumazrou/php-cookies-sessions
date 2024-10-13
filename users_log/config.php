<?php
// config.php

$host = 'localhost';
$dbname = 'mydb';
$username = 'root'; // Change this if you have a different username
$password = ''; // Change this if you have a password

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

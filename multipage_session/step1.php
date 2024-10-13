<?php
session_start(); // Start session to store user data

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Store user input in the session
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    header('Location: step2.php'); // Redirect to the next step
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Step 1: Basic Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container my-5">
    <h2 class="text-center">Step 1: Basic Information</h2>
    <form method="POST" class="mt-4">
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Next Step</button>
    </form>
</div>

</body>
</html>

<?php
session_start(); // Start session

// Define session timeout duration (5 minutes = 300 seconds)
$timeout_duration = 60; 

if (isset($_SESSION['last_activity'])) {
    $inactive_time = time() - $_SESSION['last_activity']; // Calculate inactive time

    if ($inactive_time > $timeout_duration) {
        // Destroy session and redirect to login if timeout exceeds
        session_unset();
        session_destroy();
        header('Location: login.php?message=Session expired. Please login again.');
        exit;
    }
}

// Update last activity time
$_SESSION['last_activity'] = time();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container my-5">
    <h2 class="text-center">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <p class="text-center">You are logged in. If you are inactive for 1 minutes, your session will expire.</p>
    <div class="text-center">
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
</div>

</body>
</html>

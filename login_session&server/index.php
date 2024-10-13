<?php
// Start the session
session_start();

// Check if visit time is already set in the session
if (!isset($_SESSION['visit_time'])) {
    // Set the visit time to the current time
    $_SESSION['visit_time'] = date("Y-m-d H:i:s");
}

// Retrieve the user's IP address
$user_ip = $_SERVER['REMOTE_ADDR'];

// HTML content to display visit time and IP address
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Activity Log</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>User Activity Log</h2>
        <p><strong>Visit Time:</strong> <?php echo $_SESSION['visit_time']; ?></p>
        <p><strong>User IP Address:</strong> <?php echo htmlspecialchars($user_ip); ?></p>
    </div>
</body>
</html>

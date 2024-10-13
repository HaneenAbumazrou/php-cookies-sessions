<?php
$cookie_name = "experiment_cookie";
$cookie_value = "This is a test cookie.";

// Set the cookie with a 1-minute expiration time (60 seconds)
setcookie($cookie_name, $cookie_value, time() + 60, "/");

// Check if the cookie is set
if (isset($_COOKIE[$cookie_name])) {
    $message = "Cookie is set! Value: " . $_COOKIE[$cookie_name];
} else {
    $message = "Cookie has expired or not set.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Expiry Experiment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<div class="container text-center">
    <h2>Cookie Expiry Experiment</h2>
    <p><?php echo $message; ?></p>
    <p><em>Refresh the page and wait for 1 minute to see what happens after expiration.</em></p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

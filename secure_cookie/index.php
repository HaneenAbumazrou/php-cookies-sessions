<?php
$cookie_name = "secure_favorite";
$cookie_value = "Chocolate";

// Set a secure, HTTP-only cookie
setcookie(
    $cookie_name, 
    $cookie_value, 
    [
        'expires' => time() + 86400,  // 1 day expiration
        'path' => '/',                // Available site-wide
        'domain' => '',               // Default domain (current)
        'secure' => true,             // Accessible only over HTTPS
        'httponly' => true            // Inaccessible via JavaScript
    ]
);

// Check if the cookie is set
$message = isset($_COOKIE[$cookie_name])
    ? "Secure cookie is set with value: " . $_COOKIE[$cookie_name]
    : "Secure cookie is not available.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Cookie Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Secure Cookie Demo</h2>
    <p class="lead"><?php echo $message; ?></p>
</div>

<script>
    // Attempt to access the cookie via JavaScript
    const cookieValue = document.cookie.includes('secure_favorite')
        ? 'Cookie is accessible via JavaScript!'
        : 'Cookie is NOT accessible via JavaScript.';
    console.log(cookieValue);
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
$cookie_name = "favorite_fruit";
$cookie_value = "Mango";

// Set the cookie with a 1-day expiration
setcookie($cookie_name, $cookie_value, time() + 86400, "/");

// Handle cookie deletion when the button is clicked
if (isset($_GET['delete'])) {
    // Delete the cookie by setting its expiration time in the past
    setcookie($cookie_name, "", time() - 3600, "/");
    header("Location: " . $_SERVER['PHP_SELF']); // Reload the page
    exit();
}

// Check if the cookie is set
$message = isset($_COOKIE[$cookie_name])
    ? "Your favorite fruit is: " . $_COOKIE[$cookie_name]
    : "The cookie has been deleted or does not exist.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Cookie Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f8ff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
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
    <h2>Favorite Fruit Cookie</h2>
    <p><?php echo $message; ?></p>
    <a href="?delete=true" class="btn btn-danger">Delete Cookie</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

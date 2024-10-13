<?php
$cookie_name = "greeting_message";

// Check if the cookie exists
$message = isset($_COOKIE[$cookie_name]) 
    ? $_COOKIE[$cookie_name] 
    : "Cookie not found. Please set it on Page 1.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2 - Retrieve Cookie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffe0b2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Page 2 - Retrieve Cookie</h2>
        <p class="lead"><?php echo $message; ?></p>
        <a href="page1.php" class="btn btn-secondary mt-3">Go Back to Page 1</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
$cookie_name = "greeting_message";
$cookie_value = "Hello from Page 1";

// Set a cookie that expires in 1 day
setcookie($cookie_name, $cookie_value, time() + 86400, "/");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1 - Set Cookie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e0f7fa;
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
        <h2>Page 1 - Set Cookie</h2>
        <p>The cookie has been set with the message: <strong><?php echo $cookie_value; ?></strong></p>
        <a href="page2.php" class="btn btn-primary mt-3">Go to Page 2</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

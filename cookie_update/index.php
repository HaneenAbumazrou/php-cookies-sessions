<?php
$cookie_name = "user_level";

// Set the initial value of the cookie if it is not already set
if (!isset($_COOKIE[$cookie_name])) {
    setcookie($cookie_name, "Beginner", time() + 86400, "/");
    $message = "Cookie set to initial value: Beginner";
} else {
    $message = "Current User Level: " . $_COOKIE[$cookie_name];
}

// Handle form submission to update the cookie value
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $new_value = $_POST['user_level'];
    setcookie($cookie_name, $new_value, time() + 86400, "/");  // Update cookie with new value
    $message = "User Level updated to: " . $new_value;
    header("Refresh:0");  // Refresh to display updated value
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Cookie Value</title>
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
    <h2>Update User Level Cookie</h2>
    <p class="lead"><?php echo $message; ?></p>
    <form method="POST">
        <div class="mb-3">
            <label for="user_level" class="form-label">Update User Level</label>
            <input type="text" name="user_level" id="user_level" class="form-control" placeholder="Enter new user level" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

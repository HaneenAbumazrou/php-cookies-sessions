<?php
session_start();  // Start the session

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];

    if (!empty($username)) {
        $_SESSION['flash_message'] = "Success! Welcome, $username.";
    } else {
        $_SESSION['flash_message'] = "Error! Username cannot be empty.";
    }

    // Redirect to avoid form resubmission
    header("Location: flash_message.php");
    exit;
}

// Display and clear the flash message
$flash_message = "";
if (isset($_SESSION['flash_message'])) {
    $flash_message = $_SESSION['flash_message'];
    unset($_SESSION['flash_message']);  // Clear the message after displaying
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flash Messages with Sessions</title>
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
            width: 400px;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center">Flash Message Demo</h2>

    <?php if (!empty($flash_message)): ?>
        <div class="alert alert-info">
            <?php echo $flash_message; ?>
        </div>
    <?php endif; ?>

    <form method="POST">
        <div class="mb-3">
            <label for="username" class="form-label">Enter Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Username">
        </div>
        <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

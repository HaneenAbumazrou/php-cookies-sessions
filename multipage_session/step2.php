<?php
session_start(); // Continue the session

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Store additional details in the session
    $_SESSION['address'] = $_POST['address'];
    $_SESSION['phone'] = $_POST['phone'];
    header('Location: final_step.php'); // Redirect to the final step
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Step 2: Additional Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container my-5">
    <h2 class="text-center">Step 2: Additional Details</h2>
    <form method="POST" class="mt-4">
        <div class="mb-3">
            <label for="address" class="form-label">Address:</label>
            <input type="text" name="address" id="address" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number:</label>
            <input type="text" name="phone" id="phone" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Next Step</button>
    </form>
</div>

</body>
</html>

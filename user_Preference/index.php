<?php
// Check if the form is submitted and store the selected color in a cookie
if (isset($_POST['color'])) {
    $selected_color = $_POST['color'];
    setcookie('background_color', $selected_color, time() + (86400 * 30), "/"); // Cookie lasts for 30 days
    header("Location: " . $_SERVER['PHP_SELF']); // Reload the page to apply the color
    exit();
}

// Check if the background color cookie is set
$background_color = isset($_COOKIE['background_color']) ? $_COOKIE['background_color'] : 'white';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Preference: Background Color</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: <?php echo htmlspecialchars($background_color); ?>;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

<div class="form-container">
    <h3 class="text-center">Select Your Preferred Background Color</h3>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="mb-3">
            <label for="color" class="form-label">Choose a color:</label>
            <select name="color" id="color" class="form-select" required>
                <option value="red" <?php if ($background_color == 'red') echo 'selected'; ?>>Red</option>
                <option value="blue" <?php if ($background_color == 'blue') echo 'selected'; ?>>Blue</option>
                <option value="green" <?php if ($background_color == 'green') echo 'selected'; ?>>Green</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary w-100">Save Preference</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

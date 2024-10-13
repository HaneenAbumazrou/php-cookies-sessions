<?php
session_start(); // Start the session

// Handle form submission to store preferences in session
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['theme'] = $_POST['theme'];
    $_SESSION['language'] = $_POST['language'];
    header('Location: preferences.php'); // Reload the page to apply changes
    exit;
}

// Set default preferences if not already set
if (!isset($_SESSION['theme'])) $_SESSION['theme'] = 'light';
if (!isset($_SESSION['language'])) $_SESSION['language'] = 'English';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Preferences</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body.light { background-color: #f8f9fa; color: #000; }
        body.dark { background-color: #343a40; color: #fff; }
    </style>
</head>
<body class="<?php echo $_SESSION['theme']; ?>">
<div class="container my-5">
    <h2 class="text-center">Set Your Preferences</h2>

    <form method="POST" class="mt-4">
        <div class="mb-3">
            <label for="theme" class="form-label">Select Theme:</label>
            <select name="theme" id="theme" class="form-select">
                <option value="light" <?php if ($_SESSION['theme'] == 'light') echo 'selected'; ?>>Light</option>
                <option value="dark" <?php if ($_SESSION['theme'] == 'dark') echo 'selected'; ?>>Dark</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="language" class="form-label">Select Language:</label>
            <select name="language" id="language" class="form-select">
                <option value="English" <?php if ($_SESSION['language'] == 'English') echo 'selected'; ?>>English</option>
                <option value="Arabic" <?php if ($_SESSION['language'] == 'Arabic') echo 'selected'; ?>>Arabic</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Save Preferences</button>
    </form>

    <div class="mt-4">
        <h3>Current Preferences:</h3>
        <p>Theme: <strong><?php echo ucfirst($_SESSION['theme']); ?></strong></p>
        <p>Language: <strong><?php echo $_SESSION['language']; ?></strong></p>
    </div>
</div>
</body>
</html>

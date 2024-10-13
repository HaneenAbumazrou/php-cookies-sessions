<?php
// Check if form is submitted and store preferences in cookies
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $language = $_POST['language'];
    $theme = $_POST['theme'];

    // Set cookies to expire in 30 days
    setcookie('language', $language, time() + (30 * 24 * 60 * 60));
    setcookie('theme', $theme, time() + (30 * 24 * 60 * 60));

    // Refresh the page to apply changes
    header("Location: index.php");
    exit();
}

// Retrieve cookies or set default values
$language = $_COOKIE['language'] ?? 'English';
$theme = $_COOKIE['theme'] ?? 'light';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Preferences</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="<?php echo $theme; ?>">

<div class="container mt-5">
    <h2>User Preferences</h2>

    <form method="POST" action="index.php">
        <div class="mb-3">
            <label for="language" class="form-label">Select Language</label>
            <select class="form-select" id="language" name="language">
                <option value="English" <?php echo $language == 'English' ? 'selected' : ''; ?>>English</option>
                <option value="Arabic" <?php echo $language == 'Arabic' ? 'selected' : ''; ?>>Arabic</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="theme" class="form-label">Select Theme</label>
            <select class="form-select" id="theme" name="theme">
                <option value="light" <?php echo $theme == 'light' ? 'selected' : ''; ?>>Light</option>
                <option value="dark" <?php echo $theme == 'dark' ? 'selected' : ''; ?>>Dark</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Save Preferences</button>
    </form>

    <p class="mt-3">Selected Language: <strong><?php echo $language; ?></strong></p>
    <p>Current Theme: <strong><?php echo ucfirst($theme); ?></strong></p>
</div>

</body>
</html>

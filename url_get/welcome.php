<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Welcome!</h2>
        <?php
        // Check if the first_name and last_name parameters are set in the URL
        if (isset($_GET['first_name']) && isset($_GET['last_name'])) {
            // Retrieve the first name and last name from the URL
            $firstName = htmlspecialchars($_GET['first_name']);
            $lastName = htmlspecialchars($_GET['last_name']);

            // Display the welcome message
            echo "<p>Hello, " . $firstName . " " . $lastName . "!</p>";
        } else {
            // If parameters are not set, show an error message
            echo "<p>Invalid submission!</p>";
        }
        ?>
    </div>
</body>
</html>

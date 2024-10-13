<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Using $_REQUEST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Contact Us</h2>
    <form action="contact.php" method="POST" class="mt-3">
        <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Your Message</label>
            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>

    <?php
    // Check if form data is available via $_REQUEST
    if (isset($_REQUEST['name']) && isset($_REQUEST['message'])) {
        $name = htmlspecialchars(trim($_REQUEST['name']));
        $message = htmlspecialchars(trim($_REQUEST['message']));

        echo "<div class='alert alert-success mt-4'>";
        echo "<h4>Thank you, $name!</h4>";
        echo "<p>Your message: <em>$message</em></p>";
        echo "</div>";
    }
    ?>
</div>
</body>
</html>

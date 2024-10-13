<?php
// Start the session
session_start();

// Check if the CSRF token exists in the session and the POST request
if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
    // Validate and process the form data
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Display a success message
    echo "<h2>Form Submitted Successfully!</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";

    // Invalidate the CSRF token after successful form submission
    unset($_SESSION['csrf_token']);
} else {
    // Display an error message if the CSRF token is invalid
    echo "<h2>Invalid Form Submission!</h2>";
}
?>

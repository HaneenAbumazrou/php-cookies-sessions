<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $firstname = htmlspecialchars(trim($_POST['firstname']));
    $lastname = htmlspecialchars(trim($_POST['lastname']));
    $email = htmlspecialchars(trim($_POST['email']));

    // Basic validation
    if (empty($firstname) || empty($lastname) || empty($email)) {
        echo "<div class='alert alert-danger'>All fields are required.</div>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<div class='alert alert-danger'>Invalid email format.</div>";
    } else {
        // Display the submitted data
        echo "<div class='container mt-5'>";
        echo "<h2>Submitted Data</h2>";
        echo "<ul class='list-group'>";
        echo "<li class='list-group-item'><strong>First Name:</strong> $firstname</li>";
        echo "<li class='list-group-item'><strong>Last Name:</strong> $lastname</li>";
        echo "<li class='list-group-item'><strong>Email:</strong> $email</li>";
        echo "</ul>";
        echo "</div>";
    }
} else {
    echo "<div class='alert alert-danger'>Invalid request method.</div>";
}
?>

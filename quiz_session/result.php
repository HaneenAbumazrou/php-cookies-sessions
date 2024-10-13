<?php
session_start(); // Start the session

// Retrieve the final score
$score = isset($_SESSION['score']) ? $_SESSION['score'] : 0;

// Clear the session after showing the result
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5 text-center">
    <h2>Your Score: <?php echo $score; ?> / 3</h2>
    <a href="quiz.php?q=1" class="btn btn-success mt-3">Try Again</a>
</div>
</body>
</html>

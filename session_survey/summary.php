<?php
session_start(); // Start the session

// Check if the survey answers are set in the session
if (!isset($_SESSION['survey_answers'])) {
    header("Location: survey.php"); // Redirect if no answers found
    exit;
}

// Retrieve the answers from the session
$answers = $_SESSION['survey_answers'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Summary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Survey Summary</h2>
    <ul class="list-group">
        <li class="list-group-item">
            <strong>1. Satisfaction:</strong> <?php echo htmlspecialchars($answers['question1']); ?>
        </li>
        <li class="list-group-item">
            <strong>2. Recommendation:</strong> <?php echo htmlspecialchars($answers['question2']); ?>
        </li>
        <li class="list-group-item">
            <strong>3. Comments:</strong> <?php echo htmlspecialchars($answers['question3']); ?>
        </li>
    </ul>
    <a href="survey.php" class="btn btn-secondary mt-3">Take Survey Again</a>
</div>
</body>
</html>

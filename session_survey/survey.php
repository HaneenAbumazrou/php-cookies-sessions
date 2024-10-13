<?php
session_start(); // Start the session

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Store the survey answers in the session
    $_SESSION['survey_answers'] = [
        'question1' => $_POST['question1'],
        'question2' => $_POST['question2'],
        'question3' => $_POST['question3']
    ];

    // Redirect to the summary page
    header("Location: summary.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Survey Form</h2>
    <form method="POST">
        <div class="mb-3">
            <label for="question1" class="form-label">1. How satisfied are you with our services?</label>
            <select class="form-select" id="question1" name="question1" required>
                <option value="">Select an option</option>
                <option value="Very Satisfied">Very Satisfied</option>
                <option value="Satisfied">Satisfied</option>
                <option value="Neutral">Neutral</option>
                <option value="Dissatisfied">Dissatisfied</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="question2" class="form-label">2. Would you recommend us to others?</label>
            <select class="form-select" id="question2" name="question2" required>
                <option value="">Select an option</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="question3" class="form-label">3. Any additional comments?</label>
            <textarea class="form-control" id="question3" name="question3" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>

<?php
session_start(); // Start the session

// Define quiz questions and answers
$questions = [
    1 => ["question" => "What is the capital of France?", "options" => ["A) London", "B) Paris", "C) Rome"], "answer" => "B"],
    2 => ["question" => "What is 5 + 3?", "options" => ["A) 7", "B) 8", "C) 9"], "answer" => "B"],
    3 => ["question" => "Which planet is known as the Red Planet?", "options" => ["A) Mars", "B) Venus", "C) Saturn"], "answer" => "A"]
];

// Initialize score if not set
if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
}

// Track current question number
$currentQuestion = isset($_GET['q']) ? $_GET['q'] : 1;

// Handle the user's answer
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selectedOption = $_POST['answer'];
    $correctAnswer = $questions[$currentQuestion - 1]['answer'];

    if ($selectedOption === $correctAnswer) {
        $_SESSION['score']++;
    }

    // Move to the next question or display result
    if ($currentQuestion < count($questions)) {
        header("Location: quiz.php?q=" . ($currentQuestion + 1));
    } else {
        header("Location: result.php");
    }
    exit;
}

// Display the current question
$question = $questions[$currentQuestion];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Question <?php echo $currentQuestion; ?></h2>
    <p><?php echo $question['question']; ?></p>
    <form method="POST">
        <?php foreach ($question['options'] as $option): ?>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="answer" value="<?php echo substr($option, 0, 1); ?>" required>
                <label class="form-check-label"><?php echo $option; ?></label>
            </div>
        <?php endforeach; ?>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>
</body>
</html>

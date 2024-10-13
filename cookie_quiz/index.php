<?php
$cookie_name = "quiz_score";

// Initialize the score to 0 if the cookie doesn't exist
$score = isset($_COOKIE[$cookie_name]) ? $_COOKIE[$cookie_name] : 0;
$message = "Your total score: $score";

// Handle form submission to calculate the new score
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correct_answers = ['q1' => 'b', 'q2' => 'a', 'q3' => 'c'];
    $new_score = 0;

    foreach ($correct_answers as $question => $answer) {
        if (isset($_POST[$question]) && $_POST[$question] === $answer) {
            $new_score++;
        }
    }

    // Update the score and store it in a cookie
    $score += $new_score;
    setcookie($cookie_name, $score, time() + 86400, "/");  // 1 day expiration
    $message = "You scored $new_score points. Total score: $score";

    // Refresh to show updated score
    header("Refresh:0");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz with Cookies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e8f5e9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center">Quiz</h2>
    <p class="lead"><?php echo $message; ?></p>
    <form method="POST">
        <div class="mb-3">
            <label>1. What is the capital of France?</label><br>
            <input type="radio" name="q1" value="a"> Berlin<br>
            <input type="radio" name="q1" value="b"> Paris<br>
            <input type="radio" name="q1" value="c"> Rome
        </div>

        <div class="mb-3">
            <label>2. What is 2 + 2?</label><br>
            <input type="radio" name="q2" value="a"> 4<br>
            <input type="radio" name="q2" value="b"> 5<br>
            <input type="radio" name="q2" value="c"> 6
        </div>

        <div class="mb-3">
            <label>3. What is the color of the sky on a clear day?</label><br>
            <input type="radio" name="q3" value="a"> Green<br>
            <input type="radio" name="q3" value="b"> Red<br>
            <input type="radio" name="q3" value="c"> Blue
        </div>

        <button type="submit" class="btn btn-success w-100">Submit Quiz</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

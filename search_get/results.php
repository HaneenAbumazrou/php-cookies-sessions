<?php
if (isset($_GET['query'])) {
    // Retrieve the search query from the URL
    $searchQuery = htmlspecialchars(trim($_GET['query']));

    if (!empty($searchQuery)) {
        echo "<div class='container mt-5'>";
        echo "<h2>Search Results for: <em>$searchQuery</em></h2>";
        echo "<p>You searched for: <strong>$searchQuery</strong></p>";
        // You can add more logic here to fetch actual results from a database
        echo "</div>";
    } else {
        echo "<div class='alert alert-warning mt-5'>Search query cannot be empty!</div>";
    }
} else {
    echo "<div class='alert alert-danger mt-5'>No search query found!</div>";
}
?>

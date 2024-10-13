<?php
// Set the name of the cookie
$cookie_name = "page_visit_counter";

// Check if the cookie exists
if (isset($_COOKIE[$cookie_name])) {
    // Increment the counter if the cookie exists
    $visit_count = $_COOKIE[$cookie_name] + 1;
} else {
    // Initialize the counter if the cookie does not exist
    $visit_count = 1;
}

// Set the cookie with the new counter value (expires in 1 day)
setcookie($cookie_name, $visit_count, time() + (86400), "/"); // 86400 seconds = 1 day

// Display the visit count
echo "<h2>You have visited this page $visit_count time(s).</h2>";
?>

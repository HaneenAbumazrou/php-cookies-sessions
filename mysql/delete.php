<?php
// delete.php

include('config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        // SQL query to delete the record
        $sql = "DELETE FROM users WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Record deleted successfully!";
        } else {
            echo "Error deleting record!";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Invalid Request!";
}

// Redirect back to the main page after deletion
header("Location: index2.php");
exit();
?>

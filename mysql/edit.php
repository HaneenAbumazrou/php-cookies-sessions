<?php
// edit.php

include('config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        // Fetch current record details
        $sql = "SELECT id, firstname, lastname, email FROM users WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // If record found, display it in a form
        if ($row) {
            ?>
            <form method="POST" action="edit.php">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                Firstname: <input type="text" name="firstname" value="<?php echo $row['firstname']; ?>"><br>
                Lastname: <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>"><br>
                Email: <input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
                <input type="submit" name="update" value="Update">
            </form>
            <?php
        } else {
            echo "No record found!";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

// Update the record in the database
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    try {
        $sql = "UPDATE users SET firstname = :firstname, lastname = :lastname, email = :email WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':firstname', $firstname, PDO::PARAM_STR);
        $stmt->bindParam(':lastname', $lastname, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        // Execute the update statement
        if ($stmt->execute()) {
            echo "Record updated successfully!";
        } else {
            echo "Error updating record!";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Redirect back to the main page after update
    header("Location: index2.php");
    exit();
}
?>

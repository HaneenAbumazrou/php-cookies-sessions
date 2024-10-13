<?php
include('config.php');

try {
    $sql = "SELECT id, firstname, lastname, email FROM users";
    $stmt = $conn->query($sql);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($result) > 0) {
        echo "<table border='1' cellpadding='10' cellspacing='0'>
        <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Action</th>
        </tr>";

        foreach ($result as $row) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['firstname'] . "</td>";
            echo "<td>" . $row['lastname'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td><a href='delete.php?id=" . $row['id'] . "'>Delete</a> | 
                  <a href='edit.php?id=" . $row['id'] . "'>Edit</a></td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No records found";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

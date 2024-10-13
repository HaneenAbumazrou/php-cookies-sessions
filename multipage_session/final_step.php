<?php
session_start(); // Access the session data

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Process the data (e.g., store it in a database)
    session_destroy(); // Clear the session after submission
    echo "<script>alert('Data submitted successfully!');</script>";
    header('Refresh: 1; url=step1.php'); // Redirect to Step 1
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Step: Review & Submit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container my-5">
    <h2 class="text-center">Review Your Information</h2>
    <table class="table table-bordered mt-4">
        <tr>
            <th>Name</th>
            <td><?php echo $_SESSION['name'] ?? 'N/A'; ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $_SESSION['email'] ?? 'N/A'; ?></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><?php echo $_SESSION['address'] ?? 'N/A'; ?></td>
        </tr>
        <tr>
            <th>Phone</th>
            <td><?php echo $_SESSION['phone'] ?? 'N/A'; ?></td>
        </tr>
    </table>

    <form method="POST">
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>

</body>
</html>

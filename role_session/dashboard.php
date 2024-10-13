<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php?message=Please login first.');
    exit;
}

$username = $_SESSION['username'];
$role = $_SESSION['role'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container my-5">
    <h2 class="text-center">Welcome, <?php echo htmlspecialchars($username); ?>!</h2>
    <p class="text-center">Your role is: <strong><?php echo htmlspecialchars($role); ?></strong></p>

    <div class="mt-4 text-center">
        <?php if ($role == 'admin') : ?>
            <a href="admin.php" class="btn btn-success">Admin Page</a>
        <?php endif; ?>
        <?php if ($role == 'editor') : ?>
            <a href="editor.php" class="btn btn-warning">Editor Page</a>
        <?php endif; ?>
        <a href="viewer.php" class="btn btn-info">Viewer Page</a>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
</div>
</body>
</html>

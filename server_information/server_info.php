<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Server and Environment Information</h2>
    <table class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
                <th>Information</th>
                <th>Details</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Server IP Address</td>
                <td><?php echo $_SERVER['SERVER_ADDR']; ?></td>
            </tr>
            <tr>
                <td>Current Script Name</td>
                <td><?php echo $_SERVER['PHP_SELF']; ?></td>
            </tr>
            <tr>
                <td>User Agent (Browser)</td>
                <td><?php echo $_SERVER['HTTP_USER_AGENT']; ?></td>
            </tr>
            <tr>
                <td>Request Method</td>
                <td><?php echo $_SERVER['REQUEST_METHOD']; ?></td>
            </tr>
            <tr>
                <td>Client's IP Address</td>
                <td><?php echo $_SERVER['REMOTE_ADDR']; ?></td>
            </tr>
        </tbody>
    </table>
</div>
</body>
</html>

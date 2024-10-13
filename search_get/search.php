<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Query Using PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Search Form</h2>
    <form action="results.php" method="GET" class="d-flex">
        <input type="text" class="form-control me-2" name="query" placeholder="Enter search query" required>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>
</body>
</html>

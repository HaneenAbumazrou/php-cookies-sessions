<?php
// Check if a file has been uploaded
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['uploadedFile'])) {
    $file = $_FILES['uploadedFile'];

    // Extract file details
    $fileName = $file['name'];
    $fileType = $file['type'];
    $fileSize = $file['size'];
    $fileTmpName = $file['tmp_name'];
    $fileError = $file['error'];

    // Define the upload directory
    $uploadDir = 'uploads/';

    // Check for upload errors
    if ($fileError === 0) {
        // Move the uploaded file to the uploads directory
        $destination = $uploadDir . basename($fileName);

        if (move_uploaded_file($fileTmpName, $destination)) {
            echo "<p>File uploaded successfully!</p>";
            echo "<p>File Name: <strong>$fileName</strong></p>";
            echo "<p>File Type: <strong>$fileType</strong></p>";
            echo "<p>File Size: <strong>" . ($fileSize / 1024) . " KB</strong></p>";
        } else {
            echo "<p>Failed to move the uploaded file.</p>";
        }
    } else {
        echo "<p>An error occurred during the file upload.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Upload a File</h2>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="fileInput" class="form-label">Choose a file</label>
                <input type="file" class="form-control" id="fileInput" name="uploadedFile" required>
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>
</body>
</html>

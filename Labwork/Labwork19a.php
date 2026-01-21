<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>

<body>
    <form method="post" enctype="multipart/form-data">
        <label for="fileUpload">Choose a file to upload:</label>
        <input type="file" id="fileUpload" name="fileUpload" required>
        <input type="submit" value="Upload File">
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['fileUpload'])) {
    $allowedTypes = ['image/png', 'image/jpeg', 'image/gif'];
    $maxSize = 2 * 1024 * 1024;
    $fileType = $_FILES['fileUpload']['type'];
    $fileSize = $_FILES['fileUpload']['size'];

    if (in_array($fileType, $allowedTypes) && $fileSize <= $maxSize) {
        $uploadDir = 'uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        $uploadFile = $uploadDir . basename($_FILES['fileUpload']['name']);

        if (move_uploaded_file($_FILES['fileUpload']['tmp_name'], $uploadFile)) {
            echo "File uploaded successfully: " . htmlspecialchars(basename($_FILES['fileUpload']['name']));
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "Invalid file type or size exceeds 2MB limit.";
    }
}
?>
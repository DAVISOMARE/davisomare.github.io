<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['image'])) {
    $image = $_FILES['image']['name'];
    $target_dir = "images/";
    $target_file = $target_dir . basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
        // Code to save image info to database can be added here

        echo "<h2>Image Uploaded Successfully</h2>";
    } else {
        echo "<h2>Image Upload Failed</h2>";
    }
} else {
    echo "Invalid request method.";
}
?>
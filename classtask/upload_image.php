<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}
?>

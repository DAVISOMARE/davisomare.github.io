<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
    <style>
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 10px;
        }
        .gallery img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <h2>Gallery</h2>
    <div class="gallery">
        <?php
        $dir = "uploads/";
        $images = glob($dir . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);
        foreach ($images as $image) {
            echo "<img src='$image' alt=''>";
        }
        ?>
    </div>
</body>
</html>

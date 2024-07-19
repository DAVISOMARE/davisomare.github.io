<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Testimonials</title>
</head>
<body>
    <h2>Testimonials</h2>
    <?php
    $filename = 'testimonials.txt';
    if (file_exists($filename)) {
        $testimonials = file_get_contents($filename);
        echo nl2br($testimonials);
    } else {
        echo "No testimonials available.";
    }
    ?>
</body>
</html>
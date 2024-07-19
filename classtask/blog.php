<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
</head>
<body>
    <h2>Blog Posts</h2>
    <?php
    $filename = 'blog_posts.txt';
    if (file_exists($filename)) {
        $posts = file_get_contents($filename);
        echo nl2br($posts);
    } else {
        echo "No blog posts available.";
    }
    ?>
</body>
</html>

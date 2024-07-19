<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = htmlspecialchars(trim($_POST['title']));
    $content = htmlspecialchars(trim($_POST['content']));

    if (empty($title) || empty($content)) {
        echo "All fields are required.";
        exit;
    }

    $filename = 'blog_posts.txt';
    $post = "Title: {$title}\nContent: {$content}\n\n";
    file_put_contents($filename, $post, FILE_APPEND);

    echo "Your post has been submitted.";
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $testimonial = htmlspecialchars(trim($_POST['testimonial']));

    if (empty($name) || empty($testimonial)) {
        echo "All fields are required.";
        exit;
    }

    $filename = 'testimonials.txt';
    $entry = "Name: {$name}\nTestimonial: {$testimonial}\n\n";
    file_put_contents($filename, $entry, FILE_APPEND);

    echo "Thank you for your testimonial.";
}
?>

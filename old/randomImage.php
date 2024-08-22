<?php
// Define the directory where images are stored
$dir = 'images/Galerie/';

// Get all image files from the directory
$images = glob($dir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

// Check if there are any images in the directory
if ($images) {
    // Select a random image
    $randomImage = $images[array_rand($images)];

    // Output the random image path
    echo $randomImage;
} else {
    echo 'images/default.jpg'; // Default image if no images are found
}
?>

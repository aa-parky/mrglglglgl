<?php
// Path to the text file
$file_path = '../data/goblin_pic_say.txt';

// Check if file exists
if (file_exists($file_path)) {
    $lines = file($file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);  // Read file lines into an array
    echo $lines[array_rand($lines)];  // Output a random line
} else {
    echo "Error: File not found.";
}
?>

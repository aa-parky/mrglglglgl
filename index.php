<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Prevent caching -->
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

    <title>Mrglglglgl.com Coming Soon!</title>

   <!-- Importing the Google Font -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
   <!-- My stylesheet -->
   <link rel="stylesheet" href="css/landing.css">
</head>

<body>
    <div class="image-container">
        <blockquote class="electric bubble">Mrglglglgl<br> Lumps!</blockquote>
        <blockquote class="speech bubble">Sheep?</blockquote>
        
        <img src="img/landing00.png" alt="Centered Image">
    </div>
    
    <div class="slug-line">
        <?php
        $lines = file('data/slug_lines.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        if ($lines && count($lines) > 0) {
            echo '' . $lines[array_rand($lines)] . '';
        } else {
            echo '"Where Epic Fails Meet Murloc Wails!"';  // default text in case the file is empty or there's an error reading it
        }
        ?>
    </div>

</body>
</html>

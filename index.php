<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Prevent caching -->
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

    <title>Mrglglglgl.com Read it before you are in it!</title>

   <!-- Importing the Google Font -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://use.typekit.net/tkq4iko.css">
   <!-- My stylesheet -->
   <link rel="stylesheet" href="css/landing.css">
</head>

<body>
    
    <!-- Hero Image -->
    <div class="image-container">
        
        <!-- Bubbles -->
        <?php include 'scripts/parse_master_alliance.php'; ?>
        <div class="electric electric-bottom-left">
            <?php echo $greeting; ?>!
        </div>
        
        <div class="speech speech-bottom-right">
            <?php echo $lastWords; ?> 
        </div>
        
        <img src="img/landing00.png" alt="The Mr. Mrglglglgl">
    
    </div>
    
    <!-- Slug-Line -->
    <?php include 'scripts/slug-line.php'; ?>
    <div class="slug-line">
        <?php echo generateSlugLine(); ?>
    </div>
    
</body>

</html>
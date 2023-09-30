<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Meta tags to prevent browser caching -->
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

    <!-- Title for the webpage -->
    <title>Mrglglglgl.com Read it before you are in it!</title>
    
    <!-- Importing html2canvas library to capture page content as images -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>

    <!-- Scripts to handle the "save" and "refresh" button functionalities -->
    <script src="scripts/save-button.js"></script>
    <script src="scripts/refresh-button.js"></script>

    <!-- Importing Google Fonts and another external stylesheet -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <!-- Adobe fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/tkq4iko.css">

    <!-- Link to the site's main stylesheet -->
    <link rel="stylesheet" href="css/test.css">
</head>

<body>
    
    <!-- Container for the main image content -->
    <div class="image-container" id="captureContent">

        <!-- Main headline for the webpage -->
        <div class="headline">
            Suddenly...
        </div>

        <!-- Sub-headline generated using a PHP script -->
        <?php include 'scripts/sub-headline.php'; ?>
        <div class="sub-headline">
        <?php echo generateSubHeadline(); ?>
        </div>

        <!-- Speech bubbles with content fetched using a PHP script -->
        <?php include 'scripts/parse_master_alliance.php'; ?>
        <div class="electric electric-bottom-left">
            <?php echo $greeting; ?>!
        </div>
        
        <div class="speech speech-bottom-right">
            <?php echo $lastWords; ?> 
        </div>
        
        <!-- Main hero image for the site -->
        <img src="img/landing00.png" alt="The Mr. Mrglglglgl">

        <!-- Slug-line generated using a PHP script -->
        <?php include 'scripts/slug-line.php'; ?>
        <div class="slug-line">
        <?php echo generateSlugLine(); ?>
        </div>

    </div>

    <!-- Container for the "save" and "refresh" buttons -->
    <div class="button-container">
        <button id="saveAsPngButton" class="save-button">Save as PNG</button>
        <button id="refreshButton" onclick="refreshPage()">Refresh</button>
    </div>

</body>
</html>

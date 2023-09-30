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
    <link rel="stylesheet" href="https://use.typekit.net/tkq4iko.css">
    <!-- Link to the site's main stylesheet -->
    <link rel="stylesheet" href="css/test.css">
</head>

<body>

<div class="parent">

<div class="div1"> 
    <!-- Main headline for the webpage -->
    <div class="headline ccmeanwhile">
        Suddenly...
    </div>
</div>

<div class="div2"> 
    <!-- Sub-headline generated using a PHP script -->
    <?php include 'scripts/sub-headline.php'; ?>
        <div class="sub-headline ccmeanwhile">
            <?php echo generateSubHeadline(); ?>
        </div>
</div>

<div class="div3"> 
    <!-- Speech bubbles with content fetched using a PHP script -->
    <?php include 'scripts/parse_master_alliance.php'; ?>
        <div class="player-name mmrbb">
            <?php echo $greeting; ?>!
        </div>
</div>

<!-- Hero Image-->
<div class="div4"> 
    <div class="hero">
        <img src="img/m01.png" alt="MrGlglglgl" />
    </div>
</div>

<div class="div5"> 
    <div class="last-words mmrbb">
        <?php echo $lastWords; ?> 
    </div>
</div>

<div class="div6"> 
    <!-- Slug-line generated using a PHP script -->
    <?php include 'scripts/slug-line.php'; ?>
        <div class="slug-line ccmeanwhile">
            <?php echo generateSlugLine(); ?>
        </div>
</div>

<div class="div7"> </div>
<div class="div8"> </div>
<div class="div9"> </div>

<div class="div10">Mrglglglgl by aa.parky | &copy; Copyright aa.parky | Contact | <a href="https://github.com/aa-parky/wow_addons">Github</a></div>
</div>

</body>
</html>

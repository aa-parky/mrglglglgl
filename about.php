<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Title for the webpage -->
	<title>Mrmglglglgl Read it Before you are in it</title>

	<!-- favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">

	<!-- Importing html2canvas library to capture page content as comic -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
	<!-- Speech bubbles with content fetched using a PHP script -->
	<?php include 'scripts/parse_collected_entries.php'; ?>
	<!-- Slug-line generated using a PHP script -->
	<?php include 'scripts/slug-line.php'; ?>
	<!-- Date & Time -->
	<?php include 'scripts/utc.php'; ?>
	<!-- Sub-headline generated using a PHP script -->
	<?php include 'scripts/top-caption.php'; ?>
	<!-- Sub-headline generated using a PHP script -->
	<?php include 'scripts/bottom-caption.php'; ?>
	<!-- Sub-headline generated using a PHP script -->
	<?php include 'scripts/murlocs-charge.php'; ?>
	<!-- Auction Items -->
	<?php include 'scripts/btc.php'; ?>
	<!-- Ticker script -->
	<?php include 'scripts/ticker.php'; ?>
	<!-- Death Tally script -->
	<?php include 'scripts/death-tally.php' ?>

	<!-- Adobe fonts -->
	<link rel="stylesheet" href="https://use.typekit.net/tkq4iko.css">
	<!-- Link to the site's stylesheets -->
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/ticker.css">
	<link rel="stylesheet" href="css/about.css">
	<link rel="stylesheet" href="css/global.css">
	<link rel="stylesheet" href="css/responsive.css">

	<!-- Speech bubbles font scaling script-->
	<script type="text/javascript" src="scripts/speech-bubble.js"></script>
	<!-- Ticker scrolling script-->
	<script type="text/javascript" src="scripts/news_ticker.js"></script>
	<!-- Ticker simulate typewriter effect script-->
	<script type="text/javascript" src="scripts/typewriter_text.js"></script>

</head>

<body>

	<div class="container">

		<!-- Header -->
		<div class="header-left">
			<div id="header-left-flex">
				<div id="flex-header-news">All the Hardcore</div>
				<div id="news_popout">News*!*</div>
			</div>
		</div>
		<div class="header-center">
			<div id="header-center-flex">
				<div id="flex-header-sub">
					<?php echo generateSlugLine(); ?>
				</div>
				<div id="news-ticker" aria-hidden="true">
					<p>
						<span id="typewriter-text">
							<?php foreach ($players as $player) : ?>
							<?= $player['name'] ?> &nbsp; the &nbsp;<?= $player['race'] ?> &nbsp; <?= $player['class'] ?> &nbsp; @ &nbsp; <?= $player['level'] ?>,&nbsp;
							<?php endforeach; ?>
						</span>
					</p>
				</div>
			</div>

		</div>
		<div class="header-right">
			<div id="flex-header-right">
				<div id="flex-header-mrgl">mrglglgl</div>
				<div id="flex-header-issue">Issue #
					<?php echo $formattedDate; ?>
				</div>
			</div>
		</div>
		<!-- END Header -->

		
		  <div class="slugline">about...</div>
		  
		  <div class="main">
			  <div class="typer">
				  <p>This is all a tongue in cheek fan site revolving around Classic World of Warcraft's official <span class="about span">Hardcore</span> mode.</p>
			  
				  <p>I am in no way affiliated with Blizzard or the amazing addon authors of <a href="https://github.com/aaronma37/Deathlog">Deathlog</a>, or <a href="https://classichardcore.com/addons/"> The "Hardcore Addon" </a> which, I believe is where Deathlog got its start. I use these addons in game to collect my data and then with some Goblin magic python and php into this site!</p>
			  
				  <p>All art on the site is mine and has been generated using <a href="https://github.com/comfyanonymous/ComfyUI">ComfyUI and <a href="https://www.midjourney.com/">Midjourney</a>, all with some Photoshop post generation tweaking.</p>
			  
				  <p>My github repo can be found <a href="https://github.com/aa-parky">HERE.</a></p>
			  
				  <p>I am not a website designer or professional software engineer, just an enthusiast. Please feel free to contact me if you need anything regarding the site, or if you have any suggestions!</p>
			  </div>
			  
				  <p>Contact</p>
			  
				  <!-- Begin myContactForm.com Form HTML -->
				  <form name="contactForm" id="contactForm" method="post" action="https://www.mycontactform.com/sendform/sendform.php">
					  <label for="email">E-mail Address: *</label>
					  <input name="email" type="email" id="email" required="required" />
			  
					  <label for="q1">Your Name: *</label>
					  <input name="q1" id="q1" type="text" />
			  
					  <label for="q2">Message: *</label>
					  <textarea name="q2" id="q2"></textarea>
			  
					  <input name="user" type="hidden" id="user" value="aaparky" />
					  <input name="formid" type="hidden" id="formid" value="463382" />
					  <input name="subject" type="hidden" id="subject" value="Have I got news for you!" />
					  <input name="submit" type="submit" value="Submit" />
					  <input name="reset" type="reset" value="Reset" />
			  
				  </form>
				  <!-- End myContactForm.com Form HTML -->
		  </div>
		
		

		<!-- Footer -->
		<div class="footer">
			<div id="footer-flex">
				<div id="footer-left"><a href="index.php">Home</a></div>
				<div id="footer-center">Privacy</div>
				<div id="footer-right">News</div>
			</div>
		</div>
		<!-- END Footer -->

	</div>

	<!-- Buy me a coffee -->
	<script data-name="BMC-Widget" data-cfasync="false" src="https://cdnjs.buymeacoffee.com/1.0.0/widget.prod.min.js" data-id="aaparky" data-description="Support me on Buy me a coffee!" data-message="Thank you for visiting! Every penny helps." data-color="#FF5F5F" data-position="Right" data-x_margin="18" data-y_margin="18"></script>

</body>

</html>
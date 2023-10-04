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
	<title>Mrmglglglgl Read it Before you are in it</title>

	<!-- Importing html2canvas library to capture page content as images -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>

	<!-- Sub-headline generated using a PHP script -->
	<?php include 'scripts/sub-headline.php'; ?>
	<!-- Speech bubbles with content fetched using a PHP script -->
	<?php include 'scripts/parse_master_alliance.php'; ?>
	<!-- Sub-headline generated using a PHP script -->
	<?php include 'scripts/murloc_endings.php'; ?>
	<!-- Slug-line generated using a PHP script -->
	<?php include 'scripts/slug-line.php'; ?>
	<!-- Date & Time -->
	<?php include 'scripts/utc.php'; ?>

	<!-- Scripts to handle the "save" and "refresh" button functionalities -->
	<script src="scripts/save-button.js"></script>
	<script src="scripts/refresh-button.js"></script>

	<!-- Adobe fonts -->
	<link rel="stylesheet" href="https://use.typekit.net/tkq4iko.css">
	<!-- Link to the site's main stylesheet -->
	<link rel="stylesheet" href="css/comic.css">
</head>

<body>
	<!-- Comic Wrapper -->
	<div class="comicWrapper">

		<!-- Top Banner Horizontal Wrapper -->
		<div class="topBannerContainer">
			<section class="topBanner_box">
				<div class="banner_logo_top">
					All the Hardcore <span class="banner_logo_top span">News!</span>
				</div>

				<div class="banner_centre">
					Heroic Deaths & Epic Fails
				</div>

				<div class="banner_mrgl">
					Mrglglglgl
				</div>

				<div class="banner_date">
					Issue #
					<?php echo $formattedDate; ?>
				</div>

			</section>
		</div>

		<!-- Top Panel Horizontal Wrapper -->
		<div class="topPanelsContainer">
		<section class="topPanel">
				<a href="https://mrglglglgl.com">Home</a>
			</section>

			<section class="topPanel">
				<a href="#">Map</a>
			</section>

			<section class="topPanel">
				<a href="https://mrglglglgl.com/about.php">About</a>
			</section>

			<section class="topPanel">
				<a href="https://mrglglglgl.com/about.php">Contact</a>
			</section>
		</div>

		<!-- Main headline for the webpage -->
		<div class="headline">
			Suddenly...
		</div>

		<!-- Panel 1 -->
		<section>
			<figure class="comicPanel panel1" style="width: 50%;">
				<img src="../img/MrGl.png" alt="Mrglglglgl" style="max-width: 100%; max-height: 100%;">
				<figcaption class="comicCaption comicCaptionTop">

					<div class="sub-headline">
						<?php echo generateSubHeadline(); ?>
					</div>

				</figcaption>

				<div class="speech_left">

					<div class="mrgl-before">mrglglglgl...</div>
					<div class="player_name">
						<span><?php echo $name; ?>!</span>
					</div>
					<div class="mrgl-after">...mrglglglgl &#42;</div>
				</div>

				<div class="speech_right">
					<div class="last_words">
						<?php echo $lastWords; ?>
					</div>
				</div>

				<div class="comicCaption comicCaptionBottom">
					<div class="sub-headline">
						<?php echo generateMurlocEndings(); ?>
					</div>
				</div>

				<div class="copy span">
					&copy; 2023 aa.parky
				</div>

			</figure>
		</section>

		<!-- Middle Comic Panels Wrapper -->
		<div class="middleComicPanels">
			<!-- Panel 3 Orc-->
			<section>
				<figure class="comicPanel panel3">
					<div class="panel3_topbox">
						Cadaverclutch
						<span class="panel3_topbox span">Coffin Co.</span>
					</div>
					<div class="panel3_content">Coming Soon!</div>
				</figure>
			</section>


			<!-- Panel 2 Obituary-->
			<section>
				<figure class="comicPanel panel2">
					<div class="slug-line"><?php echo generateSlugLine(); ?></div>
					<div class="player_obit"><?php echo $player_obit; ?></div>
				</figure>
			</section>

			<!-- Panel 4 Goblin-->
			<section>
				<figure class="comicPanel panel4">
					<div class="panel4_topbox">
						Goldsnatch Graveyard Auctions
					</div>
					<div class="panel4_content">Coming Soon!</div>
				</figure>
			</section>
		</div>


		<!-- Bottom Panel Horizontal Wrapper -->
		<div class="topPanelsContainer">
		<section class="topPanel">
				<a href="https://mrglglglgl.com">Home</a>
			</section>

			<section class="topPanel">
				<a href="#">Map</a>
			</section>

			<section class="topPanel">
				<a href="https://mrglglglgl.com/about.php">About</a>
			</section>

			<section class="topPanel">
				<a href="https://mrglglglgl.com/about.php">Contact</a>
			</section>
		</div>

		<!-- Bottom Banner Horizontal Wrapper -->
		<div class="btmBannerContainer">
			<section class="btmBanner_box">
				<div class="btm_logo">
					<a href="#"> Death by Kobolds <span class="btm_logo span">Rising!</span></a>

				</div>

				<div class="btm_centre">
					<a href="#">Wendigos Seek Revenge! </a>
				</div>

				<div class="btm_mrgl">
					<a href="#">The Defias Register</a>
				</div>

				<div class="btm_date">
					<a href="#">Site Map</a>
				</div>

			</section>
		</div>

	</div>
	<script data-name="BMC-Widget" data-cfasync="false" src="https://cdnjs.buymeacoffee.com/1.0.0/widget.prod.min.js" data-id="aaparky" data-description="Support me on Buy me a coffee!" data-message="Thank you for visiting! Every penny helps." data-color="#FF5F5F" data-position="Right" data-x_margin="18" data-y_margin="18"></script>
</body>

</html>
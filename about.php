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
					Heroic Deaths &#38; Epic Fails
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
			About &#38; Contact...
		</div>

		<!-- Panel 1 -->
		<section>

			<figure class="comicPanel panel1" style="width: 50%;">
				<figcaption class="comicCaption comicCaptionTop">
					<div class="sub-headline">
						About
					</div>
				</figcaption>

				<div class="about">
					<p>This is all a tongue in cheek fan site revolving around the Classic World of Warcraft Official Hardcore server <span class="about span">Stitches</span>.</p>

					<p>I am in no way affiliated with Blizzard or the amazing addon authors of <a href="https://github.com/aaronma37/Deathlog">Deathlog</a>, or <a href="https://classichardcore.com/addons/"> The "Hardcore Addon" </a> which, I believe is where Deathlog got its start. I use these addons in game to collect my data and then with some Goblin magic python and php into this site!</p>

					<p><span class="about span">Jimmy</span> is here for community service, no permission has been sought from his P.O. or Vince Gilligan, Peter Gould or AMC. <a href="https://en.wikipedia.org/wiki/Better_Call_Saul">Better Call Saul</a>. </p>

					<p>All art on the site is mine and has been generated using <a href="https://github.com/comfyanonymous/ComfyUI">ComfyUI and <a href="https://www.midjourney.com/">Midjourney</a>, all with some Photoshop post generation tweaking.</p>

					<p>My github repo can be found <a href="https://github.com/aa-parky">HERE.</a></p>

					<p>I am not a website designer or professional software engineer, just an enthusiast. Please feel free to contact me if you need anything regarding the site, or if you have any suggestions!</p>

				</div>
			</figure>

		</section>

		<!-- Panel 2 -->
		<section>
			<figure class="comicPanel panel2" style="width: 100%;">

				<figcaption class="comicCaption comicCaptionTop">
					<div class="sub-headline">
						Contact
					</div>
				</figcaption>

				<div style="width: 400px; height: 400px;">

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
			</figure>
		</section>


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
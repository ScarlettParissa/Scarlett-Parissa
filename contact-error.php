<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Scarlett Parissa - Contact Error</title>
		<meta charset="utf-8" />
		<?php include ("inc/meta.php"); ?>
		<link rel="stylesheet" href="css/core.css" media="screen" />
		<link rel="shortcut icon" href="favicon.ico" />
		<link rel="apple-touch-icon" href="apple-touch-icon.png" />
		<?php include ("inc/html5-shiv.php"); ?>
		<?php include ("inc/analytics.php"); ?>
	</head>
	<body id="contact">
		<nav id="main-navigation">
			<h1 class="visuallyhidden">Main navigation</h1>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="photos-videos.php">Photos/Videos</a></li>
				<li class="logo"><a href="index.php">Scarlett Parissa</a></li>
				<li><a href="recordings.php">Recordings</a></li>
				<li><a href="cv.php">CV</a></li>
				<li><a href="contact.php" class="current">Contact</a></li>
			</ul>
		</nav>
		<section id="content">
			<h1>Contact Error</h1>
			<p>You didn't fill out all required fields. Please <a href="contact.php" onclick="history.go(-1)">go back</a> and try again.</p>
			<?php include ("inc/social-icons.php"); ?>
		</section>
		<?php include ("inc/footer.php"); ?>
	</body>
</html>
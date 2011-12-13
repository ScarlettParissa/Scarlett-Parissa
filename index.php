<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Scarlett Parissa</title>
		<meta charset="utf-8" />
		<?php include ("inc/meta.php"); ?>
		<link rel="stylesheet" href="css/core.css" media="screen" />
		<link rel="shortcut icon" href="favicon.ico" />
		<link rel="apple-touch-icon" href="apple-touch-icon.png" />
		<?php include ("inc/html5-shiv.php"); ?>
		<?php include ("inc/analytics.php"); ?>
	</head>
	<body id="home">
		<h1 id="site-title"><a href="index.php">Scarlett Parissa</a></h1>
		<nav id="home-navigation">
			<h1 class="visuallyhidden">Main navigation</h1>
			<ul>
				<li><a href="index.php" class="current">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li class="space-r"><a href="photos-videos.php">Photos/Videos</a></li>
				<li class="space-l"><a href="recordings.php">Recordings</a></li>
				<li><a href="cv.php">CV</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
		<section id="content">
			<h1>Vocalist, Actor and Dancer</h1>
			<div class="cushycms">
				<p>Scarlett graduated from Millennium Performing Arts in June 2011, where she studied "Dance and Musical Theatre".</p>
				<p>Scarlett is a highly skilled Mezzo Soprano vocalist who is mainly trained in Music Theatre technique. Scarlett is also trained in classic, pop, folk, choral and jazz singing. In dance Scarlett is trained in Ballet, Jazz, Matt Mattox Jazz, Lyrical Jazz, Contemporary, Tap and Pas de deux.</p>
				<p>Since graduating Scarlett has began working at Ipswich Borough Council as an Events Assistant, where she will continue to work whilst performing and studying for her Masters Degree in "Arts Management."</p>
				<p>Scarlett is available for hire, you can contact her through the <a href="contact.php">contact page</a> on this website.</p>
			</div>
			<aside id="latest-tweet">
				<h1>Latest tweet</h1>
				<ul id="twitter_update_list"></ul>
			</aside>
		</section>
		<?php include ("inc/footer.php"); ?>
		<script src="http://twitter.com/javascripts/blogger.js"></script>
		<script src="http://twitter.com/statuses/user_timeline/ScarlettParissa.json?callback=twitterCallback2&amp;count=1"></script>
	</body>
</html>
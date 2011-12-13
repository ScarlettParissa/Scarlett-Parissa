<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Scarlett Parissa - Photos &amp; Videos</title>
		<meta charset="utf-8" />
		<?php include ("inc/meta.php"); ?>
		<link rel="stylesheet" href="css/core.css" media="screen" />
		<link rel="shortcut icon" href="favicon.ico" />
		<link rel="apple-touch-icon" href="apple-touch-icon.png" />
		<?php include ("inc/html5-shiv.php"); ?>
		<?php include ("inc/analytics.php"); ?>
	</head>
	<body id="photos-videos">
		<nav id="main-navigation">
			<h1 class="visuallyhidden">Main navigation</h1>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="photos-videos.php" class="current">Photos/Videos</a></li>
				<li class="logo"><a href="index.php">Scarlett Parissa</a></li>
				<li><a href="recordings.php">Recordings</a></li>
				<li><a href="cv.php">CV</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
		<section id="content">
			<h1>Photos &amp; Videos</h1>
			<p class="cushycms">Expand a block below to view my photos and videos.</p>

			<h2 class="trigger"><a href="#">Photos</a></h2>
			<section class="photo-slider toggle-container">
				<div class="slider-button left" id="headshots-left" onclick="slideshow.move(-1)">Previous</div>
				<div id="headshots-gallery" class="photo-wrapper cushycms">
					<ul>
						<li><img src="img/photos/headshots/01.jpg" width="500" height="750" alt="Image One" /></li>
						<li><img src="img/photos/headshots/02.jpg" width="500" height="750" alt="Image Two" /></li>
						<li><img src="img/photos/headshots/03.jpg" width="500" height="750" alt="Image Three" /></li>
						<li><img src="img/photos/headshots/04.jpg" width="500" height="750" alt="Image Four" /></li>
						<li><img src="img/photos/headshots/05.jpg" width="500" height="750" alt="Image Five" /></li>
						<li><img src="img/photos/headshots/06.jpg" width="500" height="750" alt="Image Six" /></li>
						<li><img src="img/photos/headshots/07.jpg" width="500" height="750" alt="Image Seven" /></li>
						<li><img src="img/photos/headshots/08.jpg" width="500" height="750" alt="Image Eight" /></li>
					</ul>
				</div>
				<div class="slider-button right" id="headshots-right" onclick="slideshow.move(1)">Next</div>
				<ul id="pagination" class="pagination">
					<li onclick="slideshow.pos(0)"></li>
					<li onclick="slideshow.pos(1)"></li>
					<li onclick="slideshow.pos(2)"></li>
					<li onclick="slideshow.pos(3)"></li>
					<li onclick="slideshow.pos(4)"></li>
					<li onclick="slideshow.pos(5)"></li>
					<li onclick="slideshow.pos(6)"></li>
					<li onclick="slideshow.pos(7)"></li>
				</ul>
			</section>
			<h2 class="trigger"><a href="#">Videos</a></h2>
			<section class="embedded-videos toggle-container cushycms">

				<iframe width="500" height="405" src="http://www.youtube.com/embed/BSquockqB0A" frameborder="0" allowfullscreen></iframe>
				<p>Scarlett performing 'Songbird' the Eva Cassidy version, at White Cliff Bay Holiday Park, 2011</p>
				
				<iframe width="500" height="405" src="http://www.youtube.com/embed/LWBq1pQBPVo" frameborder="0" allowfullscreen></iframe>
				<p>Scarlett performing 'Pie Jesu' the Charlotte Church version, at Ipswich Arts Festival Launch, 2011.</p>

				<iframe width="500" height="405" src="http://www.youtube.com/embed/Z6uX-sHXVdo" frameborder="0" allowfullscreen></iframe>
				<p>Scarlett performing 'Time Heels Everything' from Mack and Mabel the musical, at Ipswich Arts Festival Launch, 2011.</p>

				<iframe width="500" height="314" src="http://www.youtube.com/embed/lmNBmVR5O_A" frameborder="0" allowfullscreen></iframe>
				<p>Scarlett playing the character of Lucy from You're a Good Man Charlie Brown the musical, at Millenium Performing Arts Graduate Showcase 2011.</p>

			</section>
			<?php include ("inc/social-icons.php"); ?>
		</section>
		<?php include ("inc/footer.php"); ?>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
		<script src="js/gallery.js"></script>
		<script>
			// Expand/collapse sections
			$(document).ready(function(){

				$(".toggle-container").hide(); 

				//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
				$("h2.trigger").click(function(){
					$(this).toggleClass("active").next().slideToggle("slow");
					return false; //Prevent the browser jump to the link anchor
				});

			});
			// Headshots photo slider
			var slideshow=new TINY.slider.slide('slideshow',{
				id:'headshots-gallery',
				auto:4,
				resume:false,
				vertical:false,
				navid:'pagination',
				activeclass:'current',
				position:0,
				rewind:false,
				elastic:true,
				left:'headshots-left',
				right:'headshots-right'
			});
		</script>

	</body>
</html>
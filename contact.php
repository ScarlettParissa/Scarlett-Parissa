<?php

session_start();
$int1 = rand(1,10);
$int2 = rand(1,10);

while(($int1 - $int2) < 0) {
	$int1 = rand(1,10);
	$int2 = rand(1,10);
	if(($int1 - $int2) > 0) break;
}

if($int1 > $int2) {
	$method = 'plus';
}
else $method = 'subtract';

switch($method) {
	case 'plus':
	$answer = $int1 + $int2;
	break;
	case 'subtract':
	$answer = $int1 - $int2;
	break;
}

$question = 'What does '.$int1.' '.$method.' '.$int2.' make?';

$_SESSION['question'] = (string) $answer;

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Scarlett Parissa - Contact</title>
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
			<h1>Contact me</h1>
			<p>Use the form below to send me a message.</p>
			<form action="contact-send.php" method="post">
				<fieldset>
					<p>
						<label>
							Name:
							<input type="text" id="name" name="name" autocomplete="on" required="required" />
						</label>
					</p>
					<p>
						<label>Email:
							<input type="email" id="email" name="email" autocomplete="on" required="required" />
						</label>
					</p>
					<p>
						<label>Phone:
							<input type="tel" id="phone" name="phone" placeholder="(not required)" autocomplete="on" />
						</label>
					</p>
					<p>
						<label><?php echo($question) ?>
							<input type="text" id="question" name="question" placeholder="(just for security)" autocomplete="off" required="required" />
						</label>
					</p>
					<p>
						<label>Message:
							<textarea id="message" name="message" required="required"></textarea>
						</label>
					</p>
					<p>
						<button>Send message</button>
					</p>
				</fieldset>
			</form>
			<?php include ("inc/social-icons.php"); ?>
		</section>
		<?php include ("inc/footer.php"); ?>
	</body>
</html>
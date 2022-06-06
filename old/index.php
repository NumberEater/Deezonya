<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./index.css">
	<title>Grant's Website</title>
</head>
<body>
	<?php
		if($_POST["username"] != "NumberEater" || $_POST["password"] != "4012Ginger!") {
			header("Location: ../index.html");
			die();
		}
	?>
	<center>
		<div class="title">
			<h1>Grant's Website</h1>
		</div>
		<div class="video1">
			<h2>Goofy Ahh Video</h2>
			<video controls>
				<source src="./video1.mp4">
			</video>
		</div>
		<div class="video2">
			<h2>PewDiePie plays PUBG</h2>
			<video controls>
				<source src="./video2.mp4">
			</video>
		</div>
	</center>
	<footer>
		<center>
			<a href="./music.html">Music</a>
		</center>
	</footer>
</body>
</html>

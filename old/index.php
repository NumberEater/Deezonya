<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
			body {
				font-family: sans-serif;
				font-size: 1.2em;
			}
			a {
				text-decoration: none;
			}
			.info {
				border: 2px solid black;
				border-radius: 20px;
				margin: 20px;
			}
			.movies {
				border: 2px solid black;
				border-radius: 20px;
				margin: 20px;
			}
	</style>
	<title>Grant's Movies</title>
</head>
<body>
	<?php
		if($_POST["username"] != "deezmaster" || $_POST["password"] != "balls") {
			header("Location: ../index.html");
			die();
		}
	?>

	<center>
		<div class="title">
			<h1>Movies & Stuff</h1>
		</div>
		<div class="info">
			<h2>Server Info</h2>
			<p>This server is hosted on my home network using a <a href="https://www.raspberrypi.com/products/raspberry-pi-zero/" target="_blank">Raspberry Pi Zero</a>.</p>
			<p>It has about 512mb of ram. The processing speed and ram is not suitable for a high traffic website.</p>
			<p>I'm hoping to upgrade the server to a little bit more powerful one with a <a href="https://shorturl.at/fltOS" target="_blank">1TB Micro SD</a>.</p>
			<p>If you want to help with costs, you can venmo me the money for the Micro SD and I will upload any movie you want forever.</p>
		</div>
		<div class="movies">
			<h2>Videos/Movies</h2>
			<p><a href="./videos/test/test_video.html">Test Video</a></p>
			<p><a href="./videos/maverick/maverick.html">Top Gun Maverick (coming 6/6/22)</a></p>
			<p><a href="./videos/doctor_strange/doctor_strange.html">Dr. Strange: Multiverse of Madness (coming 6/6/22)</a></p>
			<!-- MovieJustice.com -->
		</div>
	</center>
</body>
</html>

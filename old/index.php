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
	</style>
	<title>Grant's Website</title>
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
			<h1>Grant's Website</h1>
		</div>
		<div class="info">
			<h2>Server Info</h2>
			<p>This server is hosted on my home network using a <a href="https://www.raspberrypi.com/products/raspberry-pi-zero/" target="_blank">Raspberry Pi Zero</a>.</p>
			<p>It has about 512mb of ram. The processing speed and ram is not suitable for a high traffic website.</p>
		</div>
	</center>
</body>
</html>

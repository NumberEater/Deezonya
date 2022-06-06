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
			.login input[type=submit] {
				margin-right: 20px;
				margin-top: 10px;
				width: 80px;
				height: 30px;
			}
			.login input[type=username] {
				margin-right: 20px;
				margin-top: 10px;
				width: 150px;
				height: 30px;
			}
			.login input[type=password] {
				margin-right: 20px;
				margin-top: 10px;
				width: 150px;
				height: 30px;
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
			<p>This is my website. If you're here that means you have the username and password.</p>
			<p>The website is hosted on a rasbperry pi zero with 512 mb of ram.</p>
		</div>
	</center>
</body>
</html>

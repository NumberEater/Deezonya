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
		<h2>Image of a toaster</h1>
		<img alt="toaster" href="https://solis.com/media/catalog/product/9/2/920-11_cmyk-007_toastersteel-01460.jpg?optimize=medium&fit=bounds&height=700&width=700" />
	</center>
</body>
</html>

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
	</center>
</body>
</html>

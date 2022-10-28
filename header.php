<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	  	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	  	<title>Show Tracker</title>
	  	<link rel="shortcut icon" type="image/jpg" href="favicon.ico"/>
		<link rel="stylesheet" href = "style_test.css"/>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


	</head>

	<body>

		<div class ="header">
			<a href="index.php"><img src = "https://www.logolynx.com/images/logolynx/9a/9ac1859618b5cf17e81966d87a0029e0.png" class="logo" align="left"></a>
			<h1 style="display:inline;"> Show Tracker (name WIP) </h1>
		</div>

		<div class = "topnav">
			<a class = "active" href = "index.php"> Home </a>
			<?php 
	 			if ($_SESSION["userid"] == "") {
	 		?>
				<a href = "log_in.php" class="lisa active">Log In</a>
				<a href = "sign_up.php" class="lisa active">Sign Up</a>
			<?php 
				} else {
			?>
				<a href="logout.php" class="lisa active"> Sign Out </a>
			<?php } ?>
		</div>
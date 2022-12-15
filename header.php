<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	  	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	  	<title>Indagatrix</title>

	  	<!-- Various Stylings, all used (I think)-->
	  	<link rel="shortcut icon" type="image/jpg" href="images/favicon.ico"/>
		<link rel="stylesheet" href = "css/general_style.css"/>
		<link rel="stylesheet" href="css/listing_style.css">
   	 	<link rel="stylesheet" href="css/bootstrap.min.css">
    
   	 	<!-- Scripts, mostly for javascript/jquery librarys -->
   	 	<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    	<script src="main.js"></script>

	</head>

	<body>

		<div class ="header">
				<h1 style="display:inline;"> Indagatrix </h1>
		</div>
		<!-- navbar that links to various things -->
		<div class = "topnav">
			<a class = "active" href = "index.php"> Home </a>
			<a class = "active" href = "top_rated_movies.php"> Top Rated Movies </a>
			<a class = "active" href = "top_rated_shows.php"> Top Rated Shows </a>
			<a class = "active" href = "help.php"> Help </a>
			<a class = "active" href = "user_search.php"> Users </a>

		<!-- navbar display here will change depending on if user is logged in or not-->
		<?php 
	 		if ($_SESSION["userid"] == "") {
	 	?>
				<a href = "log_in.php" class="lisa active">Log In</a>
				<a href = "sign_up.php" class="lisa active">Sign Up</a>
			<?php 
				} else {
			?>
				<a href = "profile_page.php" class="lisa active"> Profile </a>
				<a href="log_out.php" class="lisa active"> Sign Out </a>
			<?php } ?>
		</div>
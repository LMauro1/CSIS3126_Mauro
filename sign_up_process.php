<?php
include("global.php");

$errormessage = "";
	
	//if($_POST["email"] == "")
		//$errormessage = $errormessage . "You must enter an email! <br />";

	if($_POST["username"] == "")
		$errormessage = $errormessage . "You must enter a username! <br />";

	if($_POST["password"] == "")
		$errormessage = $errormessage . "You must enter a password! <br />";

	//if($_POST["rptpassword"] != $_POST["password"])
		//$errormessage = $errormessage . "Passwords must match! <br />";


//$email = mysqli_real_escape_string($connection, $_POST["email"]);
$username = mysqli_real_escape_string($connection, $_POST["username"]);
$password = mysqli_real_escape_string($connection, $_POST["password"]);

if($errormessage != ""){
	include("sign_up.php");
	die();
	}

mysqli_query($connection, "insert into users (username, password) values ('$username', '$password')") or die("Unable to add user to database.");
echo("You are registered! <a href ='log_in.php'> Click here to log in! </a>");


?>
<?php
include("global.php");

$errormessage = "";
	
//if($_POST["email"] == "")
		//$errormessage = $errormessage . "You must enter an email! <br />";

if($_POST["username"] == ""){
	$errormessage = $errormessage . "You must enter a username! <br />";

	} else {

		$username = mysqli_real_escape_string($connection, $_POST["username"]);
		$res = mysqli_query($connection, "select * from users where username = '$username'");
		$row = mysqli_fetch_assoc($res);

		if($row > 0){
			$errormessage = $errormessage . "This username is taken <br />";
		}

		if(strlen($username) < 8){
			$errormessage = $errormessage . "This username is too short (must be 8 or more characters!) <br />";
	}
}

if($_POST["password"] == ""){
		$errormessage = $errormessage . "You must enter a password! <br />";

	} else {
		$password = mysqli_real_escape_string($connection, $_POST["password"]);
		
		if(strlen($password) < 8){
			$errormessage = $errormessage . "Your password must be 8 characters or greater!";
		}

	}



//$email = mysqli_real_escape_string($connection, $_POST["email"]);


if($errormessage != ""){
	include("sign_up.php");
	die();
	}

mysqli_query($connection, "insert into users (username, password) values ('$username', '$password')") or die("Unable to add user to database.");
echo("You are registered! <a href ='log_in.php'> Click here to log in! </a>");


?>
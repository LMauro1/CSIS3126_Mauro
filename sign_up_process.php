<?php
include("global.php");

$errormessage = "";

//authentication for username, checks if user has entered a username, if the username is taken, and if the username length is 8 or more characters
	
if($_POST["username"] == ""){
	$errormessage = $errormessage . "You must enter a username! <br />";

	} else {

		$username = mysqli_real_escape_string($connection, $_POST["username"]);
		$res = mysqli_query($connection, "select * from users where username = '$username'");
		$row = mysqli_fetch_assoc($res);

		if($row > 0){
			$errormessage = $errormessage . "This username is taken. <br />";
		}

		if(strlen($username) < 8){
			$errormessage = $errormessage . "Your username must be 8 characters or greater! <br />";
	}
}

//authentication for password, checks if user has entered a password, if the password and repeat password inputs and if the password length is 8 or more characters
if($_POST["password"] == "" || $_POST["rptpassword"] == ""){
		$errormessage = $errormessage . "You must enter a password! <br />";

	} else {
		$password = mysqli_real_escape_string($connection, $_POST["password"]);
		$rptpassword = mysqli_real_escape_string($connection, $_POST["rptpassword"]);


		if($password != $rptpassword){
			$errormessage = $errormessage . "Both passwords must match. <br />";
		}
		
		if(strlen($password) < 8 || strlen($rptpassword < 8)){
			$errormessage = $errormessage . "Your password must be 8 characters or greater! <br /> ";
		}

	}


//informs user that display name is required 
if ($_POST["display_name"] == "")
	$errormessage .= "Display Name is required<br />";

$display_name = mysqli_real_escape_string($connection,$_POST["display_name"]);
$about_me = mysqli_real_escape_string($connection,$_POST["about_me"]);


if($errormessage != ""){
	include("sign_up.php");
	die();
	}

$passEnc = hash('sha256', $password);

mysqli_query($connection, "insert into users (username, password) values ('$username', '$passEnc')") or die("Unable to add user to database.");
mysqli_query($connection,"insert into userprofile (display_name, about_me) values ('$display_name','$about_me')") or die("Unable to run query.");
header("Location: sign_up_success.php");


?>
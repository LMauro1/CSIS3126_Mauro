<?php

	include("global.php");

	$errormessage = "";

	if($_POST["username"] == "")
		$errormessage = $errormessage . "You must enter a username! <br />";

	if($_POST["password"] == "")
		$errormessage = $errormessage . "You must enter a password! <br />";

	
	$username = mysqli_real_escape_string($connection, $_POST["username"]);
	$password = mysqli_real_escape_string($connection, $_POST["password"]);

	$res = mysqli_query($connection, "select * from users where username = '$username' and password = '$password'");

	if($errormessage != ""){
				include("log_in.php");
				die();
			}

	if(mysqli_num_rows($res) == 0){
		echo "Invalid login! Please <a href='log_in.php'> re-enter your information!</a>";

	} else {

		$row = mysqli_fetch_assoc($res);
		$_SESSION["userid"] = $row["id"];

		header("Location: index.php");
	}

?>
<?php

	include("global.php");

	if($_SESSION["userid"] == ""){
		die("Error - you are not logged in.");
	}  
	//perform validation 
	$errormessage = "";

	if ($_POST["display_name"] == "")
		$errormessage .= "Display Name is required<br />";


	if ($errormessage != "") {
		include("profile_edit.php");
		die();
	}

//sanitize the user inputs
$id = intval($_SESSION["userid"]);
$display_name = mysqli_real_escape_string($connection,$_POST["display_name"]);
$about_me = mysqli_real_escape_string($connection,$_POST["about_me"]);
$twitter = mysqli_real_escape_string($connection,$_POST["twitter"]);



mysqli_query($connection,"update userprofile set display_name = '$display_name', about_me = '$about_me', twitter = '$twitter' where id = $id") or die("Unable to run query");


//redirect to the listing page
header("Location: profile_page.php");

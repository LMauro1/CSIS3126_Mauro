<?php
	include("global.php");


	//sanitize the value from the URL
	$id = intval($_SESSION["userid"]);
	

	//retrieve the books record from the database
	$res = mysqli_query($connection,"select * from userprofile where id = $id");
	$row = mysqli_fetch_assoc($res);

	//Assign to the same variables that are used to pre-load the form
	$_POST["id"] = $row["id"];
	$_POST["display_name"] = $row["display_name"];
	$_POST["about_me"] = $row["about_me"];

	//show the form
	include("profile_edit.php");

?>
<?php

	//sets session userid to nothing, which is how displaying who is logged in is determined. 
	include("global.php");

	$_SESSION["userid"] = "";

	header("Location: index.php");

?>
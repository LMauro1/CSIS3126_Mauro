<?php
	include("global.php");


	//reudementary simple text based tracking, attempts to update causing errors
	/*$id = intval($_SESSION["userid"]);
	$res = mysqli_query($connection,"select * from shows where id = $id");
	$row = mysqli_fetch_assoc($res);

	$new_show = mysqli_real_escape_string($connection,$_POST["show"]);

	mysqli_query($connection, "update shows set user_show = CONCAT(user_show, ',$new_show') where id = $id")or die();*/


 	header("Location: profile_page.php");





?>
<?php
	include("global.php");

$id = intval($_SESSION["userid"]);

$res = mysqli_query($connection,"select * from userprofile where id = $id");
$row = mysqli_fetch_assoc($res);
$_GET["display_name"] = $row["display_name"];
$_GET["about_me"] = $row["about_me"];
$_GET["twitter"] = $row["twitter"];


?>
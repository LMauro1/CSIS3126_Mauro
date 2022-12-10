<?php

	include("global.php");
	include("header.php");
?>
<style>
	html{height:100%}
</style>
<?php
	$search = mysqli_real_escape_string($connection, $_POST['search']);

	$res = mysqli_query($connection, "select * from userprofile where display_name like '%$search%' order by display_name") or die("Query error");

		while ($row = mysqli_fetch_assoc($res)) {


			echo '<a href="view_user.php">' . $row["display_name"].'</a><br/>';
		 } ?>


<?php 
	include("footer.php");
?>
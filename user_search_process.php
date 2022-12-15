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

//I looked into this a bit, and while not the most safe, from my understanding allowing users to see the id is ok in this instance, as I do not have any
//admin commands and such related to specific ids, and there is no way for the user to access id aside from the view_user.php file accessing it. I attempted to 
//access other users profiles on the "profile.php" file by adding a ?id=# and it simply links to the users own profile (due to the profile display being based on
//the session id applied). 
?>
<h1 style="color:white"> Users: </h1>

<?php while ($row = mysqli_fetch_assoc($res)) { ?>
			<br/><u><a href="view_user.php?id=<?php echo $row["id"];?>" style="color:#817cd0;font-size:16px;"> <?php echo $row ["display_name"]; ?> </a></u><br/>
			</div>
	<?php } ?>

<?php 
	include("footer.php");
?>
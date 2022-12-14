<?php

	include("global.php");
	include("header.php");

?>	

<style>
	html{ height:100% }

</style>

<!-- form takes user input and uses the user_search_process.php file to search the database for x display name. -->
	<form class = "white" action="user_search_process.php" method="post">

	<br/><br/>Search: <input type="text" name="search">  
	<p>(Simply hit "Submit" to view all users!)</p>

	<input type ="submit">
	</form>

<?php 

	include("footer.php");
?>
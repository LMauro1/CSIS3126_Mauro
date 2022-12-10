<?php

	include("global.php");
	include("header.php");
	

?>
<style>
	html{
		height:100%;
	   }
</style>

<div class="login-box">
	<h2> Log In </h2>

	<form action="log_in_process.php" method="POST">
		<div class="user-box">
			<input type="text" name="username" placeholder="Enter Username" value="<?php echo htmlspecialchars($_POST["username"],ENT_QUOTES);?>"><br /><br />
		</div>

		<div class="user-box">
			<input type="password" name="password" placeholder="Enter Password" value="<?php echo htmlspecialchars($_POST["password"],ENT_QUOTES);?>"><br/><br/>
		</div>

		<div class="user-box">
			<p class="white"> Don't have an account? Sign up <a href = "sign_up.php"> here! </a> </p> <br/>
		</div>

		<div style="color: red; font-weight: bold;">
			<?php
				echo $errormessage;
			?>
		</div>

		<input type="submit" value="Log In">
	</form>
</div>

<?php
	include("footer.php");
?>
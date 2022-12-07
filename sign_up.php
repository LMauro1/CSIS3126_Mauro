<?php
	include("header.php");
	include("global.php");
?>
<style>
	   html{
	   	height:100%;
	   }
</style>

<div class ="login-box">
	<h2> Sign Up </h2>

	<form action="sign_up_process.php" method = "POST">
		<!--<div class="user-box">
			<input type="email" name="email" placeholder="Enter Email" value="<?php echo htmlspecialchars($_POST["email"],ENT_QUOTES);?>"> <br /> <br />
		</div>-->

		<div class="user-box">
			<input type="text" name="username" placeholder="Enter Username" value="<?php echo htmlspecialchars($_POST["username"],ENT_QUOTES);?>"><br /><br />
		</div>

		<div class="user-box">
			<input type="password" name="password" placeholder="Enter Password" value="<?php echo htmlspecialchars($_POST["password"],ENT_QUOTES);?>"><br/><br/>
		</div>

		<!--<div class="user-box">
			<input type="password" name="rptpassword" placeholder="Re-enter Password" value="<?php echo htmlspecialchars($_POST["rptpassword"],ENT_QUOTES);?>"><br/><br/>
		</div>-->

		<div class="user-box">
			<p class="white"> Already have an account? <a href="log_in.php"> Log in! </a></p>
		</div>

		<div style="color: red; font-weight: bold;">
			<?php
				echo $errormessage;
			?>
		</div>

	    <input type="submit" value="Register">
	   	
	</form>
</div>

<?php 
	include("footer.php");
?>

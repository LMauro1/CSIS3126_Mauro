<?php
	include("global.php");
	include("header.php");
	include("profile_info_process.php");

?>

<style> html{height:100%} </style>
<!-- display for user profile, data from profile is pulled from database via the profile_info_process.php file-->
<div class="container">
	<div class="main-body">
	    <div class="row gutters-sm">
	        <div class="col-md-4 mb-3">
	            <div class="card">
	                <div class="card-body">
	                  	<div class="d-flex flex-column align-items-center text-center">
	                    	<img src="images/default-user.png" alt="User" class="rounded-circle" width="120">
	                    <div class="mt-3">
	                      	<h4><span><?php echo htmlspecialchars($_GET["display_name"], ENT_QUOTES);?></span></h4>
	                      	<p class="text-secondary mb-1"><?php echo htmlspecialchars($_GET["about_me"], ENT_QUOTES);?></p>
	                    </div>
	                	</div>
	                </div>
	            </div>
	            <div class="card mt-3">
	                <ul class="list-group list-group-flush">
	                  	<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
	                    	<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="skyblue" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter:</h6>
	                    	<span class="text-secondary">N/A</span>
	                  </li>
	                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
	                  	 <div class="row">
	                    	<div class="col-sm-12">
	                      <button class="btn btn-primary" onclick="location.href='profile_edit_infograb.php'" type="button">Edit Profile</a>
	                    </div>
	                  </div>
	                  </li>
	                </ul>
	            </div>
	        </div>
	        <div class="card mb-3 ml-3 col-md-6">
	        	<div class="list-group">
	        		<h2> Add a New Show: </h2>
	        		<form action="show_track_process.php" method="POST">
	        			<input type="text" name="show" placeholder="Enter a Show" value="<?php echo htmlspecialchars($_POST["show"],ENT_QUOTES);?>">
	        			<input type="submit" value="Add Show"> 
	        		</form>
	        	</div>
	        </div>
	    </div>
	</div>
</div>
	 
<?php
	include("footer.php");
?>
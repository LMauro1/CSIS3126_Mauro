<?php
	include("header.php");

?>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<div class="container">
	    	<div class="main-body">
	          <div class="row gutters-sm">
	            <div class="col-md-4 mb-3">
	              <div class="card">
	              	<span style="color: red;">
						<?php echo $errormessage; ?>
					</span>
	                <div class="card-body">
	                  <div class="d-flex flex-column align-items-center text-center">
	                    <img src="images/default-user.png" alt="User" class="rounded-circle" width="120">
	                    <div class="mt-3">
	                   <form action = "profile_edit_process.php" method="POST">
	                   		<input type="hidden" name="id" value="<?php echo $_POST["id"];?>">
	                      <h4>Display Name: <input type = "text" name = "display_name" value="<?php echo htmlspecialchars($_POST["display_name"], ENT_QUOTES);?>"></h4>
	                      <p class="text-secondary mb-1">About Me: <input type = "text" name = "about_me" value="<?php echo htmlspecialchars($_POST["about_me"], ENT_QUOTES);?>"></p>
	                    </div>
	                  </div>
	                </div>
	              </div>
	              <div class="card mt-3">
	                <ul class="list-group list-group-flush">
	                  <!--<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
	                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter: </h6>
	                    <span class="text-secondary"><input type = "text" name = "twitter_name" value="<?php echo htmlspecialchars($_POST["twitter"], ENT_QUOTES);?>"></span>
	                  </li>-->
	                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
	                  	<div class="row">
					<div class="col-sm-3"></div>
						<div class="col-sm-9 text-secondary">
								<input type="submit" class="btn btn-primary" value="Save Changes"> </form>
							</div>
						</div>
	                  </li>
	                </ul>
	              </div>
	            </div>
				
					</div>
				</div>
			</div>

<?php
	include("footer.php");
?>
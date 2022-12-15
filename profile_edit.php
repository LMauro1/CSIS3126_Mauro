<?php
	include("header.php");

	if ($_SESSION["userid"] == "") {
		header("Location: not_logged_in.php");
	}

?>

<!-- profile edit, added a form and inputs to the normal profile display -->
<style> html{height:100%} </style>

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
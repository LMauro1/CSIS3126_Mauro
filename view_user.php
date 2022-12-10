<?php

include("global.php");
include("header.php");

$search = mysqli_real_escape_string($connection, $_POST['search']);


//sanitize user input
$id = intval($_GET["id"]);

//get the record of the pet
$res = mysqli_query($connection, "select * from userprofile where id = $id");
$row = mysqli_fetch_assoc($res);

?>
<style>
	html{height:100%}
</style>

<h3>View Books!</h3>
<br />

<div class="container">
	    <div class="main-body">
	         <div class="row gutters-sm">
	            <div class="col-md-4 mb-3">
	              <div class="card">
	                <div class="card-body">
	                  <div class="d-flex flex-column align-items-center text-center">
	                    <img src="https://img.freepik.com/free-photo/portrait-white-man-isolated_53876-40306.jpg" alt="Admin" class="rounded-circle" width="160">
	                    <div class="mt-3">
	                      <h4><span><?php echo $row["display_name"];?></span></h4>
	                      <p class="text-secondary mb-1"><?php echo $row["about_me"];?></p>
	                      <button class="btn btn-primary">Follow</button>
	                      <button class="btn btn-outline-primary">Message</button>
	                    </div>
	                  </div>
	                </div>
	              </div>
	              <div class="card mt-3">
	                <ul class="list-group list-group-flush">
	                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
	                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="skyblue" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter:</h6>
	                    <span class="text-secondary"><?php echo $row["twitter"];?></span>
	                  </li>
	                </ul>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	 

<?php
include("footer.php"); ?>
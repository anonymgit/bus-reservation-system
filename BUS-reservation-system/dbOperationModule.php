<?php
	include("dbconnection.php");
	
	if(isset($_REQUEST["register"])or isset($_REQUEST["registerAdmin"]))
	{
		registerUser();
	}
/*	if(isset($_REQUEST["registerAdmin"]))
	{
		registerAdmin();
	}
*/
	if(isset($_REQUEST["login"]))
	{
		login();
	}
	if(isset($_REQUEST["Adminlogin"]))
	{
		Adminlogin();
	}
	if(isset($_REQUEST["updateProfile"]))
	{
		updateProfile();
	}
	if(isset($_REQUEST["deleteAccount"]))
	{
?>

			<div class="lock-wrapper-page">
			<div class="text-center lock-heading">
				<a href="profile.php" class="logo-lock"><i class="icon socicon-feedburner"></i> <span>want to delete your account?</span> </a>
			</div>
			<form action="#" method="get" class="text-center m-t-20">
				<div class="user-thumb">
					<img src="assets/dist/img/avatar.png" class="img-responsive img-circle img-thumbnail" alt="thumbnail">
				</div>
				<div class="form-group">
					<h3></h3>
					<p class="text-muted">want to delete your account</p>
					<div class="input-group m-t-20">
						<span class="input-group-btn"> 
					<!--		<input type="submit" class="btn btn-add" value="go to login page" name="go_to_login">  -->
							<div style="width:500px;">
								<div style="float: left; width: 100px"> 
									<input type="submit" class="btn btn-add" value="yes" name="yes">
								</div>
							</div>
							<a class="btn btn-warning" href="profile.php">no</a> 
						</span>
					</div>
				</div>	
			</form>
<?php
		}
	if(isset($_REQUEST["yes"]))
	{
		deleteAccount();
	}
	if(isset($_REQUEST["delete"]))
	{
	
?>
	<div class="lock-wrapper-page">
		<div class="text-center lock-heading">
			<a href="UserProfile.php" class="logo-lock"><i class="icon socicon-feedburner"></i> <span>want to delete this account?</span> </a>
		</div>
		<form action="#" method="get" class="text-center m-t-20">
			<div class="user-thumb">
				<img src="assets/dist/img/avatar.png" class="img-responsive img-circle img-thumbnail" alt="thumbnail">
			</div>
			<div class="form-group">
				<h3></h3>
				<p class="text-muted">want to delete this account</p>
				<div class="input-group m-t-20">
					<span class="input-group-btn"> 
				<!--		<input type="submit" class="btn btn-add" value="go to login page" name="go_to_login">  -->
						<div style="width:500px;">
							<div style="float: left; width: 100px"> 
								<input type="submit" class="btn btn-add" value="yes" name="YES">
							</div>
						</div>
						<a class="btn btn-warning" href="profile.php">no</a> 
					</span>
				</div>
			</div>	
		</form>
<?php
	}
	if(isset($_REQUEST["YES"]))
	{
		getUserDelete();
	}
	
	if(isset($_REQUEST["save"]))
	{
		registerRoutes();
	}
	if(isset($_REQUEST["save_station"]))
	{
		registerStation();
	}
	if(isset($_REQUEST["Add_bus"]))
	{
		AddBus();
	}
	if(isset($_REQUEST["GetStations"]))
	{
		
		getStations();
	}
	if(isset($_REQUEST["Payment"]))
	{
		Booking();
	}

?>
		
	

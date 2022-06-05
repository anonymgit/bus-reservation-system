<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
			<title>login</title>
			<!-- Favicon and touch icons -->
			<link rel="shortcut icon" href="assets/dist/img/ico/favicon.png" type="image/x-icon">
			<!-- Bootstrap -->
			<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
			<!-- Bootstrap rtl -->
			<!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
			 <!-- Pe-icon-7-stroke -->
			<link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
			<!-- style css -->
			<link href="assets/dist/css/stylecrm.css" rel="stylesheet" type="text/css"/>
			<!-- Theme style rtl -->
			<!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
		</head>
		<body>


			<!-- Content Wrapper -->
			<div class="container-center">
            <div class="login-area">
                <div class="panel panel-bd panel-custom">
                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-unlock"></i>
                            </div>
                            <div class="header-title">
                                <h3>Login</h3>
                                <small><strong>Please enter your credentials to login.</strong></small>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="dbOperationModule.php" id="loginForm" novalidate>
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="example@gmail.com" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">
                                <span class="help-block small">Your unique username to app</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
								<input type="checkbox" onClick="myFunction()">Show Password
								<script>
								function myFunction() {
									  var x = document.getElementById("password");
									  if (x.type === "password") {
										x.type = "text";
									  } else {
										x.type = "password";
									  }
									}
								</script>
                                <span class="help-block small">Your strong password</span>
                            </div>
                            <div>
                                <input type="submit" class="btn btn-add" value="login" name="login">
                                <a class="btn btn-warning" href="createUser.php">Register</a>
                            </div>
                        </form>
                        </div>
                        </div>
                </div>
            </div>
        </div>
	</html>

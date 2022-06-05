<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>RCET</title>
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
        <div class="login-wrapper">
           
            <div class="container-center lg">
             <div class="login-area">
                <div class="panel panel-bd panel-custom">
                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-unlock"></i>                            </div>
                            <div class="header-title">
                                <h3>Register Admin</h3>
                                <small><strong>Please enter Admin data to register.</strong></small>                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="dbOperationModule.php" method="get" novalidate>
                            <div class="row">
                             
                                <div class="form-group col-lg-6">
                                    <label>Username</label>
                                    <input type="text" value="" id="Uname" class="form-control" name="Uname">
                                    <span class="help-block small">Your unique username to app</span>						</div>
								<div class="form-group col-lg-6">
                                    <label>First name</label>
                                    <input type="text" value="" id="first_name" class="form-control" name="first_name">
                                    <span class="help-block small">Your first name</span>									</div>
								<div class="form-group col-lg-6">
                                    <label>Last name</label>
                                    <input type="text" value="" id="last_name" class="form-control" name="last_name">
                                    <span class="help-block small">Your last name</span>									</div>
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
                                    <input type="password" value="" id="password" class="form-control" name="Password">
                                    <span class="help-block small">Your hard to guess password</span>						</div>
                                <div class="form-group col-lg-6">
                                    <label>Repeat Password</label>
                                    <input type="password" value="" id="repeatpassword" class="form-control" name="repeatpassword">
                                    <span class="help-block small">Please repeat your password</span>						</div>
                                <div class="form-group col-lg-6">
                                    <label>Email Address</label>
                                    <input type="email" value="" id="email" class="form-control" name="Email">
                                    <span class="help-block small">Your address email to contact</span>						</div>
								<div class="form-group col-lg-6">
                                    <label>Phone Number</label>
                                    <input type="number" value="" id="Phone" class="form-control" name="Phone_number">
                                    <span class="help-block small">Your address Phone number to contact</span>				</div>
								<div class="form-group col-lg-6">
                                    <label>Address</label>
                                    <input type="text" value="" id="Address" class="form-control" name="Address">
                                    <span class="help-block small">Your address to contact</span>							</div>
								<div class="form-group col-lg-6">
                                    <label>City</label>
                                    <input type="text" value="" id="city" class="form-control" name="City">
                                    <span class="help-block small">Your city</span>											</div>
								<div class="form-group col-lg-6">
                                    <label>Pin code</label>
                                    <input type="text" value="" id="pincode" class="form-control" name="Pincode">
                                    <span class="help-block small">Your zipcode(pin code)</span>							</div>
								<div class="form-group col-lg-6">
                                    <label>state</label>
									<select name="State" id="State" class="form-control">
										<option value="Andhra Pradesh">Andhra Pradesh</option>
										<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
										<option value="Arunachal Pradesh">Arunachal Pradesh</option>
										<option value="Assam">Assam</option>
										<option value="Bihar">Bihar</option>
										<option value="Chandigarh">Chandigarh</option>
										<option value="Chhattisgarh">Chhattisgarh</option>
										<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
										<option value="Daman and Diu">Daman and Diu</option>
										<option value="Delhi">Delhi</option>
										<option value="Lakshadweep">Lakshadweep</option>
										<option value="Puducherry">Puducherry</option>
										<option value="Goa">Goa</option>
										<option value="Gujarat">Gujarat</option>
										<option value="Haryana">Haryana</option>
										<option value="Himachal Pradesh">Himachal Pradesh</option>
										<option value="Jammu and Kashmir">Jammu and Kashmir</option>
										<option value="Jharkhand">Jharkhand</option>
										<option value="Karnataka">Karnataka</option>
										<option value="Kerala">Kerala</option>
										<option value="Madhya Pradesh">Madhya Pradesh</option>
										<option value="Maharashtra">Maharashtra</option>
										<option value="Manipur">Manipur</option>
										<option value="Meghalaya">Meghalaya</option>
										<option value="Mizoram">Mizoram</option>
										<option value="Nagaland">Nagaland</option>
										<option value="Odisha">Odisha</option>
										<option value="Punjab">Punjab</option>
										<option value="Rajasthan">Rajasthan</option>
										<option value="Sikkim">Sikkim</option>
										<option value="Tamil Nadu">Tamil Nadu</option>
										<option value="Telangana">Telangana</option>
										<option value="Tripura">Tripura</option>
										<option value="Uttar Pradesh">Uttar Pradesh</option>
										<option value="Uttarakhand">Uttarakhand</option>
										<option value="West Bengal">West Bengal</option>
										</select>
                                   <!--<input type="text" value="" id="state" class="form-control" name="state"> -->
                                    <span class="help-block small">choose your state</span> 								</div>     
                            </div>
							
                            <div>
								<input type="hidden" name="UserType" value="ADMIN" >
								<input class="btn btn-warning" type="submit" value="register" name="registerAdmin">
								
								<!--
                                <button class="btn btn-warning">Register</button>
                                <a class="btn btn-add" href="login.html">Login</a>
								-->
                            </div>
                        </form>
                  </div>
               </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
        <!-- jQuery -->
        <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <!-- bootstrap js -->
        <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>
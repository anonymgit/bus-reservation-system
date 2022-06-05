<?php
	ob_start();
	session_start();
	include("UI.php");
	include("dbconnection.php");
	Start_1();
	Head_2();
	BodyStart_3();
	SetPreloader_4();
	BodyContentStart_5();
	Heading_6();
	SideBarMenu_7();
	BodyContainerStart_8();
	BodyHeader_9("Edit user details");
	$UserID=$_REQUEST["UserID"];
	
	
	if(isset($_REQUEST["update"]))
		updateUserProfile($UserID);
	elseif(isset($_REQUEST["delete"]))
		getUserDelete($UserID);
	else
		$row=getUserProfile($UserID);
?>
	
	 <div class="login-wrapper">
           
            <div class="container-center lg">
             <div class="login-area">
                <div class="panel panel-bd panel-custom">
                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-unlock"></i>                            </div>
                            <div class="header-title">
                                <h3>Edit details</h3>
                                <small><strong>Edit by Admin.</strong></small>                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="#" method="get" novalidate>
							<input type="hidden" value="<?php print($UserID); ?>" name="UserID">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Username</label>
                                    <input type="text"  id="Uname" class="form-control" name="Uname" value="<?php print($UserID);?>">
                                    <span class="help-block small">Your unique username to app</span>						</div>
								<div class="form-group col-lg-6">
                                    <label>First name</label>
                                    <input type="text" value="<?php print($row[0]["Fname"]); ?>" id="first_name" class="form-control" name="first_name">
                                    <span class="help-block small">Your first name</span>									</div>
								<div class="form-group col-lg-6">
                                    <label>Last name</label>
                                    <input type="text" value="<?php print($row[0]["Lname"]); ?>" id="last_name" class="form-control" name="last_name">
                                    <span class="help-block small">Your last name</span>									</div>
                                
                                <div class="form-group col-lg-6">
                                    <label>Email Address</label>
                                    <input type="email" value="<?php print($row[0]["EmailID"]); ?>" id="email" class="form-control" name="Email">
                                    <span class="help-block small">Your address email to contact</span>						</div>
								<div class="form-group col-lg-6">
                                    <label>Phone Number</label>
                                    <input type="number" value="<?php print($row[0]["Phone"]); ?>" id="Phone" class="form-control" name="Phone_number">
                                    <span class="help-block small">Your address Phone number to contact</span>				</div>
								<div class="form-group col-lg-6">
                                    <label>Address</label>
                                    <input type="text" value="<?php print($row[0]["Address"]); ?>" id="Address" class="form-control" name="Address">
                                    <span class="help-block small">Your address to contact</span>							</div>
								<div class="form-group col-lg-6">
                                    <label>City</label>
                                    <input type="text" value="<?php print($row[0]["City"]); ?>" id="city" class="form-control" name="City">
                                    <span class="help-block small">Your city</span>											</div>
								<div class="form-group col-lg-6">
                                    <label>Pin code</label>
                                    <input type="text" value="<?php print($row[0]["Pincode"]); ?>" id="pincode" class="form-control" name="Pincode">
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
								
								<input class="btn btn-add btn-sm" type="submit" value="update" name="update">
								<input class="btn btn-danger btn-sm" type="submit" value="delete" name="delete">
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
       
<?php
//	BodyContent_10();
	BodyContainerEnd_11();
	SetFooter_12();
	BodyEnd_13();
	End_14();
?>
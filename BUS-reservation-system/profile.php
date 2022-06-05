<?php


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
	BodyHeader_9("Profile");
	
?>
	
	<!-- Main content -->
		<section class="content">
		   <div class="row">
			  <div class="col-sm-12 col-md-4" style="width:100%;margin:auto;">
				 <div class="card">
					<div class="card-header">
					   <div class="card-header-headshot"></div>
					</div>
				   
					   
					   <div class="card-content-languages">
						  <div class="card-content-languages-group">
							 <div>
								<h4>Name:</h4>
							 </div>
							 <div>
								<ul>
								   <li>
										<?php getUserName();?>
									  <div class="fluency fluency-4"></div>
								   </li>
								</ul>
							 </div>
						  </div>
						  
						  <div class="card-content-languages-group">
							 <span>
								<h4>Phone number:</h4>
							 </span>
							 <div>
								<ul>
								   <li><?php getUserPhone(); ?></li>
								</ul>
							 </div>
						  </div>
						  
						  <div class="card-content-languages-group">
							 <span>
								<h4>Email Id:</h4>
							 </span>
							 <div>
								<ul>
								   <li><?php getUserEmailID(); ?></li>
								</ul>
							 </div>
						  </div>
						  
						  <div class="card-content-languages-group">
							 <span>
								<h4>Address:</h4>
							 </span>
							 <div>
								<ul>
								   <li><?php getUserAddress(); ?></li>
								</ul>
							 </div>
						  </div>
						  
						  <div class="card-content-languages-group">
							 <span>
								<h4>City:</h4>
							 </span>
							 <div>
								<ul>
								   <li><?php getUserCity(); ?></li>
								</ul>
							 </div>
						  </div>
						  
						  <div class="card-content-languages-group">
							 <span>
								<h4>State:</h4>
							 </span>
							 <div>
								<ul>
								   <li><?php getUserState(); ?></li>
								</ul>
							 </div>
						  </div>
						  
						  <div class="card-content-languages-group">
							 <span>
								<h4>Pincode:</h4>
							 </span>
							 <div>
								<ul>
								   <li><?php getUserPincode(); ?></li>
								</ul>
							 </div>
							 <div style="width:1000px;">
							 <div style="float: right; width: 125px"> 
								<form action="dbOperationModule.php" method="get">
									<input class="btn btn-warning" type="submit" value="delete profile"  name="deleteAccount">
								</form>
							</div>
							<div style="float:right; width: 130px"> 
								<form  action="updateProfile.php" method="get">
									<input class="btn btn-warning" type="submit" value="update profile" name="updateProfile">
								</form>
							</div>
							
						</div>
						  </div>
					   </div>	
					</div>
			  </div>         
		</section>
<?php
//	BodyContent_10();
	BodyContainerEnd_11();
	SetFooter_12();
	BodyEnd_13();
	End_14();
?>
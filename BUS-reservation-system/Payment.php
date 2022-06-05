<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<lint href="//use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet" id="bootstrap-css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>payment</title>
</head>

<body>



<?php
include("dbconnection.php");
if(isset($_REQUEST["BookTicket"]))
{
		$NoOfPerson=$_SESSION["NoOfPerson"];
		$SourceStationID=$_SESSION["SourceStationID"];
		$DestinationStationID=$_SESSION["DestinationStationID"];
		$BusID=$_SESSION["BusID"];
		
		
?>
		


<!------ Include the above in your HEAD tag ---------->
<div class="container">
	<div class="row justify-content-center">

	   <div class="col-md-6 offset-md-3">
			<span class="anchor" id="formPayment"></span>
			<hr class="my-5">
	
			<!-- form card cc payment -->
			<div class="card card-outline-secondary">
				<div class="card-body">
					<h3 class="text-center">Ticket Payment</h3>
					<hr>
					
					<form class="form"  action="dbOperationModule.php" method="get" role="form" autocomplete="off">
						<div class="form-group">
							<label for="cc_name">Card Holder's Name</label>
							<input type="text" class="form-control" id="cc_name" pattern="\w+ \w+.*" title="First and last name" required="required" name="CardHoldername">
						</div>
						<div class="form-group">
							<label>Card Number</label>
							<input type="text" class="form-control" autocomplete="off" maxlength="20" pattern="\d{16}" title="Credit card number" required="" name="CardNumber">
						</div>
						<div class="form-group row">
							<label class="col-md-12">Card Exp. Date</label>
							<div class="col-md-4">
								<select class="form-control" name="cc_exp_mo" size="0" name="CardExpMonth">
									<option value="01">01</option>
									<option value="02">02</option>
									<option value="03">03</option>
									<option value="04">04</option>
									<option value="05">05</option>
									<option value="06">06</option>
									<option value="07">07</option>
									<option value="08">08</option>
									<option value="09">09</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
								</select>
							</div>
							<div class="col-md-4">
								<select class="form-control" name="cc_exp_yr" size="0" name="CardExpYear">
									<option>2018</option>
									<option>2019</option>
									<option>2020</option>
									<option>2021</option>
									<option>2022</option>
									<option>2023</option>
									<option>2024</option>
									<option>2025</option>
									<option>2026</option>
									<option>2027</option>
									<option>2028</option>
									<option>2029</option>
									<option>2030</option>
	
	
								</select>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control" autocomplete="off" maxlength="3" pattern="\d{3}" title="Three digits at back of your card" required="" placeholder="CVC" >
							</div>
						</div>
						<div class="row">
							<label class="col-md-12">Amount</label>
						</div>
						<div class="form-inline">
							<div class="input-group">
								<div class="input-group-prepend"><span class="input-group-text">$</span></div>
								<input type="text" class="form-control text-right" id="exampleInputAmount" value="<?php print($_REQUEST["TotalAmount"]); ?>">
								<div class="input-group-append"><span class="input-group-text">.00</span></div>
							</div>
						</div>
						<hr>
						<div class="form-group row">
							<div class="col-md-6">
								<input type="reset" class="btn btn-default btn-lg btn-block" value="Cancel" />
							</div>
							<div class="col-md-6">
								<input type="hidden" value="<?php print($BusID); ?>" name="BusID" />
								<input type="hidden" value="<?php print($_REQUEST["JourneyDate"]); ?>" name="JourneyDate" />
								<input type="hidden" value="<?php print($NoOfPerson); ?>" name="NoOfPerson" />
								<input type="hidden" value="<?php print($SourceStationID); ?>" name="SourceStationID" />
								<input type="hidden" value="<?php print($DestinationStationID); ?>" name="DestinationStationID" />
								<input type="hidden" value="<?php print($_REQUEST["TotalAmount"]); ?>" name="TotalAmount" />
	
								<?php
								for($i=0;$i<$NoOfPerson;$i++)
								{
								?>
									<input type="hidden" value="<?php print($_REQUEST["PassengerName".$i]); ?>" name="PassengerName<?php print($i); ?>"  />
									<input type="hidden" value="<?php print($_REQUEST["Age".$i]); ?>" name="Age<?php print($i); ?>"  />
									<input type="hidden" value="<?php print($_REQUEST["Phone".$i]); ?>" name="Phone<?php print($i); ?>"  />
									<input type="hidden" value="<?php print($_REQUEST["Sex".$i]); ?>" name="Sex<?php print($i); ?>"  />
								<?php	
								}
								?>
								<input type="submit" class="btn btn-success btn-lg btn-block" value="<?php print($_REQUEST["TotalAmount"]."Rs/-"); ?>  PAY"  name="Payment"/>
								
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
                    <!-- /form card cc payment -->
                
                <p class="copyright" style="text-align:center;padding:40px 0;">After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order.</p>

<?php
}
?>


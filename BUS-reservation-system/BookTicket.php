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
	BodyHeader_9("enter details"); 
	if(isset($_REQUEST["RouteID"]))
	{
		$_SESSION["RouteID"]=$_REQUEST['RouteID'];
		$_SESSION["BusName"]=$_REQUEST['BusName'];
		$_SESSION["BusID"]=$_REQUEST['BusID'];
	}
	

	
							
?>
<div class="login-wrapper">
	 <div class="login-area">
		<div class="panel panel-bd panel-custom">
			<div class="panel-body">
					<div class="row">
						<div class="form-group col-sm-4">
							<marquee>
							<strong style="font-size:30px;"> BUS NAME : <?php print($_SESSION["BusName"]); ?> </strong>
							</marquee>
						</div>
						<div class="form-group col-sm-5">
							<marquee>
							<strong style="font-size:30px;"> ROUTE NAME : <?php $row=getRouteName($_SESSION["RouteID"]); print($row[0]['RouteName']); ?> </strong>
							</marquee>
						</div>
					</div>
					<form action="#" method="get" >
					<div class="form-group col-sm-2">
								 <label>Source</label>
								 <select class="form-control" name="SourceStationID">
								<?php
									
									$row=getBusStation($_SESSION["BusID"]);
									for($i=0;$i<sizeof($row);$i++)
									{
								?>
									<option value="<?php print($row[$i]['StationID']);?>"><?php print($row[$i]['Name']);?></option>
									
								<?php
									}
								?>
									
								 </select>
							</div>
							<div class="form-group col-sm-2">
								 <label>Destination	</label>
								 <select class="form-control" name="DestinationStationID">
								<?php
									$row=getBusStation($_SESSION["BusID"]);
									for($i=0;$i<sizeof($row);$i++)
									{
								?>
									<option value="<?php print($row[$i]['StationID']);?>"><?php print($row[$i]['Name']);?></option>
									
								<?php
									}
								?>
									
								 </select>
							</div>
					
							
							<div class="form-group col-lg-2">
								<label>No. of person to book tickets</label>
								<input type="text" value="" id="BookTicket" class="form-control" name="Person">
								<span class="help-block small">enter person</span>									
							</div>
							<div class="form-group col-lg-2">
								<label>Journey Date</label>
								<input type="Date" value="" id="date" class="form-control" name="JourneyDate">
								<span class="help-block small">Choose Date</span>									
							</div>
							<div class="reset-button col-sm-2">
								<br>
								<input type="submit" value="save" name="save" class="btn btn-warning">
							</div>
							</form>
						
				
			</div>
		</div>
	</div>
</div>

<?php
if(isset($_REQUEST["save"]))
{
	
?>
	<div class="login-wrapper">    
		
		 <div class="login-area">
			<div class="panel panel-bd panel-custom">
				<div class="panel-heading">
					<div class="view-header">
					</div>
				</div>
				<div class="panel-body">
					<form action="Payment.php" method="get" >
				<?php
					$_SESSION["NoOfPerson"]=$_REQUEST["Person"];
					$_SESSION["SourceStationID"]=$_REQUEST["SourceStationID"];
					$_SESSION["DestinationStationID"]=$_REQUEST["DestinationStationID"];
					for($i=0;$i<$_REQUEST["Person"];$i++)
					{
				?>
					
						<div class="row">
						
							<div class="form-group col-lg-3">
								<label>passenger name</label>
								<input type="text" placeholder=" name..." value="" id="passenger_name" class="form-control" name="PassengerName<?php print($i); ?>">
								<span class="help-block small">passenger name</span>									
							</div>
							<div class="form-group col-lg-1">
								<label>Age</label>
								<input type="text" placeholder="Age..." value="" id="Age" class="form-control" name="Age<?php print($i); ?>">
								<span class="help-block small">Your Age</span>							
							</div>
							<div class="form-group col-lg-3">
								<label>Phone Number</label>
								<input type="number" placeholder="number..." value="" id="Phone" class="form-control" name="Phone<?php print($i); ?>">
								<span class="help-block small">Your address Phone number to contact</span>				
							</div>
							
							<div class="form-group col-lg-1">
								<label>sex</label>
								<select name="Sex<?php print($i); ?>" id="gender" class="form-control" placeholder="gender..."> >
									<option value="male">male</option>
									<option value="female">female</option>
								</select>
								<span class="help-block small">gender</span> 						
							</div> 
						</div>
					
					<?php
					}
					$rows=getSourceFare($_SESSION["SourceStationID"]);
					$SourceFare=$rows[0]['FareFromOrigin'];
					$row=getDestinationFare($_SESSION["DestinationStationID"]);
					$DestinationFare=$row[0]['FareFromOrigin'];
					$TotalPerson=$_REQUEST["Person"];
					$TotalFare=abs($SourceFare-$DestinationFare);
					$TotalAmount=abs($TotalFare*$TotalPerson);
					
					?>
					<div class="form-group col-lg-2">
						<label>Total Amount:</label>
						 <strong><?php print($TotalAmount ." Rs"); ?>	</strong>
						<span class="help-block small">Total Amount to pay</span> 						
					</div> 
					<div class="form-group col-lg-3">
						<input type="hidden" name="TotalAmount" value="<?php print($TotalAmount); ?>"  />
						<input type="hidden" name="JourneyDate" value="<?php print($_REQUEST["JourneyDate"]); ?>"  />
						<input class="btn btn-warning" type="submit" value="Pay and Book Ticket" name="BookTicket">
					</div>	
				</form>
				</div>
				
				
					
			 </div>
		</div>
	</div>
<?php
}
?>
        

								
	 
<?php
	
//	BodyContent_10();
	BodyContainerEnd_11();
	SetFooter_12();
	BodyEnd_13();
	End_14();
?>
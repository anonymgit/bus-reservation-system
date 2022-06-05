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
	BodyHeader_9("Booking History"); 
?>
	<div class="row">
		<div class="col-sm-12">
		 	<div class="panel panel-bd lobidrag">
					<div class="panel-heading">
					   <div class="btn-group" id="buttonexport">
						  <a href="#">
							 <h4>Booking History</h4>
						  </a>
					   </div>
					</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table id="dataTableExample1" class="table table-bordered table-striped table-hover">
							<thead>
							<?php $row=getAllBookingHistory(); ?>
								<tr class="info">
									
									<th>PNR number</th>
									<th>UserID</th>
									<th>Persons</th>
									<th>Booking Date</th>
									<th>Journey Date</th>
									<th>Boarding Time</th>
									<th>Source Station</th>
									<th>Destination Station</th>
									<th>status</th>
								</tr>
							</thead>
							<tbody>
<?php								for($i=0;$i<sizeof($row);$i++)
									{
?>
								<tr>
									<td> <?php print($row[$i]['PNRnumber']); ?> </td>
									<td> <?php print($row[$i]['UserID']); ?> </td>
									<td> <?php print($row[$i]['NoOfPerson']); ?> </td>
									<td> <?php print($row[$i]['DateTime']); ?> </td>
									<td> <?php print($row[$i]['JourneyDate']); ?> </td>
									<td> <?php print($row[$i]['BoardingTime']); ?> </td>
									<td> <?php print($row[$i]['SourceStation']); ?> </td>
									<td> <?php print($row[$i]['DestinationStation']); ?> </td>
									<td><span class="label-custom label label-default" >Booked</span>
									</td>
									
								</tr>
<?php
									}
?>
							</tbody>
						</table>
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
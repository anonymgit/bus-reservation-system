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
	BodyHeader_9("TICKET"); 
?><style type="text/css">
<!--
.style1 {font-size: 24px}
-->
</style>
	  <div class="content">
               <div class="row">
                  <div class="col-sm-12 col-md-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>TICKET </h4>
                           </div>
                        </div>
                        <div class="panel-body">
						<?php 
						$_SESSION["PNRnumber"]=$_REQUEST["PNRnumber"];
						
						$row=getBookingMaster($_REQUEST["PNRnumber"]);	 
						?>
							<table width="1186" height="199" border="0" cellspacing="0">
                            <tr>
                              <td>PNR Number: <?php print($row[0]['PNRnumber']); ?> </td>
							  <td>Bus Name: <?php print($row[0]['BusName']); ?></td>
                            </tr>
							<tr>
                              <td>Booking Date: <?php print($row[0]['DateTime']); ?></td>
							  <td>Journey Date: <?php print($row[0]['JourneyDate']); ?></td>
                            </tr>
							<tr>
                              <td>Boarding Station: <?php print($row[0]['SourceStation']); ?></td>
							  <td>Destination Station: <?php print($row[0]['DestinationStation']); ?></td>
                            </tr>
							<tr>
                              <td>Total Passengers:<?php print($row[0]['NoOfPerson']); ?></td>
							  <td>Boarding Time:<?php print($row[0]['BoardingTime']); ?></td>
                            </tr>
							
							
							
                          <table width="1186" height="199" border="0" cellspacing="0">
                            <tr>
                              <th width="396"><strong>PASSENGER NAME </strong></th>
                              <th width="146"><strong>Age </strong></th>
                              <th width="160"><strong>Fare</strong></th>
                             
                            </tr>
                            <?php
							$row=getBookingDetails($_REQUEST["PNRnumber"]);
							for($i=0;$i<sizeof($row);$i++)
							{
?>
                            <tr>
                              <td><?php print($row[$i]['PassengerName']);?></td>
                              <td><?php print($row[$i]['Age']);?></td>
                              <td><?php print($row[$i]['TotalFare']." Rs");?></td>
                            </tr>
                            <?php
							
							}
							
							
							
?>
                          </table>
                          <p>&nbsp;</p>
                       </div>
                        <div class="panel-footer">
                           <div class="row">
						   		<div class="text-right" style="float:left; width:1350px">
									<input type="button" value="Download Ticket" class="btn btn-danger btn-sm" onclick="PrintTicket(<?php print($_REQUEST["PNRnumber"]);?>)">
								</div>
						   </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
			
	 		<script>
				function PrintTicket(PNR)
				{
					
					window.open("DownloadTicket.php?PNRnumber="+PNR);
				}
			</script>
<?php
	
//	BodyContent_10();
	BodyContainerEnd_11();
	SetFooter_12();
	BodyEnd_13();
	End_14();
?>
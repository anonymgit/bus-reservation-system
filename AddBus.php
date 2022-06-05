<?php
	include("UI.php");
	include("dbconnection.php");
	Start_1();
	Head_2();
	BodyStart_3();
	//SetPreloader_4();
	BodyContentStart_5();
	Heading_6();
	SideBarMenu_7();
	BodyContainerStart_8();
	BodyHeader_9("Add Bus"); 
?>

 
 
 <section class="content">
		<div class="row" >
			<div class="col-sm-12 ">
				<div class="panel panel-bd lobidrag lobipanel lobipanel-sortable" >
					<div class="panel-body">
					   <form action="#" method="get" class="col-sm-12">
							  <div class="form-group col-sm-4">
								 <label>select route</label>
								 <select class="form-control" name="RouteID">
								 <?php
									$row=getRoutes();
									for($i=0;$i<sizeof($row);$i++)
									{
								?>
									<option value="<?php print($row[$i]['RouteID']);?>"><?php print($row[$i]['RouteName']);?></option>
									
								<?php
									}
								?>
								 </select>
							  </div>
							  <div class="reset-button col-sm-2">
								 <br>
								 <input type="submit" value="show station" name="show_station" class="btn btn-warning">
							  </div>
						</form>
						<form action="dbOperationModule.php" method="get" >
						<div class="form-group col-sm-4" >
							<label>Bus Name :</label>
							<input class="form-control" type="text" name="BusName"  />
						</div>		
					</div>
				<div>
													
					<div class="table-responsive" >
						<table id="dataTableExample1" class="table table-bordered table-striped table-hover">
					
							<tr>
							  <th width="100"><strong>Station Name </strong></th>
							  <th width="50"><strong>Arrival Time</strong></th>
							  <th width="50"><strong>Departure Time</strong></th>
							</tr>
					<?php	
					
							if(isset($_REQUEST["show_station"]))
							{
								$row=getStationName($_REQUEST["RouteID"]);
								$RouteID=$_REQUEST["RouteID"];
								for($i=0;$i<sizeof($row);$i++)
								{
								
					?>
						   <tr>
							  <td><?php print($row[$i]['Name']); ?> <input type="hidden" name="StationID<?php print($i); ?>" value="<?php print($row[$i]['StationID']); ?>" /></td>
							  
							  <td><input type="time" name="ArrivalTime<?php print($i); ?>" /></td>
							  <td><input type="time" name="DepartureTime<?php print($i); ?>" /></td>
							</tr>
					<?php
								}
							}
					?>
					  </table>
					<div style="float:right; width:100px;">
						<input type="hidden" name="size" value="<?php print(sizeof($row));?>">
						<input type="hidden" name="RouteID" value="<?php print($RouteID);?>">
						<input type="submit" value="Add bus" name="Add_bus" class="btn btn-warning  " > 
					</div>
					</div>
					</form>
							
						 
					</form>
				</div>
				<div class="table-responsive" >
					  <table id="dataTableExample1" class="table table-bordered table-striped table-hover" >
						 <thead>
							<tr class="info">
							   <th>Route name</th>
							   <th>Bus name</th>
							   <th>Bus ID</th>
							  
							</tr>
						 </thead>
						 <tbody>
<?php
	
							$row=getBus();
							for($i=0;$i<sizeof($row);$i++)
							{
?>
							<tr>
							   <td><?php print($row[$i]['RouteName']); ?></td>
							   <td><?php print($row[$i]['BusName']); ?></td>
							   <td><?php print($row[$i]['BusID']); ?></td>
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
			   
</section>
            

<?php
	
//	BodyContent_10();
	BodyContainerEnd_11();
	SetFooter_12();
	BodyEnd_13();
	End_14();
?>
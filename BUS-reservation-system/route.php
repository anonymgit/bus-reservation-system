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
	BodyHeader_9("Routes"); 
?>

	<section class="content">
               <div class="row"  >
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag lobipanel lobipanel-sortable" >
                        <div class="panel-body" >
                           <form action="dbOperationModule.php" method="get" class="col-sm-8">
                              <div class="form-group col-sm-5">
                                 <label>Route name</label>
                                <input type="text" name="route" class="form-control" />
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
			
               <div class="row" >
                  <!-- Form controls -->
                  <div class="col-sm-12 ">
                     <div class="panel panel-bd lobidrag lobipanel lobipanel-sortable" >

					  <div class="panel-body">
                           <form action="dbOperationModule.php" method="get" class="col-sm-12">
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
								  <div class="form-group col-sm-4">
									 <label>Station Name</label>
									 	<input class="form-control" type="text" value="" name="Name">
								  </div>
								  <div class="form-group col-sm-2">
									 <label>fare from origin</label> 
									 <input class="form-control" type="text" value="" name="fare">
								  </div>
								  <div class="reset-button col-sm-2">
									 <br>
									 <input type="submit" value="save station" name="save_station" class="btn btn-warning">
								  </div>
							</form>
						</div>
						<div class="table-responsive" style="height:300px; overflow:scroll;">
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover" >
                                 <thead>
                                    <tr class="info">
                                       <th>Route name</th>
                                       <th>Station name</th>
                                       <th>Fair</th>
                                      
                                    </tr>
                                 </thead>
                                 <tbody>
<?php
			
									$row=getAllRoutes();
									for($i=0;$i<sizeof($row);$i++)
									{
?>
                                    <tr>
                                       <td><?php print($row[$i]['RouteName']); ?></td>
                                       <td><?php print($row[$i]['Name']); ?></td>
                                       <td><?php print($row[$i]['FareFromOrigin']." Rs."); ?></td>
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
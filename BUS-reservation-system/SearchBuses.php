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
	BodyHeader_9("Find Bus");
?>
	
	
	<section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12 " >
                     <div class="panel panel-bd lobidrag lobipanel lobipanel-sortable" >      
                        <div class="panel-body">
                           <form action="#" method="get" class="col-sm-12">
						   		<div class="form-group col-sm-5">
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
									 <input class="btn btn-warning" type="submit" value="Find Bus" name="GetStations" />
                              	</div>
						 
                             
                           </form>
						  
                             
                        </div>
                     </div>
                  </div>
               </div>
            
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12 " >
                     <div class="panel panel-bd lobidrag lobipanel lobipanel-sortable" >
                        
                        <div class="panel-body">
                           <div class="table-responsive" style="height:400px; overflow:scroll;">
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>Bus name</th>
                                      
                                       <th>Route ID</th>
                                       <th>status</th>
                                       
                                    </tr>
                                 </thead>
                                 <tbody>
								 <form action="BookTicket.php" method="get">
<?php	
				
									if(isset($_REQUEST["GetStations"]))
									{
										$row=getStations($_REQUEST["RouteID"]);
										for($i=0;$i<sizeof($row);$i++)
										{
										
?>
									
									
                                    <tr>
                                       <td><?php print($row[$i]["BusName"]); ?> </td>
                                       <td><?php print($row[$i]["RouteID"]); ?></td>
                                      
                                       <td>
									   	
                                       		<a class="btn btn-danger btn-sm" href="BookTicket.php?RouteID=<?php print($row[$i]['RouteID']);?>&BusName=<?php print($row[$i]['BusName']); ?>&BusID=<?php print($row[$i]['BusID']); ?>">Book ticket</a>
									<!--	<a class="btn btn-danger btn-sm" href="BookTicket.php">Book ticket</a> -->
										
                                      </td>
                                    </tr>
									
<?php
									}	
									}
?>
									</form>
                                 </tbody>
                              </table>
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
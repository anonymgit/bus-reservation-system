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
	BodyHeader_9("Bus details"); 
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
                              <h4>Bus Details</h4>
                           </div>
                        </div>
                        <div class="panel-body">
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
								 <label>select Bus</label>
								 <select class="form-control" name="RouteID">
								 <?php
									$row=getBus();
									for($i=0;$i<sizeof($row);$i++)
									{
								?>
									<option value="<?php print($row[$i]['BusID']);?>"><?php print($row[$i]['BusName']);?></option>
									
								<?php
									}
								?>
								 </select>
							  </div>
							  <table width="1186" height="199" border="0" cellspacing="0">
								<tr>
								  <th width="456"><strong>Station Name </strong></th>
								  <th width="154"><strong>Arrival Time</strong></th>
								  <th width="73"><strong>Departure Time</strong></th>
								</tr>
							   <tr>
								  <td>&nbsp;</td>
								  <td>&nbsp;</td>
								  <td>&nbsp;</td>
								</tr>
						  </table>
                          <p>&nbsp;</p>
                       </div>
                        <div class="panel-footer">
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
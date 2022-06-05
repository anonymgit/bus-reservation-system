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
	BodyHeader_9("All Users");
	
?>
	 <div class="table-responsive">
		  <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
			 <thead>
				<tr class="info">
				   <th>AdminID</th>
				   <th>Email ID</th>
				   <th>Fname</th>
				   <th>Lname</th>
				   <th>Phone</th>
				   <th>City</th>
				   <th>state</th>
				   <th>status</th>
				   <th>Action</th>
				</tr>
			 </thead>
			 <tbody>
<?php
			
			$row=getAllAdmin();
			for($i=0;$i<sizeof($row);$i++)
			{
?>
				<tr>
				   <td><?php print($row[$i]['UserID']); ?></td>    
				   <td><?php print($row[$i]['EmailID']);?></td>
				   <td><?php print($row[$i]['Fname']);?></td>
				   <td><?php print($row[$i]['Lname']);?></td>
				   <td><?php print($row[$i]['Phone']);?></td>
					<td><?php print($row[$i]['City']);?></td>
				   <td><?php print($row[$i]['State']);?></td>
				   <td><span class="label-custom label label-default" ><?php print($row[$i]['Status']); ?> </span>
				   </td>
				    <td>	
						<a class="btn btn-add btn-sm" href="userEdit.php?UserID=<?php print($row[$i]['UserID']);?>">edit</a>
					<!--	<a class="btn btn-danger btn-sm" href="dbOperationModule.php">delete</a>  -->
						<a class="btn btn-danger btn-sm" href="userEdit.php?UserID=<?php print($row[$i]['UserID']);?>">delete</a> 
                    </td>
				</tr>
				
<?PHP
			}
?>
			 </tbody>
		  </table>
	   </div>
<?php
//	BodyContent_10();
	BodyContainerEnd_11();
	SetFooter_12();
	BodyEnd_13();
	End_14();
?>
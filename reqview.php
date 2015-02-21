<html>
	<head>
	</head>

	<body>
		<form method='POST' action='approve.php' name='reqForm'>
			<table>
				<?php
					$empNum = $_GET['e'];
					$request = $_GET['r'];
					$_SESSION['request'] = $request;
					$link = mysqli_connect("0.0.0.0", "admin", "Jeremy03", "EmployeeMasterFile") or die("Error " . mysqli_error($link));
					$query = "SELECT lastname, firstname, middlename FROM employeemasterfile.employee where empnum='$empNum'";
					$result = $link->query($query);
					$rows = mysqli_fetch_array($result);
					$lastname = $rows[0];
					$firstname = $rows[1];
					$middlename = $rows[2];

				if($_GET['pend'] == 1){
					$query = "SELECT * from employeemasterfile.leaverequest where leavereqnum='$request'";
					$result = $link->query($query);
					$rows = mysqli_fetch_array($result);
					$empnum = $rows[0];
					$dateissued = $rows[1];
					$dateab = $rows[2];				
					$reason = $rows[3];				
					$status = $rows[4];				
					$enddate = $rows[6];				
					$type = $rows[7];							
				?>
				<a href='requestApproval.php?pend=1'>[X close this]
<div class='icon-viewer'><a name='act' value='Reject'>
                            <button class='ion-ios-close-outline'name='act' value='Reject'>&nbsp;Reject</button></a>
            </div>
							<div class='icon-viewer'><a name='act' value='Approve'>
              <button class='ion-android-checkbox-outline'name='act' value='Approve'>&nbsp;Approve</button></a>
            </div>
				<tr>
					<td><img src='images/p.jpg'></td>
					<td>
						<table>
							<tr>
								<td valign='top'>Request Number:</td>
								<td><?php echo $request?></td>
							</tr>

							<tr>
								<td>Employee Number:</td>
								<td><?php echo $empnum?></td>
							</tr>
							
							<tr>
								<td>Name</td>
								<td><?php echo $lastname . ", " . $firstname . " " . $middlename?></td>
							</tr>
							
							<tr>
								<td>Date Issued:</td>
								<td><?php echo $dateissued?></td>
							</tr>
						
							<tr>
								<td>Leave Starting Date:</td>
								<td><?php echo $dateab?></td>
							</tr>

							<tr>
								<td>Leave Ending Date:</td>
								<td><?php echo $enddate?></td>
							</tr>

							<tr>	
								<td>Type of Leave:</td>
								<td><?php echo $type?></td>
							</tr>

							<tr>
								<td>Reason:</td>
							<td><?php echo $reason?></td>
							</tr>

							<tr>
								<td>Remarks: </td>
								<td><textarea name='remarks'></textarea></td>
							</tr>

							
							
						</table>
					</td>
				</tr>	
			

				<?php
				}

				else if($_GET['pend'] == 2){
					$query = "SELECT * from employeemasterfile.loanrequest where loanreqnum='$request'";
					$result = $link->query($query);
					$rows = mysqli_fetch_array($result);
					$empnum = $rows[0];
					$dateissued = $rows[1];
					$reason = $rows[3];				
					$status = $rows[4];				
					$type = $rows[5];							
				?>
				<a href='requestApproval.php?pend=1'>[X close this]
<div class='icon-viewer'><a name='act' value='Reject'>
                            <button class='ion-ios-close-outline'name='act' value='Reject'>&nbsp;Reject</button></a>
            </div>
							<div class='icon-viewer'><a name='act' value='Approve'>
              <button class='ion-android-checkbox-outline'name='act' value='Approve'>&nbsp;Approve</button></a>
            </div>
				<tr>
					<td><img src='images/p.jpg'></td>
					<td>
						<table>
							<tr>
								<td valign='top'>Request Number:</td>
								<td><?php echo $request?></td>
							</tr>

							<tr>
								<td>Employee Number:</td>
								<td><?php echo $empnum?></td>
							</tr>
							
							<tr>
								<td>Name</td>
								<td><?php echo $lastname . ", " . $firstname . " " . $middlename?></td>
							</tr>
							
							<tr>
								<td>Date Issued:</td>
								<td><?php echo $dateissued?></td>
							</tr>
						
							<tr>	
								<td>Type of Loan:</td>
								<td><?php echo $type?></td>
							</tr>

							<tr>
								<td>Reason:</td>
							<td><?php echo $reason?></td>
							</tr>

							<tr>
								<td>Remarks: </td>
								<td><textarea name='remarks'></textarea></td>
							</tr>

							
							
						</table>
					</td>
				</tr>

				<?php 
				}

				else if($_GET['pend'] == 3){
					$query = "SELECT * from employeemasterfile.otrequest where otnum='$request'";
					$result = $link->query($query);
					$rows = mysqli_fetch_array($result);
					$empnum = $rows[0];
					$dateissued = $rows[1];
					$reason = $rows[2];				
					$status = $rows[3];				
					$numhours = $rows[5];							
				?>
<a href='requestApproval.php?pend=1'>[X close this]
<div class='icon-viewer'><a name='act' value='Reject'>
                            <button class='ion-ios-close-outline'name='act' value='Reject'>&nbsp;Reject</button></a>
            </div>
							<div class='icon-viewer'><a name='act' value='Approve'>
              <button class='ion-android-checkbox-outline'name='act' value='Approve'>&nbsp;Approve</button></a>
            </div>
				<tr>
					<td><img src='images/p.jpg'></td>
					<td>
						<table>
							<tr>
								<td valign='top'>Request Number:</td>
								<td><?php echo $request?></td>
							</tr>

							<tr>
								<td>Employee Number:</td>
								<td><?php echo $empnum?></td>
							</tr>
							
							<tr>
								<td>Name</td>
								<td><?php echo $lastname . ", " . $firstname . " " . $middlename?></td>
							</tr>
							
							<tr>
								<td>Date Issued:</td>
								<td><?php echo $dateissued?></td>
							</tr>
						
							<tr>
								<td>Reason:</td>
							<td><?php echo $reason?></td>
							</tr>
							
							<tr>	
								<td>Number of Hours:</td>
								<td><?php echo $numhours?></td>
							</tr>

							<tr>
								<td>Remarks: </td>
								<td><textarea name='remarks'></textarea></td>
							</tr>

							
							<a href='requestApproval.php?pend=3'>[close this]</a></td>
							</tr>
						</table>
					</td>
				</tr>	

				<?php 
				}

				else if($_GET['pend'] == 4){
					$query = "SELECT * from employeemasterfile.utrequest where utnum='$request'";
					$result = $link->query($query);
					$rows = mysqli_fetch_array($result);
					$empnum = $rows[0];
					$dateissued = $rows[1];
					$reason = $rows[3];				
					$status = $rows[4];				
					$timeout = $rows[6];							
				?>
				<a href='requestApproval.php?pend=1'>[X close this]
				<div class='icon-viewer'><a name='act' value='Reject'>
                            <button class='ion-ios-close-outline'name='act' value='Reject'>&nbsp;Reject</button></a>
            </div>
							<div class='icon-viewer'><a name='act' value='Approve'>
              <button class='ion-android-checkbox-outline'name='act' value='Approve'>&nbsp;Approve</button></a>
            </div>

				<tr>
					<td><img src='images/p.jpg'></td>
					<td>
						<table>
							<tr>
								<td valign='top'>Request Number:</td>
								<td><?php echo $request?></td>
							</tr>

							<tr>
								<td>Employee Number:</td>
								<td><?php echo $empnum?></td>
							</tr>
							
							<tr>
								<td>Name</td>
								<td><?php echo $lastname . ", " . $firstname . " " . $middlename?></td>
							</tr>
							
							<tr>
								<td>Date Issued:</td>
								<td><?php echo $dateissued?></td>
							</tr>
													
							<tr>	
								<td>Expected Time Out:</td>
								<td><?php echo $timeout?></td>
							</tr>

							<tr>
								<td>Reason:</td>
							<td><?php echo $reason?></td>
							</tr>

							<tr>
								<td>Remarks: </td>
								<td><textarea name='remarks'></textarea></td>
							</tr>

							
							
					<?php 
						}?>
						</table>
					</td>
				</tr>	
			</table>
		</form>
	</body>
</html>
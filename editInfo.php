<?php
	error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Edit Info</title>
	</head>
	<body>
		<?php
			if ($_SESSION['hrFunction'] == true){
				$username = $_SESSION['search'];
			}
			else{
				$username = $_SESSION['empNum'];
			}
            $query = "SELECT * from employeemasterfile.employee where empNum = '$username'" or die("Error. " . mysqli_error($link));
			$result = conString($query);
		    while($rows = mysqli_fetch_array($result)){
		    	$employeeNum = $rows[0];
		    	$lastName = $rows[1];
		    	$firstName = $rows[2];
		    	$middleName = $rows[3];
        	    $address = $rows[4];
				$date = new datetime($rows[5]);
                $month = $date->format('m');
                $day = $date->format('d');
                $year = $date->format('Y');
                $gender = $rows[11];
                $conNum = $rows[6];
                $poscode = $rows[7];
                $rate = $rows[8];
                $nationality = $rows[9];
                $maritalStatus = $rows[10];
            }

            $query = "SELECT * from employeemasterfile.birmasterfile where employeeNumber = '$username'" or die("Error. " . mysqli_error($link));
            $result = conString($query);
            while($rows = mysqli_fetch_array($result)){
            	$tin = $rows[1];
            	$dependents = $rows[2];
            }

            $query = "SELECT * from employeemasterfile.pagibigmasterfile where employeeNumber = '$username'" or die("Error. " . mysqli_error($link));
            $result = conString($query);
            while($rows = mysqli_fetch_array($result)){
            	$pagibig = $rows[1];
            }

            $query = "SELECT * from employeemasterfile.philhealthmasterfile where employeeNumber = '$username'" or die("Error. " . mysqli_error($link));
            $result = conString($query);
            while($rows = mysqli_fetch_array($result)){
                $philhealth = $rows[1];
            }

            $query = "SELECT * from employeemasterfile.sss where employeeNumber = '$username'" or die("Error. " . mysqli_error($link));
            $result = conString($query);
            while($rows = mysqli_fetch_array($result)){
                $sss = $rows[1];
            }
		?>
				<form method='post' action='update.php'>
				<input class='btn btn--primary header__button--right' type='submit' value='Save'>
				<?php
					if($_SESSION['hrFunction'] == true){?>
					<tr>
						<td>Employee Number:</td>
						<td><?php echo "<input type='text' name='empnum', value='$employeeNum'>";?></td>
					</tr>
					
					<tr>
						<td>Last Name:</td>
						<td><?php echo "<input type='text' name='lastName', value='$lastName'>";?></td>
					</tr>

					<tr>
						<td>First Name:</td>
						<td><?php echo "<input type='text' name='firstName', value='$firstName'>";?></td>
					</tr>

					<tr>
						<td>Middle Name:</td>
						<td><?php echo "<input type='text' name='middleName', value='$middleName'>";?></td>
					</tr>
					
					<tr>
						<td>Address:</td>
						<td><?php echo "<input type='text' name='address', value='$address'>";?></td>
					</tr>

					<tr>
						<td>Birthday:</td>
						<td>
							<select name="month" id="month">
								<option value="1" <?php if ($month == '01') echo ' selected="selected"'?>>January</option>
								<option value="2" <?php if ($month == '02') echo ' selected="selected"'?>>February</option>
								<option value="3" <?php if ($month == '03') echo ' selected="selected"'?>>March</option>
								<option value="4" <?php if ($month == '04') echo ' selected="selected"'?>>April</option>
								<option value="5" <?php if ($month == '05') echo ' selected="selected"'?>>May</option>
								<option value="6" <?php if ($month == '06') echo ' selected="selected"'?>>June</option>
								<option value="7" <?php if ($month == '07') echo ' selected="selected"'?>>July</option>
								<option value="8" <?php if ($month == '08') echo ' selected="selected"'?>>August</option>
								<option value="9" <?php if ($month == '09') echo ' selected="selected"'?>>September</option>
								<option value="10" <?php if ($month == '10') echo ' selected="selected"'?>>October</option>
								<option value="11" <?php if ($month == '11') echo ' selected="selected"'?>>November</option>
								<option value="12" <?php if ($month == '12') echo ' selected="selected"'?>>December</option>
							</select>

							<select name="day" id="day">
								<?php
									for($x=1; $x <= 31; $x++){
										if($x == $day){
											echo "<option value='$x' selected='selected'> $x</option>";
										}

										else{
											echo "<option value='$x'> $x</option>";
										}
									}
								?>
							</select>

							<select name="year" id="year">
								<?php
									for($x=2015; $x >= 1900; $x--){
										if($x == $year){
											echo "<option value='$x' selected='selected'> $x</option>";
										}

										else{
											echo "<option value='$x'> $x</option>";
										}
									}
								?>
							</select>
						</td>
					</tr>
				
					<tr>
						<td>Gender:</td>
						<td><?php echo "<select name='gender'>";
										if($gender==='female'){
											echo "<option value='female' selected>Female</option>
											<option value='male'>Male</option>";
										}							

										else{
											echo "<option value='female'>Female</option>
											<option value='male' selected>Male</option>";
										}
								  echo "</select>";?></td>
					</tr>

					<tr>
						<td>Contact Number:</td>
						<td><?php echo "<input type='text' name='conNum', value='$conNum'>";?></td>
					</tr>
					
					<tr>
						<td>Position:</td>
						<td><?php echo "<input type='text' name='posCode', value='$poscode'>";?></td>
					</tr>

					<tr>
						<td>Rate Per Hour:</td>
						<td><?php echo "<input type='text' name='rate', value='$rate'>";?></td>
					</tr>


            		<tr>
						<td>Nationality:</td>
						<td><?php echo "<input type='text' name='nationality', value='$nationality'>";?></td>
					</tr>

					<tr>
						<td>Marital Status:</td>
						<td><?php echo "<input type='text' name='maritalStatus', value='$maritalStatus'>";?></td>
					</tr>

					<tr>
						<td>Tax Identification Number:</td>
						<td><?php echo "<input type='text' name='tin', value='$tin'>";?></td>
					</tr>
					
					<tr>
						<td>Number of Dependents:</td>
						<td>
							<select name='dependents'>
								<option value='1' <?php if($dependents==1){echo "selected='selected'";}?>>1</option>
								<option value='2'<?php if($dependents==2){echo "selected='selected';";}?>>2</option>
								<option value='3'<?php if($dependents==3){echo "selected='selected'";}?>>3</option>
								<option value='4'<?php if($dependents==4){echo "selected='selected'";}?>>4</option>
							</select>
						</td>
					</tr>

					<tr>
						<td>SSS:</td>
						<td><?php echo "<input type='text' name='sss', value='$sss'>";?></td>
					</tr>
					
					<tr>
						<td>PhilHealth Number:</td>
						<td><?php echo "<input type='text' name='philhealth', value='$philhealth'>";?></td>
					</tr>

					<tr>
						<td>Pag-IBIG:</td>
						<td><?php echo "<input type='text' name='pagibig', value='$pagibig'>";?></td>
					</tr>
						
				<?php }

					else{
				?>
					<tr>
						<td>Address:</td>
						<td><?php echo "<input type='text' name='address', value='$address'>";?></td>
					</tr>
					
					<tr>
						<td>Birthday:</td>
						<td><?php echo "$birthday";?></td>
					</tr>
				
					<tr>
						<td>Contact Number:</td>
						<td><?php echo "<input type='text' name='conNum', value='$conNum'>";?></td>
					</tr>
					
					<tr>
                		<td><b>Nationality:</b></td>
                		<td><?php echo $nationality;?></td>
            		</tr>

            		<tr>
                		<td><b>Marital Status:</b></td>
                		<td><?php echo $maritalStatus;?></td>
            		</tr>

					<tr>
						<td>Tax Identification Number:</td>
						<td><?php echo "$tin";?></td>
					</tr>
					
					<tr>
						<td>SSS Number:</td>
						<td><?php echo "$sss";?></td>
					</tr>
					
					<tr>
						<td>Philhealth Number:</td>
						<td><?php echo "$philhealth";?></td>
					</tr>

					<tr>
						<td>Pag-IBIG Number:</td>
						<td><?php echo "$pagibig";?></td>
					</tr>
					<?php }?>
				</form>
    	<script src="scripts/jquery.min.js"></script>
    	<script src="scripts/main.js"></script>
	</body>
</html>
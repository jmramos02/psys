<?php
  session_start();
  include 'connString.php';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Leave Request</title>
		<link rel="stylesheet" href="styles/main.css">
    	<link href= "styles/ionicons/css/ionicons.min.css" rel="stylesheet">
	</head>
	<body>
		<?php
        	include 'posCheck.php';
			posNavbar();
        ?>     

		
			<div class = 'reqform'>
			<span class = 'req-head'>LEAVE REQUEST</span>
        
        	<form method="post" action="processLeave.php">
        		<div class = 'inreq-text' >EMPLOYEE NAME: <?php echo $_SESSION['lastname']. ", " . $_SESSION['firstname'] . " " . $_SESSION['middlename']?> <br>
        		 EMPLOYEE NUMBER: <?php echo $_SESSION['empNum']?>
        		<br>
        		No. of leaves left:
        		</div>
        		<div class = 'inreq-left-text'>Type of Leave
        		<select name="leave" id= "leave">
        			<option value="sick"> Sick Leave</option>
        			<option value="emergency"> Emergency Leave</option>
        			<option value="vacation"> Vacation Leave</option>
        			<option value="maternity"> Maternity Leave</option>
        			<option value="offset"> Off-set</option>
        		</select>	
        		<br>

				DATE FROM
				<select name="month" id="month">
					<option value="1"  >January</option>
					<option value="2"  >February</option>
					<option value="3"  >March</option>
					<option value="4"  >April</option>
					<option value="5"  >May</option>
					<option value="6"  >June</option>
					<option value="7"  >July</option>
					<option value="8"  >August</option>
					<option value="9"  >September</option>
					<option value="10" >October</option>
					<option value="11" >November</option>
					<option value="12" >December</option>
				</select>
				
				<select name="day" id="day">
					<?php
						for($x=1; $x <= 31; $x++){
							echo "<option value='$x'> $x</option>";
						}
					?>
				</select>
 			
				<select name="year" id="year">
					<option value = "2015"> 2015</option>
				</select>
				
				<br>

				

				TO
				<select name="monthEnd" id="month">
					<option value="1"  >January</option>
					<option value="2"  >February</option>
					<option value="3"  >March</option>
					<option value="4"  >April</option>
					<option value="5"  >May</option>
					<option value="6"  >June</option>
					<option value="7"  >July</option>
					<option value="8"  >August</option>
					<option value="9"  >September</option>
					<option value="10" >October</option>
					<option value="11" >November</option>
					<option value="12" >December</option>
				</select>
			
				<select name="dayEnd" id="day">
					<?php
						for($x=1; $x <= 31; $x++){
							echo "<option value='$x'> $x</option>";
						}
					?>
				</select>
 			
				<select name="yearEnd" id="year">
					<?php
						for($x=2015; $x <= 2018; $x++){
							echo "<option value='$x'> $x</option>";
						}
					?>
				</select>

				<br><br>

				Reason:
				<br>
				<textarea rows="10" cols="40" wrap="physical" name="reason"></textarea></b>
				<br>

				<input class = "btnsubmit" type="submit" value="Submit">
			
        	</form>		            
        </div>
    </div>
    	<script src="scripts/jquery.min.js"></script>
    	<script src="scripts/main.js"></script>
	</body>
</html>
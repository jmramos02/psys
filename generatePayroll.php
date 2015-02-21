<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Generate Payroll</title>
		<link rel="stylesheet" href="styles/main.css">
    	<link href= "styles/ionicons/css/ionicons.min.css" rel="stylesheet">
	</head>
	<body>
		<?php 
    		include 'posCheck.php';
       		posNavbar();
    	?>
    	<div class = "content">
           	<?php
           		if(isset($_GET['view'])){
           			include 'reports.php';
           		}

           	else{?>
        	<div class = "generate-payroll">
            	<div id = "payroll-generation">
            	    <span class="daily-text">PAYROLL GENERATION</span>
           		</div><br>

				<form method='POST' action='process_payroll.php'>
					<font color = 'white' size = '5px'> <center>Payroll Start Date:</center><br>
					<div class = "styled-select">
						<select name='smonth' id='smonth'>
							<option value='1'>January</option>
							<option value='2'>February</option>
							<option value='3'>March</option>
							<option value='4'>April</option>
							<option value='5'>May</option>
							<option value='6'>June</option>
							<option value='7'>July</option>
							<option value='8'>August</option>
							<option value='9'>September</option>
							<option value='10'>October</option>
							<option value='11'>November</option>
							<option value='12'>December</option>
						</select>
					</div>
            
                	<div class = "styled-selects">
						<select name="sday" id="sday">
							<?php
								for($x=1; $x <= 31; $x++){
									echo "<option value='$x'> $x</option>";
								}
							?>
						</select>
					</div>
 			
 					<div class = "styled-selects">
						<select name="syear" id="syear">
							<?php
								for($x=2015; $x <= 2050; $x++){
									echo "<option value='$x'> $x</option>";
								}
							?>
						</select>
					</div><br><br>
			
					<font color = 'white' size = '5px'> <center>Payroll End Date:</center><br>
					<div class = "styled-select">
						<select name='emonth' id='emonth'>
							<option value='1'>January</option>
							<option value='2'>February</option>
							<option value='3'>March</option>
							<option value='4'>April</option>
							<option value='5'>May</option>
							<option value='6'>June</option>
							<option value='7'>July</option>
							<option value='8'>August</option>
							<option value='9'>September</option>
							<option value='10'>October</option>
							<option value='11'>November</option>
							<option value='12'>December</option>
						</select>
					</div>

					<div class = "styled-selects">
						<select name="eday" id="eday">
							<?php
								for($x=1; $x <= 31; $x++){
									echo "<option value='$x'> $x</option>";
								}
							?>
						</select>
 					</div>
 				
 					<div class = "styled-selects">
						<select name="eyear" id="eyear">
							<?php
								for($x=2015; $x >= 1900; $x--){
								echo "<option value='$x'> $x</option>";
								}
							?>
						</select>
					</div>	
						<div class='icon-viewer'>
              <button class='ion-android-checkbox-outline' value='Submit'>&nbsp;Submit</button></a>
            </div>
				</form><br>
				<h1><a href='generatepayroll.php?view=1'>View Generated Payroll Summary</a></h1>
				<?php }?>
			</div>
		</div>
	</body>
</html>
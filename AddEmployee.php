<?php
  session_start();
  include 'connString.php';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Add Employee</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="styles/main.css">
    	<link href= "styles/ionicons/css/ionicons.min.css" rel="stylesheet">
	</head>
	<body>
        <?php 
      		include 'posCheck.php';
      		posNavbar();
   	   			$username = $_SESSION['empNum'];
	    ?>	

       	<div class='content'>
            
            <form class = "register" method='post' action='add.php'>
            <h1>Add New Employee</h1>
            <fieldset class="row1">
                <legend>Account Details
                </legend>
                <p>
                    <label>Employee Number *
                    </label>
                    <input type="text" name="empnum" placeholder="Employee Number"/>
                    <label>Pin *
                    </label>
                    <input type="text" name="pin" type="text" placeholder="Pin"/>
                </p>
                <p>
                    
                    <label>Password*
                    </label>
                    <input type="text" name="pw" placeholder="Password"/>
                    
                </p>
                </fieldset>
            <fieldset class="row2">
                <legend>Personal Details
                </legend>
                <p>
                    <label>Last Name *
                    </label>
                    <input type="text" class="long" name="lastname" placeholder="Last Name"/>
                    </p>
                <p><label>First Name *
                    </label>
                    <input type="text" class="long" name="firstname" placeholder="First Name"/></p>
                <p><label>Middle Name *
                    </label>
                    <input type="text" class="long" name="middlename" placeholder="Middle Name"/></p>
                <p>
                    <label>Contact Number *
                    </label>
                    <input type="text" maxlength="10" name="contactNumber" placeholder="Contact Number"/>
                </p>
                <p>
				<label >Gender *</label>
				<select name='gender' id='gender'>
					<option value='female'>Female</option>
					<option value='male'>Male</option>
				</select>
                    </p>
                    
                <p>
                    <label class="optional">Address
                    </label>
                    <input type="text" class="long" name="adress" placeholder="Address"/></p>
                <p>
                    <label>Birthdate *
                    </label>
                <select class="date"  name="month" id="month">
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
            
			<select class="date" name="day" id="day">
				<?php
					for($x=1; $x <= 31; $x++){
						echo "<option value='$x'> $x</option>";
					}

				?>
			</select>
 			
			<select class="date" name="year" id="year">
				<?php
					for($x=2015; $x >= 1990; $x--){
						echo "<option value='$x'> $x</option>";
					}?>
			</select>
                    </p>
                
                </fieldset>
                
                <fieldset class="row3">
                <legend>Employee Details
                </legend>
                <p>
                    <label>Position *</label>
                    <input name="position" type="text" placeholder="Position">
                    </p>
                    <p>
                        <label>Rate Per Hour *</label>
                        <input name="rate" type="text" placeholder="Rate Per Hour"/>
                </p>
                    <p>
                 <label>Tax Identifier *</label>
                 <input name= "tin" type="text" style="border-color:#e0e0e0" placeholder="Tax Identifier Number"/>
			
</p>
             

            
                    <p>
                    <label>Marital Status *
                    </label>
                        <input name="maritalstatus" type="text" placeholder="Marital Status"/>
                        </p>
                
                <p>
                    <label>No. of Dependents *
                    </label>
                    <select class="date" name="dependents" id="dependents" >
				<?php
					for($x=1; $x <= 4; $x++){
						echo "<option value='$x'>$x</option>";
					}

				?>
			</select>
                </p>
                    <p>
                    <label>Nationality *
                    </label>
                    <input name="nationality" type="text" placeholder="Nationality">
                </p>
                    
               
            </fieldset>
                 <fieldset class="row4">
                <legend>Deduction Details
                </legend>
                <p>
                    
                    <label>SSS</label>
                    <input name="sss" type="text"  placeholder="SSS Number"/>
                </p>
                <p>
                    <label>PhilHealth</label>
                    <input name="philhealth" type="text" placeholder="PhilHealth Number"/>
                </p>
                <p>
                    
                    <label>Pag-IBIG</label>
                    <input name="pagibig" type="text" placeholder="PagIbig Number"/><br>
                </p>
            </fieldset>
           
<div class='icon-viewer'>
                            <button class='ion-ios-close-outline'  value='Reset'>&nbsp;Reset</button></a>
            </div>
							<div class='icon-viewer'>
              <button class='ion-android-checkbox-outline' value='Submit'>&nbsp;Submit</button></a>
            </div>

        </form>
                </div>
                </form>
            </div>
<script src="scripts/jquery.min.js"></script>
    	<script src="scripts/main.js"></script>
        </body>
    </html>
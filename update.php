<?php
	session_start();

	require 'connString.php';
	$username = $_SESSION['empNum'];
	$address = mysqli_real_escape_string($link ,$_POST['address']);
	$conNum = mysqli_real_escape_string($link ,$_POST['conNum']);

	if ($_SESSION['hrFunction'] == true){
		$empnum = $_SESSION['search'];
		$new = $_POST['empnum'];
		$lastname = $_POST['lastName'];
		$firstname = $_POST['firstName'];
		$middlename = $_POST['middleName'];
		$address = $_POST['address'];
		$birthday = $_POST['year'] . "-" . $_POST['month'] . "-" . $_POST['day'];
		$connum = $_POST['conNum'];
		$posCode = $_POST['posCode'];
		$rate = $_POST['rate'];
		$nationality = $_POST['nationality'];
		$maritalStatus = $_POST['maritalStatus'];
		$tin = $_POST['tin'];
		$philhealth = $_POST['philhealth'];
		$pagibig = $_POST['pagibig'];
		$sss = $_POST['sss'];
		$gender = $_POST['gender'];
		$dependents = $_POST['dependents'];
		$query = "UPDATE employeemasterfile.employee SET empNum='$new', LastName='$lastname', FirstName='$firstname', MiddleName='$middlename', address='$address', birthday='$birthday', ContactNumber='$conNum', PositionCode='$posCode', RatePerHour='$rate', Nationality='$nationality', MaritalStatus='$maritalStatus', gender='$gender' WHERE empnum='$empnum';" or die(mysqli_error($link));
		$query2 = "UPDATE employeemasterfile.birmasterfile SET EmployeeNumber='$new', Tin='$tin', NoOfDependents='$dependents' WHERE EmployeeNumber='$empnum';" or die(mysqli_error($link));
		$query3 = "UPDATE employeemasterfile.philhealthmasterfile SET EmployeeNumber='$new', PhilHealthNumber='$philhealth' WHERE EmployeeNumber='$empnum';" or die(mysqli_error($link));
		$query4 = "UPDATE employeemasterfile.pagibigmasterfile SET EmployeeNumber='$new', pagibignumber='$pagibig' WHERE EmployeeNumber='$empnum';" or die(mysqli_error($link));
		$query5 = "UPDATE employeemasterfile.sss SET EmployeeNumber='$new', sssnumber='$sss' WHERE EmployeeNumber='$empnum';" or die(mysqli_error($link));

		try {
			conString($query);	
			conString($query2);	
			conString($query3);	
			conString($query4);	
			conString($query5);	
		} 
		catch (Exception $e) {
    		echo 'Caught exception: ',  $e->getMessage(), "\n";
		} 
	
		finally {
			echo "<script>
                alert('Saved!');
                window.location.href='employeemanagement.php';
            	</script>";	
            $_SESSION['hrfunction'] = false;
		}
	}

	else{
		$query = "UPDATE employeemasterfile.employee SET address = '$address', contactNumber = '$conNum' WHERE empnum='$username'" or die("Error. " . mysqli_error($link));
		$queryCheck = "SELECT address, contactnumber from employeemasterfile.employee where empNum='$username'" or die("Error. " . mysqli_error($link));
		$result = constring($queryCheck);
		$dt = new datetime();
		$date = $dt->format('Y-m-d H:i:s');

		$rows = mysqli_fetch_array($result); 
		if($rows[1] != $conNum && $rows[0] != $address){
			$queryCheck = "INSERT into employeemasterfile.changes values('$date', '$username', '1', '$rows[1]', '$conNum', '1', '$rows[0]', '$address', 'false')" or die("Error. " . mysqli_error($link));
			constring($queryCheck);
		}

		else if($rows[1] != $conNum && $rows[0] == $address){
			$queryCheck = "INSERT into employeemasterfile.changes values('$date', '$username', '1', '$rows[1]', '$conNum', '0','', '', 'false')" or die("Error. " . mysqli_error($link));
			constring($queryCheck);
		}

		else if($rows[1] == $conNum && $rows[0] != $address){
			$queryCheck = "INSERT into employeemasterfile.changes values('$date', '$username', '0', '', '', '1', '$rows[0]', '$address', 'false')" or die("Error. " . mysqli_error($link));
			constring($queryCheck);
		}

		try {
			conString($query);	
		} 
	
		catch (Exception $e) {
    		echo 'Caught exception: ',  $e->getMessage(), "\n";
		} 
	
		finally {
			echo "<script>
                alert('Saved!');
                window.location.href='myinfo.php';
            	</script>";
		}
	}	
?>
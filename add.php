<?php
	session_start();
	include 'connString.php';
	$empNum = $_POST['empnum'];
	$lastname = $_POST['lastname'];
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$address = $_POST['address'];
    $birthday = $_POST['year'] . "-" . $_POST['month'] . "-" . $_POST['day'];
	$gender = $_POST['gender']; 
	$connum = $_POST['conNum']; 
	$position = $_POST['position']; 
	$rateperhour = $_POST['rate'];
	$nationality = $_POST['nationality'];
	$maritalstatus = $_POST['maritalstatus'];
	$tin = $_POST['tin'];
	$dependents = $_POST['dependents'];
	$sss = $_POST['sss'];
	$philhealth = $_POST['philhealth'];
	$pagibig = $_POST['pagibig'];
	$password = $_POST['pw'];
	$pin = $_POST['pin'];
	$query = "INSERT INTO employeemasterfile.employee VALUES('$empNum', '$lastname', '$firstname', '$middlename', '$address', '$birthday', '$connum', '$position', '$rateperhour', '$nationality', '$maritalstatus', '$gender');" or die("Error. " . mysqli_error($link));
	$query2 = "INSERT into employeemasterfile.birmasterfile values('$empNum', '$sss', '$dependents')" or die("Error. " . mysqli_error($link));
	$query3 = "INSERT into employeemasterfile.sss values('$empNum', '$sss')" or die("Error. " . mysqli_error($link));
	$query4 = "INSERT into employeemasterfile.philhealthmasterfile values('$empNum', '$philhealth')" or die("Error. " . mysqli_error($link));
	$query5 = "INSERT into employeemasterfile.pagibigmasterfile values('$empNum', '$pagibig')" or die("Error. " . mysqli_error($link));
	$query6 = "INSERT into employeemasterfile.emplogin values('$empNum', '$password', $pin)" or die("Error. " . mysqli_error($link));
	
    try {
		$result = conString($query);
		$result = conString($query2);
		$result = conString($query3);
		$result = conString($query4);
		$result = conString($query5);
		$result = conString($query6);
	} 
	catch (Exception $e) {
    	echo 'Caught exception: ',  $e->getMessage(), "\n";
	} 
	
	finally {
		header("Location: addemployee.php");
		$link->close();	
	}
?>
<?php
	session_start();
	include 'connString.php';
	$empNum = $_SESSION['empNum'];
	$hours = $_POST['hours'];
    $today = date("Y-m-d h:m:s");  
	$dateAB = $_POST['year'] . "-" . $_POST['month'] . "-" . $_POST['day'];
	$reason = $_POST['reason'];
	$query = "SELECT * FROM employeemasterfile.otrequest;" or die("Error. " . mysqli_error($link));
	$result = conString($query);
	$count = mysqli_num_rows($result) + 1;
	$query = "INSERT INTO employeemasterfile.otrequest VALUES('$empNum', '$today', '$reason', 'waiting for approval', $count, $hours, '', '', null)" or die("Error. " . mysqli_error($link));

    try {
		conString($query);
	} 
	catch (Exception $e) {
    	echo 'Caught exception: ',  $e->getMessage(), "\n";
	} 
	
	finally {
		header("Location: otreq.php");
	}

?>
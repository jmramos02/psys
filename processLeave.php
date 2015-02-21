<?php
	session_start();
	include 'connString.php';
	$empNum = $_SESSION['empNum'];
    $today = date("Y-m-d h:m:s");  
	$dateAB = $_POST['year'] . "-" . $_POST['month'] . "-" . $_POST['day'];
	$reason = mysqli_escape_string($link, $_POST['reason']);
	$dateEnd = $_POST['yearEnd'] . "-" . $_POST['monthEnd'] . "-" . $_POST['dayEnd'];
	$type = $_POST['leave'];
	$query = "SELECT * FROM employeemasterfile.leaverequest;" or die("Error. " . mysqli_error($link));
	$result = conString($query);
	$count = mysqli_num_rows($result) + 1;
	$query = "INSERT INTO employeemasterfile.leaverequest VALUES('$empNum', '$today', '$dateAB', '$reason', 'waiting for approval', $count, '$dateEnd', '$type', '', '', null)" or die("Error. " . mysqli_error($link));

    try {
		conString($query);
	} 
	catch (Exception $e) {
    	echo 'Caught exception: ',  $e->getMessage(), "\n";
	} 
	
	finally {
		header("Location: leavereq.php");
	}
?>
<?php
	session_start();
	include 'connString.php';
	$empNum = $_SESSION['empNum'];
    $today = date("Y-m-d h:m:s");  
	$reason = $_POST['reason'];
	$query = "SELECT * FROM employeemasterfile.loanrequest;" or die("Error. " . mysqli_error($link));
	$result = conString($query);
	$count = mysqli_num_rows($result) + 1;
	$query = "INSERT INTO employeemasterfile.loanrequest VALUES('$empNum', '$today', '$reason', 'waiting for approval', $count, '', '', null)" or die("Error. " . mysqli_error($link));

    try {
		conString($query);
	} 
	catch (Exception $e) {
    	echo 'Caught exception: ',  $e->getMessage(), "\n";
	} 
	
	finally {
		header("Location: loanreq.php");
	}

?>
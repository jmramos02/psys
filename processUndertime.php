<?php
	session_start();
	include 'connString.php';
	$empNum = $_SESSION['empNum'];
	$min = $_POST['min'];
	$hour = $_POST['hour'];
	if ($min <= 9){
		$min = "0$min";
	}
	$dt = new datetime($hour.":".$min);
	$dt = $dt->format('H:i');
    $today = date("Y-m-d h:m:s");  
	$dateAB = $_POST['year'] . "-" . $_POST['month'] . "-" . $_POST['day'];
	$reason= $_POST['reason'];
	$query = "SELECT * FROM employeemasterfile.utrequest;" or die("Error. " . mysqli_error($link));
	$result = conString($query);
	$count = mysqli_num_rows($result) + 1;
	$query = "INSERT INTO employeemasterfile.utrequest VALUES('$empNum', '$today', '$dateAB', '$reason', 'waiting for approval', $count, '$dt', '', '', null)" or die("Error. " . mysqli_error($link));

    try {
		conString($query);
	} 
	catch (Exception $e) {
    	echo 'Caught exception: ',  $e->getMessage(), "\n";
	} 
	
	finally {
		header("Location: utreq.php");
	}

?>, $count
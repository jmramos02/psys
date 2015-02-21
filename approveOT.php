<?php
	session_start();
	include 'connString.php';
	$value = $_POST['act'];
	$num = $_POST['num'];

	if($value == "Approve"){
		$query = "UPDATE employeemasterfile.otrequest SET status= 'approved' WHERE otNum=$num;" or die(mysqli_error($link));
		$result = conString($query);

		 echo "<script>
                alert('Request Approved!');
                window.location.href='overtimeApproval.php';
            </script>";
	}

	else{
		$query = "UPDATE employeemasterfile.otrequest SET status= 'rejected' WHERE otNum=$num;" or die(mysqli_error($link));
		$result = conString($query);

		 echo "<script>
                alert('Request Rejected!');
                window.location.href='overtimeApproval.php';
            </script>";
	}
?>
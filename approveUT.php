<?php
	session_start();
	include 'connString.php';
	$value = $_POST['act'];
	$num = $_POST['num'];

	if($value == "Approve"){
		$query = "UPDATE employeemasterfile.utrequest SET status= 'approved' WHERE utNum=$num;" or die(mysqli_error($link));
		$result = conString($query);

		 echo "<script>
                alert('Request Approved!');
                window.location.href='undertimeApproval.php';
            </script>";
	}

	else{
		$query = "UPDATE employeemasterfile.utrequest SET status= 'rejected' WHERE utNum=$num;" or die(mysqli_error($link));
		$result = conString($query);

		 echo "<script>
                alert('Request Rejected!');
                window.location.href='undertimeApproval.php';
            </script>";
	}
?>
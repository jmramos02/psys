<?php
	session_start();
	include 'connString.php';
	$value = $_POST['act'];
	$num = $_POST['num'];

	if($value == "Approve"){
		$query = "UPDATE employeemasterfile.loanrequest SET status= 'approved' WHERE LoanReqNum=$num;" or die(mysqli_error($link));
		$result = conString($query);

		 echo "<script>
                alert('Request Approved!');
                window.location.href='loanApproval.php';
            </script>";
	}

	else{
		$query = "UPDATE employeemasterfile.leaverequest SET status= 'rejected' WHERE LoanReqNum=$num;" or die(mysqli_error($link));
		$result = conString($query);

		 echo "<script>
                alert('Request Rejected!');
                window.location.href='loanApproval.php';
            </script>";
	}
?>
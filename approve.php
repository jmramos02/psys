<?php
	session_start();
	include 'connString.php';
	$value = $_POST['act'];
	$num = $_SESSION['request'];
	$remarks = $_POST['remarks'];
	$dt = new DateTime();
    $date = $dt->format('Y-m-d');
	$empNum = $_SESSION['empNum'];

	if($value == "Approve"){
		$query = "UPDATE employeemasterfile.leaverequest SET status='approved', remarks='$remarks', approvedby='$empNum', dateapproved='$date' WHERE LeaveReqNum=$num;" or die(mysqli_error($link));
		$result = conString($query);

		echo "<script>
                alert('Request Approved!');
        		window.location.href='requestApproval.php?pend=1';
            </script>";
	}

	else if($value == "Reject"){
		$query = "UPDATE employeemasterfile.leaverequest SET status= 'rejected', remarks='$remarks', approvedby='$empNum', dateapproved='$date' WHERE LeaveReqNum=$num;" or die(mysqli_error($link));
		$result = conString($query);

		 echo "<script>
                alert('Request Rejected!');
                window.location.href='requestApproval.php?pend=1';
            </script>";
	}

	else if($value == "Approve Loan Request"){
		$query = "UPDATE employeemasterfile.loanrequest SET status= 'approved', remarks='$remarks', approvedby='$empNum', dateapproved='$date' WHERE LoanReqNum=$num;" or die(mysqli_error($link));
		$result = conString($query);

		 echo "<script>
                alert('Request Approved!');
                window.location.href='requestApproval.php?pend=2';
            </script>";
	}

	else if($value == "Reject Loan Request"){
		$query = "UPDATE employeemasterfile.loanrequest SET status='rejected', remarks='$remarks', approvedby='$empNum', dateapproved='$date' WHERE loanReqNum=$num;" or die(mysqli_error($link));
		$result = conString($query);

		 echo "<script>
                alert('Request Rejected!');
                window.location.href='requestApproval.php?pend=2';
            </script>";
	}	

	else if($value == "Approve Overtime Request"){
		$query = "UPDATE employeemasterfile.otrequest SET status= 'approved', remarks='$remarks', approvedby='$empNum', dateapproved='$date' WHERE otNum=$num;" or die(mysqli_error($link));
		$result = conString($query);

		 echo "<script>
                alert('Request Approved!');
                window.location.href='requestApproval.php?pend=3';
            </script>";
	}

	else if($value == "Reject Overtime Request"){
		$query = "UPDATE employeemasterfile.otrequest SET status='rejected', remarks='$remarks', approvedby='$empNum', dateapproved='$date' WHERE otNum=$num;" or die(mysqli_error($link));
		$result = conString($query);

		 echo "<script>
                alert('Request Rejected!');
                window.location.href='requestApproval.php?pend=3';
            </script>";
	}

	else if($value == "Approve Undertime Request"){
		$query = "UPDATE employeemasterfile.utrequest SET status= 'approved', remarks='$remarks', approvedby='$empNum', dateapproved='$date' WHERE utNum=$num;" or die(mysqli_error($link));
		$result = conString($query);

		 echo "<script>
                alert('Request Approved!');
                window.location.href='requestApproval.php?pend=4';
            </script>";
	}

	else if($value == "Reject Undertime Request"){
		$query = "UPDATE employeemasterfile.utrequest SET status='rejected', remarks='$remarks', approvedby='$empNum', dateapproved='$date' WHERE utNum=$num;" or die(mysqli_error($link));
		$result = conString($query);

		 echo "<script>
                alert('Request Rejected!');
                window.location.href='requestApproval.php?pend=4';
            </script>";
	}	
?>
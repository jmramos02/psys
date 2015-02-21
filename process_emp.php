<?php
	session_start();
	error_reporting(0);
	include 'connString.php';
	$value = strtolower($_POST['act']);
	$editted = $_SESSION['editted'];

	if($value == "edit"){
		$_SESSION['search'] = $_POST['empNum'];
		$_SESSION['hrfunction'] = true;
		header("Location:editrecord.php");
	}

	else if($value == "search"){
		$_SESSION['search'] = mysqli_escape_string($link, $_POST['search']);
		$_SESSION['searchby'] = mysqli_escape_string($link, $_POST['searchBy']);
		header("Location:employeemanagement.php?search=" . $_SESSION['search']);
	}

	else if($value == "delete"){
		$_SESSION['search'] = $_POST['empNum'];
		echo "
			<script type='text/javascript'>
				if (confirm('Are you sure to delete this employee?')){
					window.location.href='delete.php';
    			}

    			else{
    				window.location.href='employeemanagement.php';
    			}
			</script>
		";
	}
?>
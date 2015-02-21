<?php
  session_start();
  include 'connString.php';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Delete Record</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="styles/main.css">
    	<link href= "styles/ionicons/css/ionicons.min.css" rel="stylesheet">
	</head>
	<body>
		<?php 
    	include 'posCheck.php';
    	posNavbar();
    	$username = $_SESSION['empNum'];
    ?>

    <div class='content'>
        <form method='POST'action='delete.php'>
		      Search: <input type="text" name="search"> &nbsp;&nbsp;&nbsp;&nbsp;
          Sort by: 
            <select name="sear">
              <option value='empNum'>Employee Number</option>
              <option value='lastName'>Last Name</option>
              <option value='firstName'>First Name</option>
              <option value='middleName'>Middle Name</option>
            </select>

          &nbsp;&nbsp;&nbsp;&nbsp;
          <input type='Submit' value='Delete' class="btn btn-danger">
        </form>
		  <a href="employeemanagement.php" style="float:right; margin: 20px 30px 0px 0px">Back to Employee Management</a>
    </div>
      <script src="scripts/jquery.min.js"></script>
      <script src="scripts/main.js"></script>
	</body>
</html>
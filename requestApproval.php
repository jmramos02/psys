   <?php
  session_start();
  include 'connString.php';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Request Viewer</title>
		<link rel="stylesheet" href="styles/main.css">
    	<link href= "styles/ionicons/css/ionicons.min.css" rel="stylesheet">
	</head>
	<body>
		<?php 
    	include 'posCheck.php';
      posNavbar();
    ?>
    
    <div class='content'>
    
       <div id="header-tabs"> 

<h3>REQUEST APPROVAL</h3>

<ul>
  <li><a href='requestApproval.php?pend=1'>Pending Leave Requests</a></li>
        <li><a href='requestApproval.php?pend=2'>Pending Loan Requests</a></li>
        <li><a href='requestApproval.php?pend=3'>Pending Overtime Requests</a></li>
        <li><a href='requestApproval.php?pend=4'>Pending Undertime Requests</a></li>
  </ul>
  </div>
 
      <hr width="100%">
        <div class = 'table-tabs-tabs'>
    <?php 
      if(isset($_GET['pend'])){
        if($_GET['pend']==1){
          include 'leaveApproval.php';
        }
 
        else if($_GET['pend']==2){
          include 'loanApproval.php';
        }

        else if($_GET['pend']==3){
          include 'overtimeApproval.php';
        }

        else if($_GET['pend']==4){
          include 'undertimeApproval.php';
        }
      }

      else{
        header("LOCATION: requestApproval.php?pend=1");
      }
    ?> 
</div>
</div>      
</div>
    <script src="scripts/jquery.min.js"></script>
    <script src="scripts/main.js"></script>
  </body>
</html>
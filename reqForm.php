<?php
  session_start();
  include 'connString.php';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Request Form</title>
		<link rel="stylesheet" href="styles/main.css">
    	<link href= "styles/ionicons/css/ionicons.min.css" rel="stylesheet">
	</head>
	<body>
		<?php 
      include 'posCheck.php';
      posNavbar();
    ?>

    <div class='content'>
      <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp SELECT REQUEST FORM</p>
      <a href="leavereq.php"><button type="button" class="btn btn-info" style="width:280px;">
        <left><img src="../icons/Note-Information-128.png">Leave Request</left>
      </button></a>
      
      <br><br><br>  
      
      <a href="loanreq.php"><button type="button" class="btn btn-info" style="width:280px;">
        <left><img src="../icons/Note-Information-128.png">Loan Request</left>
      </button></a>
      
      <br><br><br>
      
      <a href="otreq.php"><button type="button" class="btn btn-info" style="width:280px;">
        <left><img src="../icons/Note-Information-128.png">Overtime Request</left>
      </button></a>
      
      <br><br><br>
      
      <a href="utreq.php"><button type="button" class="btn btn-info" style="width:280px;">
        <left><img src="../icons/Note-Information-128.png">Undertime Request</left>
      </button></a>
      
      <br><br><br>
      
      <a href="requestViewer.php"><button type="button" class="btn btn-info" style="width:280px;">
        <left><img src="../icons/Note-Information-128.png">Request Viewer</left>
      </button></a>
      
      <br><br><br>
      
    </div>
    <script src="scripts/jquery.min.js"></script>
    <script src="scripts/main.js"></script>
	</body>
</html>
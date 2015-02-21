<?php
  session_start();
  include 'connString.php';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>My Info</title>
		<link rel="stylesheet" href="styles/main.css">
    	<link href= "styles/ionicons/css/ionicons.min.css" rel="stylesheet">
	</head>
	<body>
		<?php 
	  	include 'posCheck.php';
      posNavbar();
    ?>

    <div class='content'>
      <form method='POST' action='update.php'>
        <table class='table'>
          <?php 
          $_SESSION['hrFunction'] = true;
            include 'editinfo.php';
          ?>
        </table>
      </form>
    </div>
    <script src="scripts/jquery.min.js"></script>
    <script src="scripts/main.js"></script>
	</body>
</html>
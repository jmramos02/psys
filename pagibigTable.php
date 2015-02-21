<?php
  session_start();
  include 'connString.php';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Pag-IBIG Table</title>
		<link rel="stylesheet" href="styles/main.css">
    	<link href= "styles/ionicons/css/ionicons.min.css" rel="stylesheet">
	</head>
	<body>
		<?php 
 	  	include 'posCheck.php';
   		posNavbar();
   	?>

   	<div class='content'>
      <h1>Pag-IBIG Contribution Fund</h1>
      <table border='1'>
        <th>Monthly Compensation</th>
        <th>Employee Share</th>
        <th>Employer Share</th>
        <?php
          $sql = "SELECT * from employeemasterfile.pagibigtable";
          $result = constring($sql);
          $rows = mysqli_fetch_array($result);
          echo "<tr align='center'>";
          echo "<td>below Php $rows[3].00</td>";
          echo "<td> " , $rows[1] * 100, "%</td>";
          echo "<td> " , $rows[2] * 100, "%</td>";
          echo "</tr>";
          $rows = mysqli_fetch_array($result);
          echo "<tr align='center'>";
          echo "<td>Over Php $rows[0].00</td>";
          echo "<td> " , $rows[1] * 100, "%</td>";
          echo "<td> " , $rows[2] * 100, "%</td>";
          echo "</tr>";
        ?>
      </table>      		
  	</div>

   	<script src="scripts/jquery.min.js"></script>
   	<script src="scripts/main.js"></script>
	</body>
</html>
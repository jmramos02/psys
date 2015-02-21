<?php
  session_start();
  include 'connString.php';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>SSS Table</title>
		<link rel="stylesheet" href="styles/main.css">
    	<link href= "styles/ionicons/css/ionicons.min.css" rel="stylesheet">
	</head>
	<body>
		<?php 
 	  	include 'posCheck.php';
   		posNavbar();
   	?>

   	<div class='content'>
      <h1>SSS Contribution Fund</h1>
      <table border='1'>
        <th colspan='2' rowspan='3'>Monthly Compensation</th>
        <th rowspan='3'>Monthly Salary Credit</th>
        <th colspan='7'>Employer - Employee</th>
        <th>SE / VM / OFW</th>
        <tr>
          <th colspan='3'>SOCIAL SECURITY</th>
          <th>EC</th>
          <th colspan='3'>Total Contribution</th>
          <th rowspan='2'>Total Contribution</th>
        </tr>
        <tr>
          <th>ER</th>
          <th>EC</th>
          <th>TOTAL</th>
          <th>ER</th>
          <th>ER</th>
          <th>EE</th>
          <th>TOTAL</th>
        </tr>
        <?php
          $sql = "SELECT * from employeemasterfile.ssstable";
          $result = constring($sql);
          while($rows = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>$rows[1]</td>";
            echo "<td>"; 
              
              if($rows[2]==999999.99){
                echo "over";
              }

              else{
                echo $rows[2];
              }

            echo "</td>";

            echo "<td>$rows[3]</td>";
            echo "<td>$rows[4]</td>";
            echo "<td>$rows[5]</td>";
            echo "<td>$rows[6]</td>";
            echo "<td>$rows[7]</td>";
            echo "<td>$rows[8]</td>";
            echo "<td>$rows[9]</td>";
            echo "<td>$rows[10]</td>";
            echo "<td>$rows[11]</td>";
            echo "</tr>";
          }
        ?>
      </table>      		
  	</div>

   	<script src="scripts/jquery.min.js"></script>
   	<script src="scripts/main.js"></script>
	</body>
</html>
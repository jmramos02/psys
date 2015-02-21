<?php
  session_start();
  include 'connString.php';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>PhilHealth Table</title>
		<link rel="stylesheet" href="styles/main.css">
    	<link href= "styles/ionicons/css/ionicons.min.css" rel="stylesheet">
	</head>
	<body>
		<?php 
 	  	include 'posCheck.php';
   		posNavbar();
   	?>

   	<div class='content'>
      <h1>PhilHealth Contribution Fund</h1>
      <table border='1'>
        <th colspan='2'>Monthly Compensation</th>
        <th>Salary Base</th>
        <th>Total Monthly Premium</th>
        <th>Employee Share</th>
        <th>Employer Share</th>
        <?php
          $sql = "SELECT * from employeemasterfile.philhealthtable";
          $result = constring($sql);
          while ($rows = mysqli_fetch_array($result)){
            echo "<tr align='center'>";
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
            echo "</tr>";
          }
        ?>
      </table>      		
  	</div>

   	<script src="scripts/jquery.min.js"></script>
   	<script src="scripts/main.js"></script>
	</body>
</html>
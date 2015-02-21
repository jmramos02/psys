<?php
  session_start();
  include 'connString.php';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Tax Table</title>
		<link rel="stylesheet" href="styles/main.css">
    	<link href= "styles/ionicons/css/ionicons.min.css" rel="stylesheet">
	</head>
	<body>
		<?php 
 	  	include 'posCheck.php';
   		posNavbar();
   	?>

   	<div class='content'>
      <h1>Tax Table</h1>
      <table border='1'>
        <th>Over</th>
        <th>But Not Over</th>
        <th>Rate</th>
        <?php
          $sql = "SELECT * from employeemasterfile.taxtable";
          $result = constring($sql);
          while ($rows = mysqli_fetch_array($result)){
            echo "<tr align='center'>";
            echo "<td>";
              if($rows[1] == null){
                echo '';
              }

              else{
                echo $rows[1];
              }
            echo"</td>";
            echo "<td>$rows[2]</td>";
            echo "<td>";
              if($rows[3] == null){
                echo $rows[4] * 100 , "%</td>";
              }

              else{
                echo $rows[3] , " + " , $rows[4] * 100 , "% of the excess over $rows[1]</td>";;
              }
            echo "</tr>";
          }
        ?>
      </table>      		
  	</div>

   	<script src="scripts/jquery.min.js"></script>
   	<script src="scripts/main.js"></script>
	</body>
</html>
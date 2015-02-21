<?php
  session_start();
  include 'connString.php';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>My Daily Logs</title>
		<link rel="stylesheet" href="styles/main.css">
    	<link href= "styles/ionicons/css/ionicons.min.css" rel="stylesheet">
	</head>
	<body>
		<?php 
	  	include 'posCheck.php';
      posNavbar();
    ?>

    <div class='content'>
     <table class = "table-logs">
        <th class = "header table-logs__header" colspan='3'>
        <span class = "header-logs__text">Daily Logs</span>
        </th> 
        <tr>
          <th>Date</th>
          <th>Time In</th>
          <th>Time Out</th>
        </tr>

        <?php
          $query = "SELECT * FROM employeemasterfile.employeelogs where employeeNumber='" . $_SESSION['empNum'] . "' order by workdate;"  or die("Error. " . mysqli_error($link));
          $result = constring($query);
          while($rows = mysqli_fetch_array($result)){
            echo "<tr align='center'>";
            $date = new datetime($rows[1]);
            $rows[1] = $date->format('F d, Y');
            echo "<td>$rows[1]</td>";
            $date = new datetime($rows[2]);
            $rows[2] = $date->format('H:i');
            echo "<td>$rows[2]</td>";
            $date = new datetime($rows[3]);
            $rows[3] = $date->format('H:i');
            echo "<td>$rows[3]</td>";
            echo "</tr>";
          }
        ?>
      </table>
    </div>
    <script src="scripts/jquery.min.js"></script>
    <script src="scripts/main.js"></script>
	</body>
</html>
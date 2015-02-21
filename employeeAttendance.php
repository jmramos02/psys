<?php
  session_start();
  include 'connString.php';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Employee Attendance</title>
		<link rel="stylesheet" href="styles/main.css">
    	<link href= "styles/ionicons/css/ionicons.min.css" rel="stylesheet">
	</head>
	<body>
		<?php 
	  	include 'posCheck.php';
      posNavbar();
      $dt = new DateTime();
      $date = $dt->format('Y-m-d');
      $date2 = $dt->format('F d, Y');
    ?>

    <div class='content'>
      <table class = "table-logs">
          
        <th class = "header table-logs__header" colspan='3'>
        <span class = "header-logs__text">Employee Attendance<br><?php echo $date2?></span>
        </th> 
        <tr>
          <th>Employee Name</th>
          <th>Time In</th>
          <th>Time Out</th>
        </tr>

        <?php
          $dt = new DateTime();
          $date = $dt->format('Y-m-d');
          $query = "SELECT * FROM employeemasterfile.employeelogs where workdate='". $date ."' order by timein;"  or die("Error. " . mysqli_error($link));
          $result = constring($query);
          while($rows = mysqli_fetch_array($result)){
            echo "<tr align='center'>";
            $query2 = "SELECT empNum, lastname, firstname FROM employeemasterfile.employee;" or die("Error. " . mysqli_error($link));
            $result2 = constring($query2);
            while ($rows2 = mysqli_fetch_array($result2)){
              if($rows[0] == $rows2[0]){
                echo "<td>$rows2[1], $rows2[2]</td>";
              }
            }
            $date = new datetime($rows[1]);
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
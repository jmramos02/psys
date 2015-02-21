<?php
  session_start();
  include 'connString.php';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Deleted Employee Records</title>
		<link rel="stylesheet" href="styles/main.css">
    	<link href= "styles/ionicons/css/ionicons.min.css" rel="stylesheet">
	</head>
	<body>
		<?php 
	  	include 'posCheck.php';
      posNavbar();
      $query = "SELECT * FROM employeemasterfile.deleted;" or die("Error " . mysqli_error($link));
      $result = constring($query);
    ?>

    <div class='content'>
      <form method='POST' action='process_archive.php'>
        <table>
          <th></th>
          <th>Employee Number</th>
          <th>Last Name</th>
          <th>First Name</th>
          <th>Middle Name</th>
          <th>Address</th>
          <th>Birthday</th>
          <th>Contact Number</th>
          <th>Position Code</th>
          <th>Rate Per Hour</th>
          <th>Nationality</th>
          <th>Marital Status</th>

          <?php 
            while($rows = mysqli_fetch_array($result)){
              echo "
                <tr>
                  <td><input type='radio' name='empnum'></td>
                  <td>$rows[0]</td>
                  <td>$rows[1]</td>
                  <td>$rows[2]</td>
                  <td>$rows[3]</td>
                  <td>$rows[4]</td>
                  <td>$rows[5]</td>
                  <td>$rows[6]</td>
                  <td>$rows[7]</td>
                  <td>$rows[8]</td>
                  <td>$rows[9]</td>
                  <td>$rows[10]</td>
                </tr>";
            }
          ?>
        </table>
      </form>
    </div>
    <script src="scripts/jquery.min.js"></script>
    <script src="scripts/main.js"></script>
	</body>
</html>
<?php
  session_start();
  include 'connString.php';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Deleted Records</title>
		<link rel="stylesheet" href="styles/main.css">
    <link href= "styles/ionicons/css/ionicons.min.css" rel="stylesheet">
	</head>
	<body>
		<?php 
	  	include 'posCheck.php';
      posNavbar();
    ?>

    <div class='content'>
      <table class="table">                  
        <tr>
          <th></th>
          <th>Employee Number</th>
          <th>Last Name</th>
          <th>First Name</th>
          <th>Middle Name</th>
          <th>Address</th>
          <th>Birthday</th>
          <th>Contact Number</th>
          <th>Position</th>
          <th>Rate Per Hour</th>
          <th>Nationality</th>
          <th>Marital Status</th>
        </tr>
                                    
        <?php
          if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
            $start_from = ($page-1) * 10; 
            $query = "SELECT * from employeemasterfile.deleted order by empNum asc limit $start_from, 10" or die("Error. " . mysqli_error($link));
            $result = conString($query);  
            while($rows = mysqli_fetch_array($result)){
              echo 
              "<tr>
                <td><input type='radio' name=empNum value='$rows[0]'/></td>
                <td>$rows[0]</td>
                <td>$rows[1]</td>
                <td>$rows[2]</td>
                <td>$rows[3]</td>
                <td>$rows[4]</td>";

                $date = new datetime($rows[5]);
                $rows[5] = $date->format('M d, Y');
              echo
                "<td>$rows[5]</td>
                <td>$rows[6]</td>
                <td>$rows[7]</td>
                <td>$rows[8]</td>
                <td>$rows[9]</td>
                <td>$rows[10]</td>
              </tr>";
            }
        ?>
      </table>

      <?php 
        $query = "SELECT COUNT(empNum) FROM employeemasterfile.deleted"; 
        $result = conString($query);  
        $row = mysqli_fetch_row($result); 
        $total_records = $row[0]; 
        $total_pages = ceil($total_records / 10); 
    
        for ($i=1; $i<=$total_pages; $i++) { 
          echo "<a href='employeeManagement.php?page=".$i."'>".$i."</a> "; 
        };
      ?>   
      </form>        		
    </div>
    <script src="scripts/jquery.min.js"></script>
    <script src="scripts/main.js"></script>
	</body>
</html>
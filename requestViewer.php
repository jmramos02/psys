<?php
  session_start();
  include 'connString.php';
  $empNum = $_SESSION['empNum'];
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Requests Viewer</title>
		<link rel="stylesheet" href="styles/main.css">
    	<link href= "styles/ionicons/css/ionicons.min.css" rel="stylesheet">
	</head>
	<body>
		<?php 
    	include 'posCheck.php';
      posNavbar();
    ?>
    
    <div class='content'>
      <?php  
        if (isset($_GET["pages"])) { $page  = $_GET["pages"]; } else { $page=1; }; 
        $start_from = ($page-1) * 10;
        $query = "SELECT * from employeemasterfile.leaveRequest where empNum='$empNum' LIMIT $start_from, 10" or die("Error. " . mysqli_error($link));
        $result = conString($query);
        $rows = mysqli_num_rows($result);
        if($rows > 0){
          echo
            "<a id='leave'>Leave Request Status</a>
            <table border='1'>
            <th>Type</th>
            <th>Date/Time Issued</th>
            <th>Leave Start Date</th>
            <th>Leave End Date</th>
            <th>Reason</th>
            <th>Status</th>";
          
          while($rows = mysqli_fetch_array($result)){ 
            echo
              "<tr>
                  <td>$rows[7]</td>
                  <td>$rows[1]</td>
                  <td>$rows[2]</td>
                  <td>$rows[6]</td>
                  <td>$rows[3]</td>
                  <td>$rows[4]</td>
              </tr>";
          } 
          echo "</table>";
        }
        echo "<br>";
        $query = "SELECT COUNT(empNum) FROM employeemasterfile.leaveRequest WHERE empNum='$empNum';" or die("Error. " . mysqli_error($link));
        $result = conString($query);  
        $row = mysqli_fetch_row($result); 
        $total_records = $row[0]; 
        $total_pages = ceil($total_records / 10);  
    
        for ($i=1; $i<=$total_pages; $i++) { 
          echo "<a href='requestViewer.php?pages=".$i."#leave'>".$i."</a> "; 
        }
      ?>

      <br>
      <br>

      <?php  
        if (isset($_GET["pages"])) { $page  = $_GET["pages"]; } else { $page=1; }; 
        $start_from = ($page-1) * 10;
        $query = "SELECT * from employeemasterfile.loanRequest where empNum='$empNum' LIMIT $start_from, 10" or die("Error. " . mysqli_error($link));
        $result = conString($query);
        $rows = mysqli_num_rows($result);
        if($rows > 0){
          echo
            "<a id='loan'>Loan Request Status</a>
            <table border='1'>
            <th>Date Issued</th>
            <th>Reason</th>
            <th>Status</th>";
          while($rows = mysqli_fetch_array($result)){ 
            echo
              "<tr>
                  <td>$rows[1]</td>
                  <td>$rows[2]</td>
                  <td>$rows[3]</td>
              </tr>";
          } 
          echo "</table>";
        }
        echo "<br>";
        $query = "SELECT COUNT(empNum) FROM employeemasterfile.loanRequest WHERE empNum='$empNum';" or die("Error. " . mysqli_error($link));
        $result = conString($query);  
        $row = mysqli_fetch_row($result); 
        $total_records = $row[0]; 
        $total_pages = ceil($total_records / 10);  
    
        for ($i=1; $i<=$total_pages; $i++) { 
          echo "<a href='requestViewer.php?pages=".$i."#loan'>".$i."</a> "; 
        }
      ?>

      <br>
      <br>


      <?php  
        if (isset($_GET["pages"])) { $page  = $_GET["pages"]; } else { $page=1; }; 
        $start_from = ($page-1) * 10;
        $query = "SELECT * from employeemasterfile.otRequest where empNum='$empNum' LIMIT $start_from, 10" or die("Error. " . mysqli_error($link));
        $result = conString($query);
        $rows = mysqli_num_rows($result);
        if($rows > 0){
          echo
            "<a id='ot'>Overtime Request Status</a>
            <table border='1'>
            <th>Date Issued</th>
            <th>Reason</th>
            <th>Status</th>";
          while($rows = mysqli_fetch_array($result)){ 
            echo
              "<tr>
                  <td>$rows[1]</td>
                  <td>$rows[2]</td>
                  <td>$rows[3]</td>
                </tr>";
          } 
          echo "</table>";
        }
        echo "<br>";
        $query = "SELECT COUNT(empNum) FROM employeemasterfile.otRequest WHERE empNum='$empNum';" or die("Error. " . mysqli_error($link));
        $result = conString($query);  
        $row = mysqli_fetch_row($result); 
        $total_records = $row[0]; 
        $total_pages = ceil($total_records / 10);  
    
        for ($i=1; $i<=$total_pages; $i++) { 
          echo "<a href='requestViewer.php?pages=".$i."#ot'>".$i."</a> "; 
        }
      ?>

      <br>
      <br>

      <?php  
        if (isset($_GET["pages"])) { $page  = $_GET["pages"]; } else { $page=1; }; 
        $start_from = ($page-1) * 10;
        $query = "SELECT * from employeemasterfile.utRequest where empNum='$empNum' LIMIT $start_from, 10" or die("Error. " . mysqli_error($link));
        $result = conString($query);
        $rows = mysqli_num_rows($result);
        if($rows > 0){
          echo
            "<a id='ut'>Undertime Request Status</a>
            <table border='1'>
            <th>Date Issued</th>
            <th>Undertime Date</th>
            <th>Reason</th>;
            <th>status</th>";
          while($rows = mysqli_fetch_array($result)){ 
            echo
              "<tr>
                  <td>$rows[1]</td>
                  <td>$rows[2]</td>
                  <td>$rows[3]</td>
                  <td>$rows[4]</td>
              </tr>";
          } 
          echo "</table>";
        }
        echo "<br>";
        $query = "SELECT COUNT(empNum) FROM employeemasterfile.utRequest WHERE empNum='$empNum';" or die("Error. " . mysqli_error($link));
        $result = conString($query);  
        $row = mysqli_fetch_row($result); 
        $total_records = $row[0]; 
        $total_pages = ceil($total_records / 10);  
    
        for ($i=1; $i<=$total_pages; $i++) { 
          echo "<a href='requestViewer.php?pages=".$i."#ut'>".$i."</a> "; 
        }
      ?>
      </div>
      <script src="scripts/jquery.min.js"></script>
    	<script src="scripts/main.js"></script>
	</body>
</html>
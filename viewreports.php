<?php
  session_start();
  include 'connString.php';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>View Reports</title>
    <link rel="stylesheet" href="styles/main.css">
    <link href= "styles/ionicons/css/ionicons.min.css" rel="stylesheet">
	</head>
	<body>
		<?php 
	  	include 'posCheck.php';
      posNavbar();
    ?>

    <div class='content'>
      <a href='get_download.php'><button class='btn btn--primary header__button--right'>Download as PDF file</button></a>
      <table>
        <?php if(isset($_GET['view'])){?>
        <a href='get_download.php'><button class='btn btn--primary header__button--right'>Download as CSV file (for Wire Transfer)</button></a>
        <th>Employee Number</th>
        <th>Basic Pay</th>
        <th>OT</th>
        <th>UT</th>
        <th>Late</th>
        <th>Tax</th>
        <th>SSS</th>
        <th>Philhealth</th>
        <th>Pagibig</th>
        <th>Gross Earnings</th>
        <th>Gross Deductions</th>
        <th>Take Home Pay</th>

      <?php 
        $start = $_GET['date'];
        $end = $_GET['end'];

        $query = "SELECT * FROM employeemasterfile.payslip WHERE payrollstart='$start' AND payrollend='$end'" or die("Error " . mysqli_error($link));
        $result = constring($query);
        while ($rows = mysqli_fetch_array($result)){?>
          <tr align='center'>
            <td><?php echo $rows[0]?></td>
            <td><?php echo $rows[3]?></td>
            <td><?php echo $rows[4]?></td>
            <td><?php echo $rows[5]?></td>
            <td><?php echo $rows[6]?></td>
            <td><?php echo $rows[7]?></td>
            <td><?php echo $rows[8]?></td>
            <td><?php echo $rows[9]?></td>
            <td><?php echo $rows[10]?></td>
            <td><?php echo $rows[11]?></td>
            <td><?php echo $rows[12]?></td>
            <td><?php echo $rows[13]?></td>
          </tr>
        <?php 
        }
      }

      else if(isset($_GET['empNum'])){?>
        <th colspan='4'>ICI MINISTRIES-FOUNDATION, INC.</th>

        <?php
          $empNum = $_GET['empNum'];
          $query = "SELECT * FROM employeemasterfile.payslip WHERE empNum='$empNum';" or die("Error " . mysqli_error());
          $result = constring($query);
          $rows = mysqli_fetch_array($result);

          $payrollstart = $rows[1];
          $payrollend = $rows[2];
          $basic = $rows[3];
          $otAdd = $rows[4];
          $utDed = $rows[5];
          $lateDed = $rows[6];
          $tax = $rows[7];
          $sss = $rows[8];
          $philhealth = $rows[9];
          $pagibig = $rows[10];
          $grossearn = $rows[11];
          $grossded = $rows[12];
          $takehome = $rows[13];
        ?>

          <tr>
            <th colspan='4'>Pay Period Ending <?php echo $payrollstart . " - " . $payrollend;?></th> 
          </tr>
        
          <tr>
            <th colspan='4'>Payslip</th>  
          </tr>
        
          <tr>
            <th colspan='4'>Statement of Earnings and Deductions</th> 
          </tr>
        
          <tr>
            <th colspan='4'>Name: <?php echo $_SESSION['lastname'] , ", " , $_SESSION['firstname'] , " " , $_SESSION['middlename'];?></th>            
          <tr>
            <th colspan='2'>Earnings</th>
            <th colspan='2'>Deductions</th>
          </tr>
          
          <tr>
            <td>Title</td>
            <td>Amount</td>
            <td>Title</td>
            <td>Amount</td>
          </tr>

          <tr>
            <td>Basic</td>
            <td><?php echo $basic ?></td>
            <td>Tax Withheld</td>
            <td>(<?php echo $tax ?>)</td>
          </tr>

          <tr>
            <td>OT</td>
            <td><?php echo $otAdd?></td>
            <td>SSS</td>
            <td>(<?php echo $sss?>)</td>
          </tr>

          <tr>
            <td>UT</td>
            <td>(<?php echo $utDed?>)</td>
            <td>PhilHealth</td>
            <td>(<?php echo $philhealth?>)</td>
          </tr>

          <tr>
            <td>Late</td>
            <td>(<?php echo $lateDed?>)</td>
            <td>Pag-IBIG</td>
            <td>(<?php echo $pagibig?>)</td>
          </tr>

          <tr>
            <td>Gross Earnings</td>
            <td><?php echo $grossearn?></td>
            <td>Gross Deductions</td>
            <td>(<?php echo $grossded?>)</td>
          </tr>

          <tr>
            <th colspan='4'>Total Take Home Pay: <?php echo $takehome?></th>
          </tr>
      <?php }?>     
      </table>   		
    </div>
    <script src="scripts/jquery.min.js"></script>
    <script src="scripts/main.js"></script>
	</body>
</html>
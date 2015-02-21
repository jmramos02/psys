<?php
  session_start();
  include 'connString.php';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>My Payslip</title>
		<link rel="stylesheet" href="styles/main.css">
    	<link href= "styles/ionicons/css/ionicons.min.css" rel="stylesheet">
	</head>
	<body>
		<?php 
    	  	include 'posCheck.php';
      		posNavbar();
            $empNum = $_SESSION['empNum'];
    	?>
        
        <div class='content'>
            <font size="5" style="Calibri"><p><b><center>SUMMARY REPORT</center></b></p></font>          
            <table>                                    
                <?php
                    $query = "SELECT DISTINCT payrollstart, payrollend FROM employeemasterfile.payslip;" or die("Error ". mysqli_error($link));
                    $result = constring($query);?>
                    <th>Payroll Start Date</th>
                    <th>Payroll End Date</th>

                    <?php while($rows = mysqli_fetch_array($result)){?>
                    <tr align='center'>
                        <td><a href='viewreports.php?date=<?php echo $rows[0]?>&end=<?php echo $rows[1]?>&empNum=<?php echo $empNum?>'><?php echo $rows[0]?></a></td>
                        <td><a href='viewreports.php?date=<?php echo $rows[0]?>&end=<?php echo $rows[1]?>&empNum=<?php echo $empNum?>'><?php echo $rows[1]?></a></td>
                    </tr>
                    <?php }?>     
            </table>
                                                                
            <font size="5" style="Calibri"><p><b><center>DEDUCTIONS' TABLE</center></b></p></font>
            <table>                                    
                <tr>
                    <td><b><center><a href='ssstable.php'><button class="tablebtn tabtn--primary" style="width:200px;">SSS</button></a></center></b></td>
                </tr>
                    
                <tr 
                    <td><b><center><a href='pagibigtable.php'><button class="tablebtn tabtn--primary" style="width:200px;">Pag-IBIG</button></a></center></b></td>
                </tr>
                                
                <tr>
                    <td><b><center><a href='philhealthtable.php'><button class="tablebtn tabtn--primary" style="width:200px;">PHILHEALTH</button></a></center></b></td>
                </tr>
                                
                <tr>
                    <td><b><center><a href='taxtable.php'><button class="tablebtn tabtn--primary" style="width:200px;">WITHHOLDING TAX</button></a></center></b></td>
                </tr>           
            </table>
        </div>
    	<script src="scripts/jquery.min.js"></script>
    	<script src="scripts/main.js"></script>
	</body>
</html>
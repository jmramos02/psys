<?php
  session_start();
  include 'connString.php';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Employment Info</title>
		<link rel="stylesheet" href="styles/main.css">
    	<link href= "styles/ionicons/css/ionicons.min.css" rel="stylesheet">
	</head>
	<body>
		<?php 
            include 'posCheck.php';
            posNavbar();
            $username = $_SESSION['empNum'];
            $query = "SELECT positionCode, rateperhour from employeemasterfile.employee where empNum = '$username'" or die("Error. " . mysqli_error($link));
            $result = conString($query);
            while($rows = mysqli_fetch_array($result)){
                $positionCode = $rows[0];
                $rateperhour = $rows[1];
            }
        ?>

        <div class='content'>
            <img src="../payrolv1/images/p.jpg" height="200" width="200">
            <br>
            <hr width="100%">
            <font size="3">
                <a href="myinfo.php">Personal Info</a>
                <br>
                <a href="employmentinfo.php">Employment Info</a>
            </font>
                        
            <font size="5" style="Calibri"><p><b><?php echo $_SESSION['lastname'] , ", " , $_SESSION['firstname'] , " " , $_SESSION['middlename'];?></b></p></font>
            <h4>Employment Info</h4>
            <br>
            <br>
            <table class="table table-striped">                                    
                <tr>
                    <td><b>Employee Number:</b></td>
                    <td>&nbsp;&nbsp;<?php echo $_SESSION['empNum'];?></td>
                </tr>

                <tr>
                    <td><b>Position:</b></td>
                    <td>&nbsp;&nbsp;<?php echo $positionCode;?></td>
                </tr>
                                    
                <tr>
                    <td><b>Rate per Hour:</b></td>
                    <td>&nbsp;&nbsp;<?php echo "Php " . $rateperhour; ?></td>
                </tr>
            </table>
        </div>
        <script src="scripts/jquery.min.js"></script>
        <script src="scripts/main.js"></script>
	</body>
</html>
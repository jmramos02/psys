<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>My Info</title>
		<link rel="stylesheet" href="styles/main.css">
    	<link href= "styles/ionicons/css/ionicons.min.css" rel="stylesheet">
	</head>
	<body>
          <h3>Pending Loan Request</h3>
            <?php 
                if(isset($_GET['r'])){
                    include 'reqview.php';
            }

                else{?>
                  <table border='1'>
                                  
                    <?php
                      $query = "SELECT * FROM employeemasterfile.loanrequest where status = 'waiting for approval'" or die("Error " . mysqli_error($link));
                      $result = conString($query);
                      $rows = mysqli_num_rows($result);

                    if($rows >= 1){?>
                      <th>Loan Request Number</th>
                      <th>Employee Number</th>
                      <th>Name</th>
                      <th>Date Issued</th>
                      <th></th>
                    <?php while($rows = mysqli_fetch_array($result)){
                        $query2 = "SELECT lastname, firstname, middlename from employeemasterfile.employee where empNum='$rows[0]'" or die("Error." . mysqli_error($link));
                        $result2 = conString($query2);
                        $rows2 = mysqli_fetch_array($result2);
                        $r = $rows[4];
                        $e = $rows[0];
                        if ($_SESSION['empNum'] != $rows[0]){
                      echo 
                        "<tr>
                        <td>$rows[4]</td> 
                        <td>$rows[0]</td> 
                        <td>$rows2[0], $rows2[1]  $rows2[2]</td>
                        <td>$rows[1]</td>
                        <td><a href='requestApproval.php?pend=2&e=$e&r=$r'>Full Details</a></td>
                        </tr>";
                      }
                    }
                  }

                else{
                  echo "No Records found";
                }
              }
            ?>
          </table>
    <script src="scripts/jquery.min.js"></script>
    <script src="scripts/main.js"></script>
	</body>
</html>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Leave Approval</title>
		<link rel="stylesheet" href="styles/main.css">
    	<link href= "styles/ionicons/css/ionicons.min.css" rel="stylesheet">
	</head>
	<body>
            <h3>Pending Leave Request</h3>


            <?php 
                if(isset($_GET['r'])){
                    include 'reqview.php';
                }

                else{?>

                <table border='1'>                    
                    <?php
                        $link = mysqli_connect("localhost", "admin", "Jeremy03", "EmployeeMasterFile") or die("Error " . mysqli_error($link));
                        $query = "SELECT * from employeemasterfile.leaveRequest where status='waiting for approval';" or die("Error. " . mysqli_error($link));
                        $result = $link->query($query);
                        $rows = mysqli_num_rows($result);
    			
                        if($rows >= 1){?>
                            <th>Request Number</th>
                            <th>Employee Number</th>
                            <th>Name</th>
                            <th>Leave Starting Date</th>
                            <th>Type of Leave</th>
                            <th></th>
                        <?php while($rows = mysqli_fetch_array($result)){
                                $query2 = "SELECT lastname, firstname, middlename from employeemasterfile.employee where empNum='$rows[0]'" or die("Error." . mysqli_error($link));
                                $result2 = $link->query($query2);
                                $rows2 = mysqli_fetch_array($result2);
                                $e = $rows[0];
                                $r = $rows[5];
                                if ($_SESSION['empNum'] != $rows[0]){
                                echo 
                                    "<tr>
                                        <td>$rows[5]</td> 
                                        <td>$rows[0]</td> 
                                        <td>$rows2[0], $rows2[1]  $rows2[2]</td>";
                                    $dt = new DateTime($rows[2]);
                                    $date = $dt->format('F d, Y');
                                echo 
                                        "<td>$date</td>
                                        <td>$rows[7] Leave</td>
                                        <td><a href='requestApproval.php?pend=1&e=$e&r=$r'>Full Details</a></td>
                                    </a></tr>";
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
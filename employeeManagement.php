<?php
    session_start();
    error_reporting(0);
    $query = "SELECT COUNT(empNum) FROM employeemasterfile.Employee"; 
    include 'connString.php';
    $result = conString($query); 
    $row = mysqli_fetch_row($result); 
    $total_records = $row[0]; 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Employee Management</title>
        <link rel="stylesheet" href="styles/main.css">
        <link href= "styles/ionicons/css/ionicons.min.css" rel="stylesheet">
    </head>
    <body>
        <?php
            include 'posCheck.php';
            posNavbar();
        ?>
        

        <div class='content'>
            <h3>Employee List</h3>
            <hr width="100%"/><div class = "search">
            <h5><?php echo " $total_records Current Employees"?></h5>
            <form method='POST' action='process_emp.php'>
                <a href="AddEmployee.php"><span class="DBfont">Add New Employee</span></a>

                <br>
                <a href="archive.php"><span class= "DBfont">View Removed Employee Records</span></a>
                <br>
                Search: <input type="text" name="search">
                Search by: 
                <select name="searchBy">
                    <option selected value='empNum'>Employee Number</option>
                    <option value='lastName'>Last Name</option>
                    <option value='address'>Address</option>
                    <option value='nationality'>Nationality</option>
                    <option value='maritalStatus'>Marital Status</option>
                </select>

               <div class='icons'><a name='act' value='Search' href='process_emp.php'>
              <button class='iconic ion-ios-search-strong'name='act' value='Search'>&nbsp;Search</button></a>
            </div>
                
                    <div class='icons'><a name='act' value='Edit' href='process_emp.php'>
              <button class='iconic ion-ios-compose-outline' name='act' value='Edit' href='process_emp.php'>&nbsp;Edit</button></a>
            </div>

            <div class='icons'><a href='deleteRecord.php' name='act' value='Delete' href='process_emp.php'>
              <button class='iconic ion-ios-trash-outline' name='act' value='Delete' href='process_emp.php'>&nbsp;Delete</button></a>
            </div>
                <br>
                <br>
                                           
                <table class="table1">                                                
                    <?php
                        if (isset($_GET['search'])){
                            echo "<tr>
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
                                </tr>";
                                if (isset($_GET["pages"])) { $page  = $_GET["pages"]; } else { $page=1; }; 
                                $start_from = ($page-1) * 10;
                                $q = "SELECT * FROM employeemasterfile.employee WHERE " . $_SESSION['searchby'] . " LIKE '%" . $_SESSION['search'] . "%' ORDER BY empNum ASC LIMIT $start_from, 10;" or die("Error. " . mysqli_error($link));
                                $result = conString($q);
                                $rows = mysqli_num_rows($result);
                                if ($rows >= 1){
                                    while($rows = mysqli_fetch_array($result)){
                                        echo 
                                            "<tr>
                                                <td><input type='radio' name=empNum value='$rows[0]' selected='selected'/></td>
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
                                }

                            $query = "SELECT COUNT(empNum) FROM employeemasterfile.employee WHERE " . $_SESSION['searchby'] . " LIKE '%" . $_SESSION['search'] . "%';" or die("Error. " . mysqli_error($link));
                            $result = conString($query);  
                            $row = mysqli_fetch_row($result); 
                            $total_records = $row[0]; 
                            $total_pages = ceil($total_records / 10);  
    
                            for ($i=1; $i<=$total_pages; $i++) { 
                                echo "<a href='employeeManagement.php?search=".$_SESSION['search']."&pages=".$i."'>".$i."</a> "; 
                            }
                            
                        }

                        else{?>

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

                        <?php if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
                        $start_from = ($page-1) * 10; 
                        $query = "SELECT * from employeemasterfile.Employee order by empNum asc limit $start_from, 10" or die("Error. " . mysqli_error($link));
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
            </form>
            <?php 
                $query = "SELECT COUNT(empNum) FROM employeemasterfile.Employee"; 
                $result = conString($query);  
                $row = mysqli_fetch_row($result); 
                $total_records = $row[0]; 
                $total_pages = ceil($total_records / 10);  
    
                for ($i=1; $i<=$total_pages; $i++) { 
                    echo "<a href='employeeManagement.php?page=".$i."'>".$i."</a> "; 
                    }
                }
            ?>  


            </div>
        </div>
        <script src="scripts/jquery.min.js"></script>
        <script src="scripts/main.js"></script>
    </body>
</html>
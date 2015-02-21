<?php
	session_start();
    error_reporting(0);
    $num = $_SESSION['search'];
    include 'connString.php';
    $query = "SELECT * FROM employeemasterfile.employee where empNum='$num';" or die("Error " . mysqli_error($link));
    conString($query);
    $result = constring($query);
    $rows = mysqli_fetch_array($result);

    $query = "INSERT INTO employeemasterfile.deleted values('$rows[0]', '$rows[1]', '$rows[2]', '$rows[3]', '$rows[4]', '$rows[5]', '$rows[6]', '$rows[7]', '$rows[8]', '$rows[9]', '$rows[10]', '$rows[11]');" or die("Error " . mysqli_error($link));
    constring($query);
    
    $query = "SELECT * FROM employeemasterfile.birmasterfile where empNum='$num';" or die("Error " . mysqli_error($link));
    conString($query);
    $result = constring($query);
    $rows = mysqli_fetch_array($result);
    
    $query = "INSERT INTO employeemasterfile.deletedbir VALUES('$rows[0]', '$rows[1]', '$rows[2]');" or die("Error " . mysqli_error($link));
    constring($query);

    $query = "DELETE FROM employeemasterfile.birmasterfile where employeenumber='$num';" or die("Error " . mysqli_error($link));
    $result = constring($query);
    
    $query = "SELECT * FROM employeemasterfile.pagibigmasterfile where empNum='$num';" or die("Error " . mysqli_error($link));
    conString($query);
    $result = constring($query);
    $rows = mysqli_fetch_array($result);
    
    $query = "INSERT INTO employeemasterfile.deletedpagibig VALUES('$rows[0]', '$rows[1]');" or die("Error " . mysqli_error($link));
    constring($query);
    
    $query = "DELETE FROM employeemasterfile.pagibigmasterfile where employeeNumber='$num';" or die("Error " . mysqli_error($link));
    $result = constring($query);
    
    $query = "SELECT * FROM employeemasterfile.philhealthmasterfile where empNum='$num';" or die("Error " . mysqli_error($link));
    conString($query);
    $result = constring($query);
    $rows = mysqli_fetch_array($result);
    
    $query = "INSERT INTO employeemasterfile.deletedphilhealth VALUES('$rows[0]', '$rows[1]');" or die("Error " . mysqli_error($link));
    constring($query);

    $query = "DELETE FROM employeemasterfile.philhealthmasterfile where employeenumber='$num';" or die("Error " . mysqli_error($link));
    $result = constring($query);
    
    $query = "SELECT * FROM employeemasterfile.sss where empNum='$num';" or die("Error " . mysqli_error($link));
    conString($query);
    $result = constring($query);
    $rows = mysqli_fetch_array($result);
    
    $query = "INSERT INTO employeemasterfile.deletedsss VALUES('$rows[0]', '$rows[1]');" or die("Error " . mysqli_error($link));
    constring($query);

    $query = "DELETE FROM employeemasterfile.sss where employeenumber='$num';" or die("Error " . mysqli_error($link));
    $result = constring($query);
    
    $query = "DELETE FROM employeemasterfile.employee where empNum='$num';" or die("Error " . mysqli_error($link));
    $result = constring($query);
    $query = "DELETE FROM employeemasterfile.emplogin where employeeNum='$num';" or die("Error " . mysqli_error($link));
    $result = constring($query);
    

    echo "<script>
    	alert('Record deleted');
        window.location.href='employeemanagement.php';
        </script>";
?>
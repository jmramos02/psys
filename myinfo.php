<?php
session_start();
include 'connString.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>My Info</title>
        <meta name="generator" content="Bootply">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="styles/main.css">
        <link href= "styles/ionicons/css/ionicons.min.css" rel="stylesheet">
    </head>


<body background="images/bg.jpg">
    <?php 
    include 'poscheck.php';
    posNavbar();
    $username = $_SESSION['empNum'];
    $query = "SELECT address, birthday, contactnumber, nationality, maritalstatus, gender from employeemasterfile.employee where empNum = '$username'" or die("Error. " . mysqli_error($link));
    $result = conString($query);
    while($rows = mysqli_fetch_array($result)){
        $address = $rows[0];
        $date = new datetime($rows[1]);
        $birthday = $date->format('M d, Y');
        $conNum = $rows[2];
        $nationality = $rows[3];
        $maritalStatus = $rows[4];
        $gender = $rows[5];
    }

    $query = "SELECT * from employeemasterfile.birmasterfile where employeeNumber = '$username'" or die("Error. " . mysqli_error($link));
    $result = conString($query);
    while($rows = mysqli_fetch_array($result)){
        $tin = $rows[1];
    }

    $query = "SELECT * from employeemasterfile.pagibigmasterfile where employeeNumber = '$username'" or die("Error. " . mysqli_error($link));
    $result = conString($query);
    while($rows = mysqli_fetch_array($result)){
        $pagibig = $rows[1];
    }

    $query = "SELECT * from employeemasterfile.philhealthmasterfile where employeeNumber = '$username'" or die("Error. " . mysqli_error($link));
    $result = conString($query); 
    while($rows = mysqli_fetch_array($result)){
        $philhealth = $rows[1];
    }
    $query = "SELECT * from employeemasterfile.sss where employeeNumber = '$username'" or die("Error. " . mysqli_error($link));
    $result = conString($query);
    while($rows = mysqli_fetch_array($result)){
        $sss = $rows[1];
    }
    ?>




    <div class = 'content text'>
        <div class = 'upic'>
            <img src='images/p.jpg'>
          

        <div class = 'upic-text'><a href='myinfo.php'>Personal Info</a></div>
            <div class = 'upic-text'><a href='employmentinfo.php'>Employment Info</a></div>

        <div class= 'in-content'><?php echo $_SESSION['lastname'] , ", " , $_SESSION['firstname'] , " " , $_SESSION['middlename'];?></div>

    </div>


    <div class = 'context'>

        <table class = "table">
    <tr>
    <td class = "header table__header" colspan = 2>
        <span class = "header__text">Personal Info</span>


    <?php 
        if (isset($_GET['edit'])) {
            $_SESSION['hrFunction'] = false;
            include 'editinfo.php';
        } 

        else {?>
        <button class = "btn btn--primary header__button--right"><?php echo "<a href='myinfo.php?edit=" , $_SESSION['empNum'], "'>"?>Edit</a></button>                  
        </td>   
        </tr>
            <tr>
                <td><b>Address:</b></td>
                <td><?php echo $address;?> </td>
            </tr>

            <tr>
                <td><b>Birthday:</b></td>
                <td> <?php echo $birthday;?></td>
            </tr>
            
            <tr>
                <td><b>Gender:</b></td>
                <td> <?php echo $gender;?></td>
            </tr>

            <tr>
                <td><b>Contact Number:</b></td>
                <td>&nbsp;&nbsp;<?php echo $conNum;?></td>
            </tr>

            <tr>
                <td><b>Nationality:</b></td>
                <td>&nbsp;&nbsp;<?php echo $nationality;?></td>
            </tr>

            <tr>
                <td><b>Marital Status:</b></td>
                <td>&nbsp;&nbsp;<?php echo $maritalStatus;?></td>
            </tr>

            <tr>
                <td><b>Tax Identification Number:</b></td>
                <td>&nbsp;&nbsp;<?php echo $tin;?></td>
            </tr>

            <tr>
                <td><b>SSS Number:</b></td>
                <td>&nbsp;&nbsp;<?php echo $sss;?></td>
            </tr>

            <tr>
                <td><b>Philhealth Number:</b></td>
                <td>&nbsp;&nbsp;<?php echo $philhealth;?></td>
            </tr>

            <tr>
                <td><b>Pag-IBIG Number:</b></td>
                <td>&nbsp;&nbsp;<?php echo $pagibig;?></td>
            </tr><?php }?>
    </table>     
</div>

<script src="scripts/jquery.min.js"></script>
<script src="scripts/main.js"></script>
</body>
</html>
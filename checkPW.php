<?php
    SESSION_START();
    //error_reporting(0);
    include 'connString.php';
    $username = mysqli_escape_string($link ,$_POST['empNum']);
    $pw = mysqli_escape_string($link, $_POST['pw']);
    $query = "SELECT * from employeemasterfile.emplogin where employeeNum = '$username' and pass = '$pw';" or die("Error. " . mysqli_error($link));
    $result = conString($query);
    $rows = mysqli_num_rows($result);

    if ($rows == 1){
        $query = "SELECT PositionCode, lastname, firstname, middlename FROM employeemasterfiles.employee WHERE empnum = '$username';" or die("Error. " . mysql_error($link));
        $result = conString($query); 
        $row = mysqli_fetch_array($result);
        $_SESSION['posCode'] = $row[0];
        $_SESSION['lastname'] = $row[1];
        $_SESSION['firstname'] = $row[2];
        $_SESSION['middlename'] = $row[3];
        $_SESSION['empNum'] = $username;
        echo $row[0];
        echo $row[1];
        echo $row[2];
        echo $row[3];
        
        header("Location:../psys/");
    }else{
        echo "<script>
                alert('Invalid Employee Number or Password');
                window.location.href='login.php';
            </script>";
    }
?>
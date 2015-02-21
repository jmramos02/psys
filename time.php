<?php
    include 'connString.php';
	$username = mysqli_escape_string($link ,$_POST['empNum']);
    $pw = mysqli_escape_string($link, $_POST['pw']);
    $query = "SELECT * from employeemasterfile.emplogin where employeeNum = '$username' and pass = '$pw';" or die("Error. " . mysqli_error($link));
    $result = conString($query);
    $rows = mysqli_num_rows($result);

    if ($rows == 1){
    	$dt = new DateTime();
    	$date = $dt->format('Y-m-d');
    	$time = $dt->format('H:i:s');
        $HourIn = $dt->format('H');
        $MinIn = $dt->format('i');
        $late = $HourIn - 8;
    	$query = "SELECT * from employeemasterfile.employeelogs where employeeNumber='$username' AND workDate='$date';" or die("Error. " . mysqli_error($link));
    	$result = conString($query);
    	$rows = mysqli_num_rows($result);

    	if($rows == 1){
            if($hourIn > 17){
                $query = "SELECT * FROM employeemasterfile.utrequest where empNum='$username' AND dateAB='$date';" or die ("Error " . mysqli_error($link));
                $result = constring($query);
                $rows = mysqli_num_rows($result);

                if($rows == 1){
                    $ut = 60 - $MinIn;
                    $ut = 60 - $ut;
                    $hourIn = 17 - $hourIn;
                    $hourIn *= 60;
                    $ut+= $hourIn;  
                }
            }

            else{
                $query = "SELECT * FROM employeemasterfile.otrequest where empNum='$username' AND dateAB='$date';" or die ("Error " . mysqli_error($link));
                $result = constring($query);
                $rows = mysqli_num_rows($result);

                if($rows == 1){
                    $ot = 60 - $MinIn;
                    $ot = 60 - $ot;
                    $hourin -= 17;
                    $hourin *= 60;
                    $ot += $hourin;
                }

            }
	    	$query = "UPDATE employeemasterfile.employeelogs set timeOut='$time' where employeeNumber='$username' AND workDate='$date';" or die("Error. " . mysqli_error($link));
    		conString($query);
    		header("Location: dailylogs.php");
    	}

	    else{
            $HourIn = $dt->format('H');
            $MinIn = $dt->format('i');
            $late = $HourIn - 8;
            $late*= 60;
            $late+= $MinIn;
            if ($late <= 0){
                $late = 0;
            }

	    	$query = "INSERT INTO employeemasterfile.employeelogs values ('$username', '$date', '$time', '', 'normal', '$late', 0, 0);" or die("Error. " . mysqli_error($link));
    		conString($query);
    		header("Location: dailylogs.php");
	    }
    }

    else{
        echo "invalid employee number or password";
    }

?>
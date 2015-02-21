<?php
	session_start();
	include 'connString.php';
?>
<html>
	<head>
		<meta charset="UTF-8">
    	<title>Notification</title>
    	<link rel="stylesheet" href="styles/main.css">
    	<link href= "styles/ionicons/css/ionicons.min.css" rel="stylesheet">
	</head>
	<body>
		<?php
			include 'posCheck.php';
     		posNavbar();
			$query = "SELECT * FROM employeemasterfile.changes where checked='false' order by datechanged" or die("Error. " . mysqli_error($link));
			$result = constring($query);
		?>

		<div class='content'>
			<table>
				<?php
					while ($rows = mysqli_fetch_array($result)){
						echo "<tr>";
						echo "<td>";
						$dt = new datetime($rows[0]);
						$date = $dt->format('F d, Y'); 
						$time = $dt->format('H:i'); 
						$query2 = "SELECT lastname, firstname, middlename FROM employeemasterfile.employee where empnum='$rows[1]'" or die("Error. " . mysqli_error($link));
						$result2 = constring($query2);
						$rows2 = mysqli_fetch_array($result2);
						$string = "*$rows2[0], $rows2[1] $rows2[2] changed";
						if($rows[2] == 1){
							$string = $string . " contact number";
						}				

						if($rows[5] == 1){
							$string = $string . " address";
						}
						echo $string;
						echo "</td>";
						echo "</tr>";
					}
				?>
				<?php $query = "UPDATE employeemasterfile.changes SET checked='yeah'" or die("Error. " . mysqli_error($link));
				constring($query);

				$query = "SELECT * FROM employeemasterfile.changes where checked='yeah' order by datechanged" or die("Error. " . mysqli_error($link));
				$result = constring($query);
				while ($rows = mysqli_fetch_array($result)){
					echo "<tr>";
					echo "<td>";
					$dt = new datetime($rows[0]);
					$date = $dt->format('F d, Y'); 
					$time = $dt->format('H:i'); 
					$query2 = "SELECT lastname, firstname, middlename FROM employeemasterfile.employee where empnum='$rows[1]'" or die("Error. " . mysqli_error($link));
					$result2 = constring($query2);
					$rows2 = mysqli_fetch_array($result2);
					$string = "$rows2[0], $rows2[1] $rows2[2] changed";
					if($rows[2] == 1){
						$string = $string . " contact number";
					}				

					if($rows[5] == 1){
						$string = $string . " address";
					}
					echo $string;
					echo "</td>";
					echo "</tr>";
				}?>
			</table>
		</div>
	</body>
</html>
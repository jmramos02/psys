<?php
	include 'connstring.php';
?>

<html>
	<head>
	</head>

	<body>
		<table>
		<?php
			$query = "SELECT DISTINCT payrollstart, payrollend FROM employeemasterfile.payslip;" or die("Error ". mysqli_error($link));
			$result = constring($query);?>
			<th>Payroll Start Date</th>
			<th>Payroll End Date</th>

			<?php while($rows = mysqli_fetch_array($result)){?>
				<tr align='center'>
					<td><a href='viewreports.php?view=1&date=<?php echo $rows[0]?>&end=<?php echo $rows[1]?>'><?php echo $rows[0]?></a></td>
					<td><a href='viewreports.php?view=1&date=<?php echo $rows[0]?>&end=<?php echo $rows[1]?>'><?php echo $rows[1]?></a></td>
				</tr>
			<?php }?>
		</table>
	</body>
</html>
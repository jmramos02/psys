<?php
	$link = mysqli_connect("0.0.0.0", "admin", "Jeremy03") or die("Error " . mysqli_error($link));

	function conString($query){
		$link = mysqli_connect("0.0.0.0", "admin", "Jeremy03") or die("Error " . mysqli_error($link));
		$result = $link->query($query);
		return $result;
	}
?>
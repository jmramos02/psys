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

		<div id="notif">
			<div class = "notif_text notif_table_header notif_header notifheader__text">
			"Joey Hipolito has changed his telephone number."	
    		"Jeremy Jacala has changed his address."
    		"Israel Arnar has changed his contact number."
    		"Sharmaine Quitaleg changed her telephone number."
    		"Nikole Infante changed her address."
    		<br>
      		<br>  
    		<button id="close">Close</button>
    	</div>
		</div>

		<script src="notification.js"></script>
	</body>
</html>		
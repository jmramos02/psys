<!DOCTYPE html>
<html>
	<head>
		<title>DAILY LOGS</title>
		<script type="text/javascript" src="date_time.js"></script>
		 <link rel="stylesheet" href="styles/main.css">
	</head>

	<body class = "bg-dailylogs" align = "center">
	<div class = "daily">
		
	<div class = "daily-logs">
		<form method='POST' action='time.php'>
		<div class = "header-logs">
                <span class="daily-text">DAILY LOGS</span>
                </div>
			<span id="date_time"></span>
            <script type="text/javascript">window.onload = date_time('date_time');</script>

             <div class="logs">
  <p><label for="employeeNumber">EMPLOYEE NUMBER:</label></p>
 <P><input name="empNum" type="text"/></P>
 <p> <label for="pin">PIN:</label></p>
  <P><input  name="pw" type="password"></P>

<input type='submit' value='submit'>
            </div>
		</form>
        </div>
        </div>
           
			
	</body>
</html>
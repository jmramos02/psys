<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>ICI MINISTRIES PHILIPPINES</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="styles/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/styless.css">
	</head>

  <body>
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href=" "><img src="images/header.png" width="60%" height="60%"></a>
        </div>
      </div>
    </div>
    <br><br><br>
    <br><br>
    <?php if(isset($_SESSION['empNum'])){
      header("LOCATION: ../new/");
    }

    else{?> 
    <form method="POST" action='checkPW.php'>
      <div id="login">
        <div id="align_center">
          <h1>User Log in</h1>
          <b>Username: </b>  <input type ="text" id="empNum" name="empNum" style="border-color:#e0e0e0"><br><br>   
          <b> Password: </b> <input type ="password" id="pw" name="pw" style="border-color:#e0e0e0"><br>
        </div>
      </div><br>
      <center><input type="submit" value="Submit"></center><br> 
    </form>
    <?php }?>
  </body>
</html> 
<?php
  session_start();
  error_reporting(0);
  include 'connString.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>ICI Ministries Philippines Inc.</title>
    <link rel="stylesheet" href="styles/main.css">
    <link href= "styles/ionicons/css/ionicons.min.css" rel="stylesheet">
    <script type="text/javascript" src="date_time.js"></script>
  </head>
  <body>
    <?php 
      include 'posCheck.php';
      posNavbar();
      $username = $_SESSION['empNum'];
    if(isset($_SESSION['empNum'])){?>
    <div class='content'>
    <div id = "mydailylogs-bg">
      <i class='indexicon ion-android-contact'></i>
      <br>
      <span class = "h1">Hello, <?php echo $_SESSION['lastname'] , ", " , $_SESSION['firstname'] , " " , $_SESSION['middlename'];?></span>
      <br><br><br><br><br>

      <script src="notification.js"></script>
      <script type='text/javascript' src="notification.js">window.onload = toggleModal();</script>

      <span id="date_time"></span>
      <script type="text/javascript">window.onload = date_time('date_time');</script>
      <br>
      <br>
      <button class = "btn"><a href='mydailylogs.php'>DAILY LOGS</a></button>
      <?php if($_SESSION['posCode'] == '0003'){?>
        <script src="scripts/notification.js"></script>
        <!--<div id="notif">
          <div class = "notif_text notif_table_header notif_header notifheader__text">
            "Joey Hipolito changed his telephone number."
            <br>
            <br>  
            <button id="close">Close</button>
          </div>
        </div>-->
        <button class = "btn"><a href='employeeattendance.php'>Employee Attendance</a></button>
      <?php }?>


            
    </div>
    </div>
    <?php }
    else{?>
      <div class='content'>
        please login.
        <button class = "btn"><a href='login.php'>Click here to login</a></button>
      </div>
      </div>
    <?php }?>
    <script src="scripts/jquery.min.js"></script>
    <script src="scripts/main.js"></script>
  </body>
</html>
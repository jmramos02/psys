<?php
	echo "<div class='wrapper'>
    <div class='sidebar'>
      <div class='branding'>
        <img src='images/logo.png' alt='' class='logo'>
        <span class='branding__text'>
          ICI Ministries Philippines Inc.
        </span>
      </div>
      <ul class='primary-nav'>
        <li>
          <div class='media'><a href='index.php'>
            <i class='icon media__fig ion-ios-home'></i>
            </a>
            <span class='media__text'>Home</span>
          </div>
        </li>
        <li>
          <div class='media'><a href='directorindex.php'>
            <i class='icon media__fig ion-ios-person'></i>
            <span class='media__text'>My Info</span>
            </a>
          </div>
        </li>
        <li>
          <div class='media'><a href='mypayslip.php'>
            <i class='icon media__fig ion-cash'></i>
            <span class='media__text'>My Payslip</span>
            </a>
          </div>
        </li>
 
        <!-- <li class='has-dropdown'>
          <div class='media'><a href='index.php'>
            <i class='icon media__fig ion-person'></i>
            <span class='media__text'>Request Forms</span>
            </a>
            <i class='icon media__fig--right ion-android-arrow-dropdown dropdown__trigger'></i>
          </div>
          <ul class='secondary-nav'>
              <li>Sick Leave</li>
              <li>Birthday Leave</li>
              <li>Maternity Leave</li>
              <li>Paternity Leave</li>
              <li>Off-Set</li>
          </ul>
        </li> -->

        <li>
          <div class='media'><a href='reqlist.php'>
            <i class='icon media__fig ion-android-list'></i>
            <span class='media__text'>Request List</span>
            </a>
          </div>
        </li>

        <li>
          <div class='media'><a href='empmanagement.php'>
            <i class='icon media__fig ion-person-stalker'></i>
            <span class='media__text'>Employee Management</span>
            </a>
          </div>
        </li>

        <li>
          <div class='media'><a href='logout.php'>
            <i class='icon media__fig ion-log-out'></i>
            <span class='media__text'>Log out</span>
            </a>
          </div>
        </li>


      </ul>
    </div>
    <div class='content'>
      <button class='btn btn-default'></button>
    </div>
  </div>";
?>
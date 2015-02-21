<?php
	function posNavbar(){
		switch ($_SESSION['posCode']) {
			case '0001':
				require 'navbar/dirNavbar2.php';
				break;

			case '0002':
				require 'navbar/accNavbar2.php';
				break;
			
			case '0003':
				require 'navbar/hrNavbar2.php';
				break;

			case '0004':
				require 'navbar/normNavbar2.php';
				break;

			default:
				require 'navbar/normNavbar2.php';
				break;
		}
	}

	function posIndex(){
		switch ($_SESSION['posCode']) {
			case '0001':
				echo "<div class='btn-group'>
                        <a href='directormyinfo.php'><button type='button' class='btn btn-primary' style='width:280px;'>
                        	<center><img src='../icons/User-Information-128.png'>My Info</center>
                        </button></a>
                    </div>
                    
                    <div class='btn-group'>
                        <a href='directormypayslip.php'><button type='button' class='btn btn-success' style='width:280px;'>
                        	<center><img src='../icons/ATM-128.png'>My Payslip</center>
                        </button></a>
                    </div>
                    
                    <div class='btn-group'>
                    	<a href='employeemanagement.php'><button type='button' class='btn btn-warning' style='width:280px;'>
                        	<div style='width:100%'>
                        		<img src='../icons/Employee-128.png' style='width:50%;'>
                    			<div style='width:50%; float:right; margin:45px 0px 0px 0px;'>
				                    Employee<br>Management
                				</div>
                            </div>
                        </button></a>
					</div>

                    <div class='btn-group'>
                    	<a href='login.php'><button type='button' class='btn btn-danger' style='width:280px;'>
                        	<center><img src='../icons/Logout-128.png'>Logout</center>
                        </button></a>
                    </div>";

				break;

			case '0002':
				echo "<div class='btn-group'>
                        <a href='myinfo.php'><button type='button' class='btn btn-primary' style='width:224px;'>
                        	<center><img src='../icons/User-Information-128.png'><br>My Info</center>
				        </button></a>
                    </div>
                    
                    <div class='btn-group'>
                        <a href='mypayslip.php'><button type='button' class='btn btn-success' style='width:224px;'>
                        	<center><img src='../icons/ATM-128.png'><br>My Payslip</center>
                        </button></a>
                    </div>
                    
                    <div class='btn-group'>
                        <a href='payrollGeneration.php'><button type='button' class='btn btn-success' style='width:224px;'>
                        	<center><img src='../icons/ATM-128.png'><br>Payroll Generation</center>
                        </button></a>
                    </div>
                    
                    <div class='btn-group'>
                        <a href='reqform.php'><button type='button' class='btn btn-info' style='width:224px;'>
                            <center><img src='../icons/Note-Information-128.png'><br>Request Forms</center>
                        </button></a>         
                    </div>
                    
                    <div class='btn-group'>
                        <a href='employeeManagement.php'><button type='button' class='btn btn-warning' style='width:224px;'>
                        	<center><img src='../icons/Employee-128.png'><br>Employee Mangement</center>
                        </button></a>
                    </div>
                    
                    <div class='btn-group'>
                        <a href='login.php'><button type='button' class='btn btn-danger' style='width:224px;'>
                        	<center><img src='../icons/Logout-128.png'><br>Logout</center>
                        </button></a>
                    </div>
				";
				break;
			
			case '0003':
				echo "<div class='btn-group'>
                        <a href='myinfo.php'><button type='button' class='btn btn-primary' style='width:224px;'>
                        	<center><img src='../icons/User-Information-128.png'><br>My Info</center>
                        </button></a>
                    </div>
                    
                    <div class='btn-group'>
                        <a href='mypayslip.php'><button type='button' class='btn btn-success' style='width:224px;'>
                        	<center><img src='../icons/ATM-128.png'><br>My Payslip</center>
                        </button></a>
                    </div>
                    
                    <div class='btn-group'>
                        <a href='reqform.php'><button type='button' class='btn btn-info' style='width:224px;'>
                        	<center><img src='../icons/Note-Information-128.png'><br>Request Forms</center>
                        </button></a>
                    </div>
                    
                    <div class='btn-group'>
                    	<a href='employeemanagement.php'><button type='button' class='btn btn-warning' style='width:224px;'>
                        	<center><img src='../icons/Employee-128.png'><br>Employee Mangement</center>
                        </button></a>
                    
                    </div>
                    
                    <div class='btn-group'>
                        <a href='requestApproval.php'><button type='button' class='btn btn-warning' style='width:224px;'>
                            <center><img src='../icons/Employee-128.png'><br>Request Approval</center>
                        </button></a>
                    </div>
                    
                    <div class='btn-group'>
                    	<a href='login.php'><button type='button' class='btn btn-danger' style='width:224px;'>
                        	<center><img src='../icons/Logout-128.png'><br>Logout</center>
                        </button></a>
                    </div>";
				break;

			case '0004':
				echo "<div class='btn-group'>
						<a href='myinfo.php'><button type='button' class='btn btn-primary' style='width:280px;'>
                        	<center><img src='../icons/User-Information-128.png'>My Info</center>
                        </button></a>
                    </div>
                    
                    <div class='btn-group'>
                    	<a href='mypayslip.php'><button type='button' class='btn btn-success' style='width:280px;'>
                        	<center><img src='../icons/ATM-128.png'>My Payslip</center>
                        </button></a>
                    </div>
                    
                    <div class='btn-group'>
                    	<a href='reqform.php'><button type='button' class='btn btn-info' style='width:280px;'>
                        	<center><img src='../icons/Note-Information-128.png'>Request Forms</center>
                    	</button></a>            
                    </div>

                    <div class='btn-group'>
                    	<a href='login.php'><button type='button' class='btn btn-danger' style='width:280px;'>
                        	<center><img src='../icons/Logout-128.png'>Logout</center>
                        </button></a>
                    </div>";
				break;

			default:
				echo "<div class='btn-group'>
						<a href='myinfo.php'><button type='button' class='btn btn-primary' style='width:280px;'>
                        	<center><img src='../icons/User-Information-128.png'>My Info</center>
                        </button></a>
                    </div>
                    
                    <div class='btn-group'>
                    	<a href='mypayslip.php'><button type='button' class='btn btn-success' style='width:280px;'>
                        	<center><img src='../icons/ATM-128.png'>My Payslip</center>
                        </button></a>
                    </div>
                    
                    <div class='btn-group'>
                    	<a href='reqform.php'><button type='button' class='btn btn-info' style='width:280px;'>
                        	<center><img src='../icons/Note-Information-128.png'>Request Forms</center>
                    	</button></a>            
                    </div>

                    <div class='btn-group'>
                    	<a href='login.php'><button type='button' class='btn btn-danger' style='width:280px;'>
                        	<center><img src='../icons/Logout-128.png'>Logout</center>
                        </button></a>
                    </div>";
				break;
		}

	}
?>
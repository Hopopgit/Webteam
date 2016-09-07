<!Doctype>
//<?php 

//include("functions/functions.php");

//?>
<html>
	<head>
			<title>Admin Interanl-Site</title> 
			<link rel="stylesheet" href="styles/style.css" media="all" />
			
	</head>
	
<body>
<!--main wrapper starts from here-->
<div class="main_wrapper">

<!--header starts from here-->
<div class="header_wrapper">
		<a href="index.php"><img id="logo" src="images/redbeak.png"/></a>
</div>	
<!--header ends here-->

<!--menu bar starts from here-->	
<div class="menubar">
	<ul id="menu">
		<li><a href="index.php">Home</a></li>
		<li><a href="reg.php">All Users</a></li>
		<li><a href="myaccount.php">My Account</a></li>
		<li><a href="#">Update Info</a></li>		
		<li><a href="#">Notifications</a></li>
	</ul>
<div id="logout" >
<a href="login.html">Logout</a>
		<!--<form method="get" action="results.php" enctype="multipart/form-data">
			<input type="text" name="user_query" placeholder="Enter Here"/>
			<input type="submit" name="search" value="search"/>
		</form>-->
</div>
</div>


<!--menu bar ends here-->

<!--content wrapper starts from here-->
<div class="content_wrapper">
		<div id="sidebar">
		
				<div id="sidebar_title">Admin Panel</div>
		
						<ul id="cats">
						<li><a href="adduser.php">Add Internal User</a></li>
						<li><a href="useradmin.php">Update Internal Users</a></li>
						<li><a href="myaccount.php">Assign Roles to Users</a></li>
						<li><a href="#">Reports</a></li>
						<li><a href="#">Feedback</a></li>		
						<li><a href="#">Enquery</a></li>
						</ul>
		
				</div>
</div>
<!--footer starts from here-->
<div id="footer">
<h2 style="text-align:center; padding-top:15px; color:white;">&copy; 2016 by HopOp</h2>
<!--Footer ends here-->
</div>
<!--main wrapper ends here-->
</body>
</html>

 
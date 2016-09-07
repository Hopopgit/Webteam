<!Doctype>
<?php 

include("admin_area/includes/db.php");

?>
<html>
	<head>
			<title>Admin Interanl-Site</title> 
			
			<link rel="stylesheet" href="styles/style.css" media="all" />
			<link rel="stylesheet" href="styles/updateInternalUser.css" media="all" />
			
	</head>
	
<body>
<!--main wrapper starts from here-->
<div class="main_wrapper">

<!--header starts from here-->
<div class="header_wrapper">
		<a href="index.php"><img id="logo" src="images/redbeak.png"/></a>
		<!--img id="banner" src="images/banner1.jpg"/-->
</div>	
<!--header ends here-->


<!--menu bar starts from here-->	
<div class="menubar">
	<ul id="menu">
		<li><a href="index.php">Home</a></li>
		<li><a href="index.php">All Users</a></li>
		<li><a href="myaccount.php">My Account</a></li>
		<li><a href="#">Log Out</a></li>
		<!--li><a href="#">Shopping Cart</a></li>		
		<li><a href="#">CONTACT US</a></li-->
		
	</ul>
<div id="form" >
		<form method="get" action="results.php" enctype="multipart/form-data">
			<input type="text" name="user_query" placeholder="Search a Product"/>
			<input type="submit" name="search" value="search"/>
		</form>
</div>
</div>


<!--menu bar ends here-->

<!--content wrapper starts from here-->
<div class="content_wrapper">
				<div id="sidebar">
				<div id="sidebar_title">Admin Panel</div>
		
						<ul id="cats">
						<li><a href="addInternalUser.php">Add Internal User</a></li>
						<li><a href="updateInternalUser.php">Update Internal Users</a></li>
						<li><a href="myaccount.php">Assign Roles to Users</a></li>
						<li><a href="#">Reports</a></li>
						<li><a href="#">Feedback</a></li>		
						<li><a href="#">Enquery</a></li>
						</ul>
				</div>
				<div id="content_area" >
				<div id="search_user">
				<form method="get" action="updateInternalUserDetails.php" enctype="multipart/form-data" accept-charset="utf-8"><br>
				<br><br><br><br><br><p >
				<font color="black" size="5">Search Internal User to Update:</font>
				<input type="text" name="user_query" placeholder="Enter Mobile Num" required/>
				
				<input type="submit" name="search" value="search" >
				</p>
				</form>
				
				</div>
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

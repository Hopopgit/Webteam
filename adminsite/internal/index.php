<!DOCTYPE html>

<html>
	<head>
	<meta charset="utf-8" />
        <title> Login </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta content="width=device-width, initial-scale=1" name="viewport" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
			<title>Admin Interanl-Site</title> 
			
			<link rel="stylesheet" href="style.css" media="all" />
			
	</head>
	
<body>
<!--main wrapper starts from here-->
<div class="main_wrapper">

<!--header starts from here-->
<div class="header_wrapper">
		<a href="index.php"><img id="logo" src="redbeak.png"/></a>
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
<div id="form">
		<form method="get" action="results.php" enctype="multipart/form-data">
			<input type="text" name="user_query" placeholder="Search"/>
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
</div>
<!--footer starts from here-->
<div id="footer">
<h2 style="text-align:center; padding-top:15px; color:white;">&copy; 2016 by HopOp</h2>
<!--Footer ends here-->

</div>
<!--main wrapper ends here-->


</body>

</html>

 
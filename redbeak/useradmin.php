<!DOCTYPE html>

<html>

	<head>
	<meta charset="utf-8" />
        <title>user admin</title> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta content="width=device-width, initial-scale=1" name="viewport" />
			
			<!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
			
			<!--<link rel="stylesheet" href="style.css" media="all" />-->
			<link rel="stylesheet" href="styles/style.css" media="all" />
			
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
		<li><a href="reg.php">All Users</a></li>
		<li><a href="myaccount.php">My Account</a></li>
		<!--li><a href="#">Shopping Cart</a></li>		
		<li><a href="#">CONTACT US</a></li-->
		
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
						<li><a href="#">Reports</a></li>
						
						</ul>
		
		
</div>
<form action="#">
<div class="row" style="margin-top:20px">
<div class="col-md-2 col-sm-2">
<div class="form-group">
<label>Enter mobile number:</label><input type="text" name="user_mobile" class="form-control" placeholder="enter mobile number"/>
<p class="help-block text-danger"></p>
</div>
<div>
<div class="form-group">
<label>Enter email_Id:</label><input type="text" name="email" class="form-control"  placeholder="enter email_Id"/>
<p class="help-block text-danger"></p>
</div>
<div>
<div class="form-group">
<label>Enter first name:</label><input type="text" name="name" class="form-control"  placeholder="enter first name"/>
<p class="help-block text-danger"></p>
<button type="submit"  class="btn btn-primary" id="name_search" name="name_search">search</button>
</div>
</div>
</div>
</div>
</form>
</div>


<!--footer starts from here-->
<div id="footer">
<h2 style="text-align:center; padding-top:15px; color:white;">&copy; 2016 by HopOp</h2>
<!--Footer ends here-->

</div>
<!--main wrapper ends here-->


</body>

</html>

 
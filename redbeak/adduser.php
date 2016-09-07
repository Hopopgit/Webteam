<!DOCTYPE html>

<html>
	<head>
			<title>addinternaluser</title> 
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
<form action="#" method="post">
<div class="col-md-3" style="margin-top:20px;margin-left:200px">
<div class="form-group">
<input type="text" name="b_id" placeholder="First name" class="form-control" id="u_id"/>
</div>
<div class="form-group">
<input type="text" name="mobile" placeholder="last name" class="form-control" id="mobile"/>
</div>
<div class="form-group">
<input type="text" name="name" placeholder="login name" class="form-control" id="name"/>
</div>
<div class="form-group">
<input type="text" name="l_name" placeholder="Password" class="form-control" id="l_name"/>
</div>
<div class="form-group">
<input type="text" name="linkedin" placeholder="Email" class="form-control" id="linkedin"/>
</div>
<div class="form-group">
<select id="user_role" name="user_role" placeholder=" select user role" class="form-control">
<option>select user role</option></select>
</div>
<div class="form-group">
<select id="user_permission" name="user_permission" placeholder="select user permission" class="form-control">
<option>user permission</option></select>
</div>
<div class="form-group">
<input type="number" name="mobile" placeholder="Contact number" class="form-control" id="mobile"/>
</div>
<div class="form-group">
<textarea  name="address"  placeholder="Enter address" class="form-control" id="facebook"></textarea>
</div>
<div class="row">
<div class="form-group">
<a href="useradmin.html" class="btn btn-warning pull pull-right" role="button" id="save">Cancel</a>
<button class="btn btn-primary pull pull-left" id="save">Add user</button>
</div>
</div>
</div>
</form>
<!--footer starts from here-->
<div id="footer">
<h2 style="text-align:center; padding-top:15px; color:white;">&copy; 2016 by HopOp</h2>
<!--Footer ends here-->
</div>
<!--main wrapper ends here-->
</body>
</html>
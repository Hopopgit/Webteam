<!DOCTYPE html>

<html>
	<head>
			<title>updateuser.html</title> 
			<!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
			
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
<div class="col-md-3"style="margin-top:20px">
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
<input type="text" name="facebook" placeholder="User Role" class="form-control" id="facebook"/>
</div>
<div class="form-group">
<input type="email" name="email" placeholder="UserPermission" class="form-control" id="email"/>
</div>
<div class="form-group">
<input type="number" name="mobile" placeholder="Contact number" class="form-control" id="mobile"/>
</div>
<div class="form-group">
<textarea  name="address"  placeholder="Enter address" class="form-control" id="facebook"></textarea>
</div>
<div class="row">
<a href="useradmin.html" class="btn btn-warning pull pull-right" role="button">Cancel</a>
<button class="btn btn-primary pull pull-right" id="save">Save</button>
</div>
</div>
</form>
</body>
</html>
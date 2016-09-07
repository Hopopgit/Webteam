<!Doctype>
<?php 

include("functions/functions.php");

?>
<html>
	<head>
			<title>Admin Interanl-Site</title> 
			
			<link rel="stylesheet" href="styles/style.css" media="all" />
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
			<script>
				$('td').on({
			  'dblclick': function() {
				$(this).prop('contenteditable', true);
			  },
			  'blur': function() {
				$(this).prop('contenteditable', false);
			  }
			});
			</script>
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
	</div>
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
<div id="form" >
	<div id="content_area">
				
			
									<table >
									<tr>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Login</th>
									<th>Password</th>
									<th>Emai Id </th>
									<th>User Role</th>
									<th>Permission</th>
									<th>Contact Number</th>
									<th>Address</th>
									</tr>
									<?php
					if(isset($_GET['search']))
					{
							
					$search_query=$_GET['user_query'];
							
						
					$get_pro= "select * from internal_users where internal_user_contact_number like '%$search_query%'";
					
					$run_pro=mysqli_query($con,$get_pro);
					
					if (!$run_pro) 
					{
					printf("Error: %s\n", mysqli_error($con));
					exit();
						}
					
					while($row_pro=mysqli_fetch_array($run_pro))
					{
						
						$user_first_name=$row_pro['internal_user_first_name'];
						$user_last_name=$row_pro['internal_user_last_name'];
						$user_login_name=$row_pro['internal_user_login_name'];
						$user_password=$row_pro['internal_user_password'];
						$user_email_id=$row_pro['internal_user_email_id'];
						$user_user_role=$row_pro['internal_user_role'];
						$user_permission=$row_pro['internal_user_permission'];
						$user_contact_number=$row_pro['internal_user_contact_number'];
						$user_address=$row_pro['internal_user_address'];
				
						?>
						
																	
									<tr>
									<td><?php echo $row_pro['internal_user_first_name'];?></td> 
									<td><?php echo $row_pro['internal_user_last_name']; ?></td> 
									<td><?php echo $row_pro['internal_user_login_name'];?></td>
									<td><?php echo $row_pro['internal_user_password']; ?></td>
									<td><?php echo $row_pro['internal_user_email_id']; ?></td>
									<td><?php echo $row_pro['internal_user_role']; ?></td>
									<td><?php echo $row_pro['internal_user_permission']; ?></td>
									<td><?php echo $row_pro['internal_user_contact_number'];?></td>
									<td><?php echo $row_pro['internal_user_address']; ?></td>			  
									</tr>
				
									</table>
					<?php
					}
					}
					?>
 
				</div>
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
<div id="products_box"><br><br>
		<h3>
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

 
<!Doctype>
<?php 

include("admin_area/includes/db.php");

?>
<html>
	<head>
			<title>Admin Interanl-Site</title> 
			
			<link rel="stylesheet" href="styles/style.css" media="all" />
			<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
			<script>tinymce.init({ selector:'textarea' });</script>
			
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
				<div id="add_internal_user">
					
		
					<form action="addInternalUser.php" method="post" enctype="multipart/form-data">

					<table align="center" width="700" border="2" bgcolor="#ff8533"> <br>
		
						<tr align="center">
						<td colspan="7"><h2>New Internal User Registration Form</h2></td>
						</tr>
							
							<tr>
							<td align="right"><b>First Name: </b></td><br>
							<td><input type="text" name="first_name" size="50" required/>
							</td>
							</tr>
							
							<tr>
							<td align="right"><b>Last Name: </b></td>	
							<td><input type="text" name="last_name" size="50" required/>
							</td>
							</tr>
							
							<tr>
							<td align="right"><b>Login Name</b></td>
							<td><input type="text" name="login_name" size="50" required/>
							</td>
							</tr>
							
							<tr>
							<td align="right"><b>Password</b></td>
							<td><input type="text" name="user_password" size="50" required/>
							</td>
							</tr>
							
							<tr>
							<td align="right"><b>Email </b></td>	
							<td><input type="text" name="email_id" size="50" required/>
							</td>
							</tr>
							
							<tr>
							<td align="right"><b>UserRole</b></td>
							<td>
							<select name="user_role" >
							<option>Select User Role</option>
				<?php
			
				$get_roles="select * from internal_user_roles";
	
				$run_roles=mysqli_query($con,$get_roles);
	
							while($row_roles=mysqli_fetch_array($run_roles))
				{
					$internal_user_role_id=$row_roles['internal_user_role_id'];
					$internal_user_role_title=$row_roles['internal_user_role_title'];
					
					echo "<option value='$internal_user_role_id'>$internal_user_role_title</option>";
				}
				?>
				</select>
				</td>
				</tr>
				
				<tr>
				<td align="right"><b>UserPermission:</b></td>	
				<td>
				<select name="user_permission" >
				<option>select permission for User</option>
				<?php
				$get_permission="select * from internal_user_permission";
	
				$run_permission=mysqli_query($con,$get_permission);
	

				while($row_permission=mysqli_fetch_array($run_permission))
				{
					$internal_user_permission_id=$row_permission['internal_user_permission_id'];
					$internal_user_permission_title=$row_permission['internal_user_permission_title'];
					
					echo "<option value='$internal_user_permission_id'>$internal_user_permission_title</option>";
				}
				?>
				</td>
				</tr>
				
				<!--tr>
				<td align="right"><b>User Image</b></td>
				<td><input type="file" name="user_image" />
				</td>
				</tr--> 
		
				<tr>
				<td align="right"><b>ContactNumber</b></td>
				<td><input type="text" name="user_number" required/>
				</td>
				</tr>
				
				<tr>
				<td align="right"><b>User Address</b></td>
				<td><textarea name="user_address" cols="10" rows="10" ></textarea>
				</td>
				</tr>
				
				<tr align="center">
				<td colspan="7"><input type="submit" name="insert_post" value="Add Internal User"/>
				</td>
				</tr>
				</table>

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

<?php


if(isset($_POST['insert_post'])){

//getting the text data from the fields
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$login_name=$_POST['login_name'];
$user_password=$_POST['user_password'];
$email_id=$_POST['email_id'];
$user_role=$_POST['user_role'];
$user_permission=$_POST['user_permission'];
$user_number=$_POST['user_number'];
$user_address=$_POST['user_address'];


//getting images data from the fields

$user_image=$_FILES['user_image']['name'];
$user_image_tmp=$_FILES['user_image']['tmp_name'];

move_uploaded_file($user_image_tmp,"user_images/$user_image");

$insert_user="insert into internal_users
(internal_user_first_name,
internal_user_last_name,
internal_user_login_name,
internal_user_password,
internal_user_email_id,
internal_user_role,
internal_user_permission,
internal_user_contact_number,
internal_user_address)
values('$first_name',
'$last_name',
'$login_name',
'$user_password',
'$email_id',
'$user_role',
'$user_permission',
'$user_number',
'$user_address')";

echo $insert_user;
echo "inside insert";



$insert_pro=mysqli_query($con, $insert_user);

if($insert_pro)
{
	echo "inside insert_pro";
	echo "<script>alert('User has been inserted!')</script>";
	echo "<script>window.open('addInternalUser.php','_self')</script>";
}
else
{
	echo "try one more time";
}
}
?>

 
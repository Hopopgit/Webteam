<!doctype html>
    <html lang="en">
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
      <?php
      $username = "root";
      $password = "";
      $host = "localhost";
      $database="register";

      $connector = mysqli_connect($host,$username,$password,$database)
          or die("Unable to connect");

    //  $selected = mysqli_select_db("register", $connector)
        //or die("Unable to connect");

      //execute the SQL query and return records
      $query = "SELECT * FROM user_data";
      $result = mysqli_query($connector, $query);
      //$result = mysqli_query("SELECT * FROM user_data ");
      ?>
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
				<!--<div id="form">
		<form method="get" action="results.php" enctype="multipart/form-data">
			<input type="text" name="user_query"  placeholder="Enter Here"/>
			<input type="submit" name="search" value="search"/>
		</form>  
</div>	-->	
      <table class="table table-bordered" style="color:#761a9b;">
      <thead>
        <tr>
          <th>Employee_id</th>
          <th>Employee_Name</th>
          <th>Employee_dob</th>
          <th>Employee_Adress</th>
          <th>Employee_dept</th>
          <th>Employee_salary</th>
          <th>Employee_salary</th>

        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysqli_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row['employee_id']}</td>
              <td>{$row['employee_name']}</td>
              <td>{$row['employee_dob']}</td>
              <td>{$row['employee_addr']}</td>
              <td>{$row['employee_dept']}</td>
              <td>{$row['employee_sal']}</td>
          </tr>\n";
          }
        ?>
      </tbody>
    </table>
	</div>
	</div>
	<!--footer starts from here-->
<div id="footer">
<h2 style="text-align:center; padding-top:15px; color:white;">&copy; 2016 by HopOp</h2>
<!--Footer ends here-->
</div>
     <!--<?php mysqli_close($connector); ?>-->
    </body>
    </html>

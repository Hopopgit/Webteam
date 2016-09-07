<!DOCTYPE html>

<html lang="en">
    
    <head>
        <meta charset="utf-8" />
        <title>All users </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- Our css style sheet -->
        <link href="css/mystyle.css" rel="stylesheet" type="text/css" />
       <link href="css/table.css" rel="stylesheet" type="text/css"/>
        <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
	

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
   <!--  <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
         -->
        </head>
        <body>
        
        
     
    <div class="navbar navbar-inverse navbar-fixed-top">
   <div class="container-fluid" > 
    <div class="navbar-header">
      
      <a class="navbar-brand" href="#"><img src="img/redbeak.PNG" alt=""></a>
    </div>
    <div >
     <ul class="nav navbar-nav" id="topnav">
    <li><a href="view.php">Home</a></li>
	<li><a href="view.php">All Users</a></li>
      
      <li><a href="#">My account</a></li> 
      <li><a href="#">Update info</a></li> 
      <li><a href="#">Notification</a></li> 
    </ul>
    </div>
      <div class="collapse navbar-collapse">  
     
      <ul class="nav navbar-nav navbar-right" style="padding-top:10px;padding-right:10px;">
      
        <a href="login.html" class="btn btn-info" role="button">Logout</a>
        
      </ul>
      </div>
    </div>
    </div>
 
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Admin Panel
                    </a>
                </li>
                <li>
                    <a href="adduser.html">Add internal User</a>
                </li>
				
                
                <li>
                    <a href="">Assign Roles to User</a>
                </li>
                <li>
                    <a href="#">Report</a>
                </li>
                <li>
                    <a href="#">Feedback</a>
                </li>
                <li>
                    <a href="#">Enquiry</a>
                </li>
                <li>
                    <a href="#">HopOp</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
		<?php

/*

VIEW.PHP

Displays all data from 'players' table

*/



// connect to the database

include('connect-db.php');



// get results from database
$query = "SELECT * FROM  i_user_details";
      $result = mysqli_query($connector, $query);

//$result = mysqli_query("SELECT * FROM players")

//or die(mysqli_error());

?>



           <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    <form class="form-search" method="post" action="#">
<div class="container" id="btnsearch">
<div class="row">
<!-- <div class="col-md-6"> -->
<div class="form-group">
<div class="input-append">
<label class="text-default">Enter Mobile Number:&nbsp;</label><input type="text" class="input-medium search-query" name="mobile" value="" id="m_number" placeholder="Mobile number">
<button type="submit" class="add-on">Search</button>
</div>
</div>
</div>
</div>
<form action="" method="post" id="alluser" name="allusers">

                    <div class="table-header">   
                        <table class="table table-bordered" id="headertable">
      <thead>
        <tr>
        
          <th>Id</th>
		  <th><b>First name</b></th>
          <th>Last name</th>
          <th>Login name</th>
          <th>Password</th>
          <th>Emailid</th>
          <th>User role</th>
		   <th>User permission</th>
          <th>Contact number</th>
		   <th>Address</th>
		   <th>Edit</th>
		   <th>Delete</th>
          
          
          

        </tr>
      </thead>
      <tbody>
        <?php
          while($row = mysqli_fetch_array( $result )) {



// echo out the contents of each row into a table

echo "<tr>";

echo '<td>' . $row['id'] . '</td>';

echo '<td>' . $row['first_name'] . '</td>';

echo '<td>' . $row['last_name'] . '</td>';
echo '<td>' . $row['login_name'] . '</td>';

echo '<td>' . $row['password'] . '</td>';

echo '<td>' . $row['email_id'] . '</td>';
echo '<td>' . $row['user_role'] . '</td>';

echo '<td>' . $row['user_permission'] . '</td>';

echo '<td>' . $row['contact_number'] . '</td>';
echo '<td>' . $row['address'] . '</td>';

echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a></td>';

echo '<td><a href="delete.php?id=' . $row['id'] . '">Delete</a></td>';

echo "</tr>";

}



// close table>

echo "</table>";
          
        ?>
      </tbody>
    </table>
    </div>
    </form>
	</div>
	</div>
                    </div>
                    
                    
                    </div>
                    
</div>
</div>
                </div>
            
        
        <!-- /#page-content-wrapper -->
 
  
  
   
  
    
    
    
    <!--FOOTER SECTION -->
        <div class="copyright" >
    <footer id="footer" class="pull-right" style="padding-top:480px;">
        <div class="row">
            <div class="col-md-12  col-sm-12">
                &copy; 2016 www.redbeak.co.in  |  All Rights Reserved
               
            </div>
            
        </div>
    </footer>
    </div>
	
    </body>
	</html>
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
    <script src="js/jquery.js"></script>

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
     
    <div class="navbar navbar-inverse navbar-fixed-top">
   <div class="container-fluid" > 
    <div class="navbar-header">
      
      <a class="navbar-brand" href="#"><img src="img/redbeak.PNG" alt=""></a>
    </div>
    <div >
     <ul class="nav navbar-nav" id="topnav">
    <li><a href="home.php">Home</a></li>
      
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
                    <a href="adduser.php">Add internal User</a>
                </li>
                <li>
                    <a href="search.php">Update internal User</a>
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
        
          <th>Employee_id</th>
          <th>Employee_Name</th>
          <th>Employee_dob</th>
          <th>Employee_Adress</th>
          <th>Employee_dept</th>
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
    </form>
	</div>
	</div>
                    </div>
                    
                    
                    </div>
                    <div class="editbtn">
<div class="container">
<div class="row">
<div class="Postbtn">
<button class="btn btn-danger pull pull-right" type="submit" id="pst">Delete</button>
</div>
<div class="Postbtn">
<button class="btn btn-info pull pull-right" type="submit" id="pst">Add</button>
</div>
<div class="Postbtn">
<button class="btn btn-warning pull pull-right" type="submit" id="pst">Edit</button></div>
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
	<?php mysqli_close($connector); ?>
    </body>
	</html>
<!DOCTYPE html>

<html lang="en">
    
    <head>
        <meta charset="utf-8" />
        <title>Add user </title>
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
    
    <div class="navbar navbar-inverse navbar-fixed-top">
   <div class="container-fluid" > 
    <div class="navbar-header">
      
      <a class="navbar-brand" href="#"><img src="img/redbeak.PNG" alt=""></a>
    </div>
    <div >
     <ul class="nav navbar-nav" id="topnav">
      <li><a href="home.php">Home</a></li>
      <li><a href="alluser.php">All Users</a></li>
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
                    <a href="search.php">Update internal User</a>
                </li>
                <li>
                    <a href="#">Assign Roles to User</a>
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
            <form action="#" method="post" id="adduserform" name="sentMessage" >
                <div class="row">
                    <div class="col-lg-12" style="margin-left:200px;">
                        
<div class="col-md-3"style="margin-top:20px">
<div class="form-group">
<input type="text" name="first_name" placeholder="First name" class="form-control" id="first_name" required/>
</div>
<div class="form-group">
<input type="text" name="last_name" placeholder="last name" class="form-control" id="last_name" required/>
</div>
<div class="form-group">
<input type="text" name="login_name" placeholder="login name" class="form-control" id="login_name" required/>
</div>
<div class="form-group">
<input type="text" name="Password" placeholder="Password" class="form-control" id="Password" required/>
</div>
<div class="form-group">
<input type="email" name="email_id" placeholder="Email" class="form-control" id="email_id" required/>
</div>
<div class="form-group">
<input type="text" name="user_role" placeholder="User role" class="form-control" id="user_role" required/>
</div>

<div class="form-group">
<input type="text" name="user_permission" placeholder="UserPermission" class="form-control" id="user_permission" required/>
</div>
<div class="form-group">
<input type="number" name="contact_number" placeholder="Contact number" class="form-control" id="contact_number" required/>
</div>
<div class="form-group">
<textarea  name="address"  placeholder="Enter address" class="form-control" id="address" required></textarea>
</div>
<div class="row">
<div class="form-group">	
<a href="useradmin.html" class="btn btn-warning pull pull-right" id="cancel" role="button">Cancel</a>
<button class="btn btn-primary pull pull-left" id="save">Add user</button>
</div>
</div>
</div>
</div>
</div>
</form>
                    </div>
                    
                    
                    </div>
                </div>
           
        <!-- /#page-content-wrapper -->
 
  
  
   
  
    
    
    
    <!--FOOTER SECTION -->
        <div class="copyright" >
    <footer id="footer" class="pull-right">
        <div class="row">
            <div class="col-md-12  col-sm-12">
                &copy; 2016 www.redbeak.co.in  |  All Rights Reserved
               
            </div>
            
        </div>
    </footer>
    </div>
    
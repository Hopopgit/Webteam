<!DOCTYPE html>

<html lang="en">
    
    <head>
        <meta charset="utf-8" />
        <title>Search </title>
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
                    <a href="adduser.php">Add internal User</a>
                </li>
                <li>
                    <a href="update.php">Update internal User</a>
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
         <form class="search" action="update.html" method="post">
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    
                        <div class="form-group">
<label>Enter mobile number:</label><input type="text" name="contact_number"  id="contact_number"class="form-control" placeholder="enter mobile number"/>
<p class="help-block text-danger"></p>
</div>
<div>
<div class="form-group">
<label>Enter email_Id:</label><input type="email" name="email_id" id="email_id" class="form-control"  placeholder="enter email_Id"/>
<p class="help-block text-danger"></p>
</div>
<div>
<div class="form-group">
<label>Enter first name:</label><input type="text" name="first_name" id="first_name" class="form-control"  placeholder="enter first name"/>
<p class="help-block text-danger"></p>
<button type="submit" style="width:200px;margin-left:80px;" class="btn btn-primary" id="name_search" name="name_search">Search</button>
</div>
                    </div>
                    
                    
                    </div>
                </div>
            </div>
        </div>
        </div>
        </form>
        
        <!-- /#page-content-wrapper -->
 
  
  
   
  
    
    
    
    <!--FOOTER SECTION -->
        <div class="copyright" >
    <footer id="footer" class="pull-right" style="padding-top:280px;">
        <div class="row">
            <div class="col-md-12  col-sm-12">
                &copy; 2016 www.redbeak.co.in  |  All Rights Reserved
               
            </div>
            
        </div>
    </footer>
    </div>
    </div>
    </body>
    </html>
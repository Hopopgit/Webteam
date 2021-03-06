<?php
session_start();

if(!isset($_SESSION['user_session']))
{
	header("Location: nscrud/index.php");
}
require_once 'dbconfig.php';
//include("db_connection.php");

$stmt = $db_con->prepare("SELECT * FROM i_user_details WHERE id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);

?>
<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <title>jQuery SCRUD system</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1000, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Oxygen:400,700">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="layout.css">
    <script charset="utf-8" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script charset="utf-8" src="//cdn.datatables.net/1.10.0/js/jquery.dataTables.js"></script>
    <script charset="utf-8" src="//cdn.jsdelivr.net/jquery.validation/1.13.1/jquery.validate.min.js"></script>
    <script charset="utf-8" src="webapp.js"></script>
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
                 <!--link rel="stylesheet" type="text/css" href="css/bootstrap.css"/-->
        <link rel="stylesheet" type="text/css" href="js/bootstrap.min.js"/>
       <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    
	
  </head>
  <body>
 
<div></div>
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid"> 
    <div class="navbar-header">      
      <a class="navbar-brand" href="#"><img src="redbeak.PNG" alt=""></a>
      </div>
      <div >
     <ul class="nav navbar-nav" id="topnav">
    <li><a href="#">Home</a></li>
	<li><a href="users.html">All Users</a></li>      
      <li><a href="#">My account</a></li> 
      <li><a href="#">Update info</a></li> 
      <li><a href="#">Notification</a></li> 
	  <li><a href="#">Report</a></li> 
      <li><a href="#">Feedback</a></li> 
      <li><a href="#">Enquery</a></li>
    </ul>
    </div>
      <div class="collapse navbar-collapse"> 
     
      <ul class="nav navbar-nav navbar-right" style="padding-top:10px;padding-right:10px;">
      
        <!--a href="logout.php" class="btn btn-info" role="button">Logout</a-->
		<!--span class="glyphicon glyphicon-user"></span>&nbsp;Hi' <?php echo $row['first_name']; ?>&nbsp;<span class="caret"></span></a-->
		<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
        
      </ul>
      </div>
    </div>
    </div>

    <div id="page_container" class="container-fluid">
	<div class="row">
	<div class="col-md-0"></div>
	

      <h1>Customer interface</h1>

      <button type="button" class="button" id="add_company">Add User</button>

      <table class="datatable" id="table_companies">
        <thead>
          <tr>
		 

             
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
							<th>Login</th>
                            <th>password</th>
							<th>Email</th>
                            <th>User role</th>
                            <th>Contact Number</th>
							<th>Address</th>
                            <th>Functions</th>
                            
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
	</div>
	</div>

    </div>

	 

    <div class="lightbox_bg"></div>

    <div class="lightbox_container">
      <div class="lightbox_close"></div>
      <div class="lightbox_content">
        
        <h2>Add User</h2>
        <form class="form add" id="form_company" data-id="" novalidate>
          <div class="input_container">
		  
            <label for="first_name">First Name: <span class="required">*</span></label>
            <div class="field_container">
              <input type="text"  class="text" name="first_name" id="first_name" value="" required>
            </div>
          </div>
		  
          <div class="input_container">
            <label for="last_name">Last Name: <span class="required">*</span></label>
            <div class="field_container">
              <input type="text" class="text" name="last_name" id="last_name" value="" required>
            </div>
          </div>
          <div class="input_container">
            <label for="login_name">Login Name: <span class="required">*</span></label>
            <div class="field_container">
              <input type="text" class="text" name="login_name" id="login_name" value="" required>
            </div>
          </div>
		  <div class="input_container">
            <label for="password">Password: <span class="required">*</span></label>
            <div class="field_container">
              <input type="password" class="text" name="password" id="password" value="" required>
            </div>
          </div>
          <div class="input_container">
            <label for="email_id">Email: <span class="required">*</span></label>
            <div class="field_container">
              <input type="email"  min="" class="text" name="email_id" id="email_id" value="" required>
            </div>
          </div> 
          <div class="input_container">
            <label for="user_role">User role: <span class="required">*</span></label>
            <div class="field_container">
              <input type="number"  class="text" name="user_role" id="user_role" value="" required>
            </div>
          </div>
          <div class="input_container">
            <label for="contact_number">Contact Number <span class="required">*</span></label>
            <div class="field_container">
              <input type="number"  class="text" name="contact_number" id="contact_number" value="" required>
            </div>
          </div>
          <div class="input_container">
            <label for="address">Address <span class="required">*</span></label>
            <div class="field_container">
              <input type="text" class="text" name="address" id="address" value="" required>
            </div>
          </div>
          
          <div class="button_container">
            <button type="submit">Add User</button>
          </div>
        </form>
        
      </div>
    </div>

    <noscript id="noscript_container">
      <div id="noscript" class="error">
        <p>JavaScript support is needed to use this page.</p>
      </div>
    </noscript>

    <div id="message_container">
      <div id="message" class="success">
        <p>This is a success message.</p>
      </div>
    </div>

    <div id="loading_container">
      <div id="loading_container2">
        <div id="loading_container3">
          <div id="loading_container4">
            Loading, please wait...
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
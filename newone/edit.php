<?php

/*

EDIT.PHP

Allows user to edit specific entry in database

*/



// creates the edit record form

// since this form is used multiple times in this file, I have made it a function that is easily reusable
function renderForm($id, $first_name, $last_name, $login_name, $password, $email_id, $user_role, $user_permission
, $contact_number, $address, $error)

{

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

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
      <li><a href="home.php">Home</a></li>
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
                    <a href="edit.php">Update internal User</a>
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
            <form action=" " method="post" id="adduserform" name="sentMessage" >
                <div class="row">
                    <div class="col-lg-12" style="margin-left:200px;">
                        
<div class="col-md-3"style="margin-top:20px">
<div class="form-group">

<input type="hidden"class="form-control" name="id" value="<?php echo $id; ?>"/>

<p><strong>ID:</strong> <?php echo $id; ?></p>
</div>
<div class="form-group">
<input type="text" name="first_name" placeholder="First name" class="form-control" value="<?php echo $first_name; ?>" id="first_name" required/>
</div>
<div class="form-group">
<input type="text" name="last_name" placeholder="last name" class="form-control"  value="<?php echo $last_name; ?>"id="last_name" required/>
</div>
<div class="form-group">
<input type="text" name="login_name" placeholder="login name" class="form-control" value="<?php echo $login_name; ?>" id="login_name" required/>
</div>
<div class="form-group">
<input type="password" name="password" placeholder="Password" class="form-control" value="<?php echo $password; ?>" id="password" required/>
</div>
<div class="form-group">
<input type="email" name="email_id" placeholder="Email" class="form-control" value="<?php echo $email_id; ?>" id="email_id" required/>
</div>
<div class="form-group">
<input type="text" name="user_role" placeholder="User role" class="form-control" value="<?php echo $user_role; ?>" id="user_role" required/>
</div>

<div class="form-group">
<input type="text" name="user_permission" placeholder="UserPermission" class="form-control" value="<?php echo $user_permission; ?>" id="user_permission" required/>
</div>
<div class="form-group">
<input type="number" name="contact_number" placeholder="Contact number" class="form-control" value="<?php echo $contact_number; ?>" id="contact_number" required/>
</div>
<div class="form-group">
<textarea  name="address"  placeholder="Enter address" class="form-control" value="<?php echo $address; ?>" id="address" required></textarea>
</div>
<div class="row">
<div class="form-group">	
<a href="useradmin.html" class="btn btn-warning pull pull-right" id="cancel" role="button">Cancel</a>
<button type="submit" name="submit" class="btn btn-primary pull pull-left" id="save">update</button>
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
    </body>
	</html>

<?php

}







// connect to the database

include('connect-db.php');



// check if the form has been submitted. If it has, process the form and save it to the database

if (isset($_POST['submit']))

{

// confirm that the 'id' value is a valid integer before getting the form data
if (is_numeric($_POST['id']))
{

// get form data, making sure it is valid

$id = $_POST['id'];


$first_name = mysqli_real_escape_string($connector,htmlspecialchars($_POST['first_name']));
$last_name = mysqli_real_escape_string($connector,htmlspecialchars($_POST['last_name']));
$login_name = mysqli_real_escape_string($connector,htmlspecialchars($_POST['login_name']));
$password = mysqli_real_escape_string($connector,htmlspecialchars($_POST['password']));
$email_id = mysqli_real_escape_string($connector,htmlspecialchars($_POST['email_id']));
$user_role = mysqli_real_escape_string($connector,htmlspecialchars($_POST['user_role']));
$user_permission = mysqli_real_escape_string($connector,htmlspecialchars($_POST['user_permission']));
$contact_number = mysqli_real_escape_string($connector,htmlspecialchars($_POST['contact_number']));
$address = mysqli_real_escape_string($connector,htmlspecialchars($_POST['address']));

// check that firstname/lastname fields are both filled in

if ($first_name == '' || $last_name == ''|| $login_name == ''|| $password == ''|| $email_id == ''|| $user_role == ''
|| $user_permission == ''|| $contact_number == ''|| $address == '')

{

// generate error message

$error = 'ERROR: Please fill in all required fields!';



//error, display form

renderForm($id, $first_name, $last_name, $login_name, $password, $email_id, $user_role, $user_permission
, $contact_number, $address,$error);

}

else

{

// save the data to the database

$query="UPDATE i_user_details SET first_name='$first_name', last_name='$last_name', login_name='$login_name',
 password='$password'
, email_id='$email_id', user_role='$user_role', address='$address', user_permission='$user_permission', contact_number='$contact_number' WHERE id='$id'";
$result = mysqli_query($connector, $query);

//or die(mysqli_error());



// once saved, redirect back to the view page

header("Location: view.php");

}

}

else

{

// if the 'id' isn't valid, display an error

echo 'Error!';

}

}

else

// if the form hasn't been submitted, get the data from the db and display the form

{



// get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)

if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)

{

// query db

$id = $_GET['id'];

//$result = mysqli_query("SELECT * FROM players WHERE id=$id")
// get results from database
$query = "SELECT * FROM i_user_details WHERE id=$id";
      $result = mysqli_query($connector, $query);

//or die(mysqli_error());

$row = mysqli_fetch_array($result);



// check that the 'id' matches up with a row in the databse

if($row)

{



// get data from db

$first_name = $row['first_name'];

$last_name = $row['last_name'];
$login_name = $row['login_name'];
$password = $row['password'];
$email_id = $row['email_id'];
$user_role = $row['user_role'];
$user_permission = $row['user_permission'];
$contact_number = $row['contact_number'];
$address = $row['address'];


// show form

renderForm($id, $first_name, $last_name, $login_name, $password, $email_id, $user_role, $user_permission, $contact_number
, $address,'');

}

else

// if no match, display result

{

echo "No results!";

}

}

else

// if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error

{

echo 'Error!';

}

}

?>
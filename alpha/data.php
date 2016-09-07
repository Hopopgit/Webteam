<?php
// Database details
$db_server   = 'bitnami-mysql-b07f.cloudapp.net';
$db_username = 'root';
$db_password = 'NpNpCI7K';
$db_name     = 'redbeak_db';

/*$db_server   = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name     = 'redbeak_db';*/

// Get job (and id)
//include("db_connection.php");
$job = '';
$contact_number = '';
if (isset($_GET['job'])){
  $job = $_GET['job'];
  if ($job == 'get_companies' ||
      $job == 'get_company'   ||
      $job == 'add_company'   ||
      $job == 'edit_company'  ||
      $job == 'delete_company'||
      $job == 'get_email'){
    if (isset($_GET['id'])){
      $id = $_GET['id'];
      if (!is_numeric($id)){
        $id = '';
      }
    }
  } else {
    $job = '';
  }
}

// Prepare array
$mysqli_data = array();

// Valid job found
if ($job != ''){
  
  // Connect to database
  $db_connection = mysqli_connect($db_server, $db_username, $db_password, $db_name);
  if (mysqli_connect_errno()){
    $result  = 'error';
    $message = 'Failed to connect to database: ' . mysqli_connect_error();
    $job     = '';
  }
  
  // Execute job
  if ($job == 'get_companies'){
    
    // Get companies
    $query = "SELECT * FROM alpha_users ORDER BY contact_number";
    $query = mysqli_query($db_connection, $query);
    if (!$query){
      $result  = 'error';
      $message = 'query error';
    } else {
      $result  = 'success';
      $message = 'query success';
	  
      while ($company = mysqli_fetch_array($query)){
        $functions  = '<div class="function_buttons"><ul>';
        $functions .= '<li class="function_edit"><a data-id="'   . $company['contact_number'] . '" data-name="' . $company['name'] . '"><span>Edit</span></a></li>';
        $functions .= '<li class="function_delete"><a data-id="' . $company['contact_number'] . '" data-name="' . $company['name'] . '"><span>Delete</span></a></li>';
        $functions .= '<li class="function_envelope"><a data-id="' . $company['contact_number'] . '" data-name="' . $company['name'] . '"><span>SMS</span></a></li>';
         
		$functions .= '</ul></div>';
        $mysql_data[] = array(
		
          "name"=> $company['name'],
          "email_id"  => $company['email_id'],
          "contact_number"    => $company['contact_number'],
          
          "location"   => $company['location'],
          "mode_of_transport"     =>$company['mode_of_transport'],
		  "created_on"=>$company['created_on'],
		  "updated_on"=>$company['updated_on'],
		  "created_by"=>$company['created_by'],
		  "coupon_code"       => $company['coupon_code'],
          
          "functions"     => $functions
        );
	
      }
    }
    
  }
  elseif ($job == 'get_company'){
    // Get company
    if ($id == ''){
      $result  = 'error';
      $message = 'id missing';
    } else {
      $query = "SELECT * FROM alpha_users WHERE contact_number = '" . mysqli_real_escape_string($db_connection, $id) . "'";
      $query = mysqli_query($db_connection, $query);
      if (!$query){
        $result  = 'error';
        $message = 'query error';
      } else {
        $result  = 'success';
        $message = 'query success';
        while ($company = mysqli_fetch_array($query)){
          $mysql_data[] = array(
		 
            "name" => $company['name'],
            "email_id"  => $company['email_id'],
            "contact_number"    => $company['contact_number'],
            
            "location"   => $company['location'],
            "mode_of_transport"     => $company['mode_of_transport'],
			 "created_on"     => $company['created_on'],
			 "updated_on"     => $company['updated_on'],
			 "created_by"     => $company['created_by'],
			 "coupon_code"       => $company['coupon_code']
            
          );
        }
      }
    }
  
  } elseif ($job == 'add_company'){
    
    // Add company
    $query = "INSERT INTO alpha_users SET ";

	
    if (isset($_GET['name']))         { $query .= "name= '" . mysqli_real_escape_string($db_connection, $_GET['name']). "', "; }
    if (isset($_GET['email_id'])) { $query .= "email_id = '" . mysqli_real_escape_string($db_connection, $_GET['email_id']) . "', "; }
    if (isset($_GET['contact_number']))   { $query .= "contact_number   = '" . mysqli_real_escape_string($db_connection, $_GET['contact_number'])   . "', "; }
     if (isset($_GET['location']))  { $query .= "location  = '" . mysqli_real_escape_string($db_connection, $_GET['location'])  . "', "; }
    if (isset($_GET['mode_of_transport']))  { $query .= "mode_of_transport  = '" . mysqli_real_escape_string($db_connection, $_GET['mode_of_transport'])  . "', "; }
  if (isset($_GET['created_on']))  { $query .= "created_on  = '" . mysqli_real_escape_string($db_connection, $_GET['created_on'])  . "', "; }
  if (isset($_GET['updated_on']))  { $query .= "updated_on  = '" . mysqli_real_escape_string($db_connection, $_GET['updated_on'])  . "', "; }
   if (isset($_GET['created_by']))  { $query .= "created_by  = '" . mysqli_real_escape_string($db_connection, $_GET['created_by'])  . "', "; }
 	if (isset($_GET['coupon_code'])) { $query .= "coupon_code = '" . mysqli_real_escape_string($db_connection, $_GET['coupon_code']) . "'";   }
    $query = mysqli_query($db_connection, $query);
    if (!$query){
      $result  = 'error';
      $message = 'query error';
    } else {
      $result  = 'success';
	  $mysql_data  = $result;
      $message = 'query success';
    }
  
  } elseif ($job == 'edit_company'){
    
    // Edit company
    if ($id == ''){
      $result  = 'error';
      $message = 'id missing';
    } 
	else
		{
		
      $query = "UPDATE alpha_users SET ";
	  	
     
      if (isset($_GET['name']))
		  { $query .= "name = '" . mysqli_real_escape_string($db_connection, $_GET['name']) . "', "; }
      if (isset($_GET['email_id']))   
	  { $query .= "email_id = '" . mysqli_real_escape_string($db_connection, $_GET['email_id'])   . "', "; }
      if (isset($_GET['contact_number']))     
		  { $query .= "contact_number = '" . mysqli_real_escape_string($db_connection, $_GET['contact_number'])      . "', "; }
       if (isset($_GET['location']))   
		  { $query .= "location   = '" . mysqli_real_escape_string($db_connection, $_GET['location'])    . "', "; }
 if (isset($_GET['mode_of_transport']))   
		  { $query .= "mode_of_transport  = '" . mysqli_real_escape_string($db_connection, $_GET['mode_of_transport'])    . "', "; }
         if (isset($_GET['created_on']))   
		  { $query .= "created_on   = '" . mysqli_real_escape_string($db_connection, $_GET['created_on'])    . "', "; }
     if (isset($_GET['updated_on']))   
		  { $query .= "updated_on   = '" . mysqli_real_escape_string($db_connection, $_GET['updated_on'])    . "', "; }
    if (isset($_GET['created_by']))   
		  { $query .= "created_by   = '" . mysqli_real_escape_string($db_connection, $_GET['created_by'])    . "', "; }
   
	  if (isset($_GET['coupon_code'])) 
	  { 
		$query .= "coupon_code = '" . mysqli_real_escape_string($db_connection, $_GET['coupon_code']) . "'";   }
      $query .= "WHERE contact_number = '" . mysqli_real_escape_string($db_connection, $id) . "'";
      $query  = mysqli_query($db_connection, $query);
      if (!$query){
        $result  = 'error';
        $message = 'query error';
      } else {
        $result  = 'success';
		$mysql_data  = $result;
        $message = 'query success';
      }
    }
    
  } elseif ($job == 'delete_company'){
  
    // Delete company
    if ($id == ''){
      $result  = 'error';
      $message = 'id missing';
    } else {
      $query = "DELETE FROM alpha_users WHERE contact_number = '" . mysqli_real_escape_string($db_connection, $id) . "'";
      $query = mysqli_query($db_connection, $query);
      if (!$query){
        $result  = 'error';
        $message = 'query error';
		//$mysql_data=$result;
      } else {
        $result  = 'success';
        $message = 'query success';
		$mysql_data=$result;
      }
    }
  
  }
   elseif ($job == 'get_email'){
    // Get Email id
    if ($id == ''){
      $result  = 'error';
      $message = 'id missing';
    } else {
      $query = "SELECT * FROM alpha_users WHERE contact_number = '" . mysqli_real_escape_string($db_connection, $id) . "'";
      $query = mysqli_query($db_connection, $query);
      if (!$query){
        $result  = 'error';
        $message = 'query error';
      } else {
        $result  = 'success';
        $message = 'query success';
        while ($company = mysqli_fetch_array($query)){
          $mysql_data[] = array(
     
            "name"  => $company['name'],
            "email_id"  => $company['email_id']
            
      
            
          );
        }
      }
    }
  
  }
  
  // Close database connection
  mysqli_close($db_connection);

}

// Prepare data
$data = array(
  "result"  => $result,
  "message" => $message,
  "data"    => $mysql_data
);

// Convert PHP array to JSON array
$json_data = json_encode($data);
print  $json_data;

?>
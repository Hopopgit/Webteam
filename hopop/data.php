<?php
// Database details
/*$db_server   = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name     = 'register';*/

$db_server   = 'bitnami-mysql-b07f.cloudapp.net';
$db_username = 'root';
$db_password = 'NpNpCI7K';
$db_name     = 'redbeak_db';

// Get job (and id)
$job = '';
$id  = '';
if (isset($_GET['job'])){
  $job = $_GET['job'];
  if ($job == 'get_companies' ||
      $job == 'get_company'   ||
      $job == 'add_company'   ||
      $job == 'edit_company'  ||
      $job == 'delete_company'){
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
$mysql_data = array();

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
    $query = "SELECT * FROM alpha_users ORDER BY id";
    $query = mysqli_query($db_connection, $query);
    if (!$query){
      $result  = 'error';
      $message = 'query error';
    } else {
      $result  = 'success';
      $message = 'query success';
      while ($company = mysqli_fetch_array($query)){
        $functions  = '<div class="function_buttons"><ul>';
        $functions .= '<li class="function_edit"><a data-id="'   . $company['id'] . '" data-name="' . $company['id'] . '"><span>Edit</span></a></li>';
        $functions .= '<li class="function_delete"><a data-id="' . $company['id'] . '" data-name="' . $company['id'] . '"><span>Delete</span></a></li>';
        $functions .= '</ul></div>';
        $mysql_data[] = array(
		
		"id"=> $company['id'],
         
          "name"  => $company['name'],
          "email_id"    => $company['email_id'],
          "contact_number"       => $company['contact_number'],
          "location"   => $company['location'],
          "mode_of_transport"     =>$company['mode_of_transport'],
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
      $query = "SELECT * FROM alpha_users WHERE id = '" . mysqli_real_escape_string($db_connection, $id) . "'";
      $query = mysqli_query($db_connection, $query);
      if (!$query){
        $result  = 'error';
        $message = 'query error';
      } else {
        $result  = 'success';
        $message = 'query success';
        while ($company = mysqli_fetch_array($query)){
          $mysql_data[] = array(
		 
		 "id"=>$company['id'],
            "name"  => $company['name'],
            "email_id"    => $company['email_id'],
            "contact_number"       => $company['contact_number'],
            "location"   => $company['location'],
            "mode_of_transport"     => $company['mode_of_transport']
            
			
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
    if (isset($_GET['location']))      { $query .= "location      = '" . mysqli_real_escape_string($db_connection, $_GET['location'])      . "', "; }
   // if (isset($_GET['mode_of_transport']))  { $query .= "mode_of_transport  = '" . mysqli_real_escape_string($db_connection, $_GET['mode_of_transport'])  . "', "; }
 if (isset($_GET['mode_of_transport'])) { $query .= "mode_of_transport = '" . mysqli_real_escape_string($db_connection, $_GET['mode_of_transport']) . "'";   }   
   $query = mysqli_query($db_connection, $query);
    if (!$query){
      $result  = 'error';
      $message = 'query error';
    } else {
      $result  = 'success';
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
		 
	  { 
	  $query .= "name= '" . mysqli_real_escape_string($db_connection, $_GET['name'])         . "', "; }
      if (isset($_GET['email_id']))
		  { $query .= "email_id = '" . mysqli_real_escape_string($db_connection, $_GET['email_id']) . "', "; }
      if (isset($_GET['contact_number']))   
	  { $query .= "contact_number = '" . mysqli_real_escape_string($db_connection, $_GET['contact_number'])   . "', "; }
      if (isset($_GET['location']))     
		  { $query .= "location = '" . mysqli_real_escape_string($db_connection, $_GET['location'])      . "', "; }
      if (isset($_GET['mode_of_transport'])) 
		  { $query .= "mode_of_transport  = '" . mysqli_real_escape_string($db_connection, $_GET['mode_of_transport'])  . "', "; }
      /*if (isset($_GET['user_role']))   
		  { $query .= "user_role    = '" . mysqli_real_escape_string($db_connection, $_GET['user_role'])    . "', "; }
      if (isset($_GET['contact_number']))  
		  { $query .= "contact_number   = '" . mysqli_real_escape_string($db_connection, $_GET['contact_number'])   . "', "; }
      if (isset($_GET['address'])) 
	  { 
		$query .= "address = '" . mysqli_real_escape_string($db_connection, $_GET['address']) . "'";   }*/
      $query .= "WHERE id = '" . mysqli_real_escape_string($db_connection, $id) . "'";
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
      $query = "DELETE FROM alpha_users WHERE id = '" . mysqli_real_escape_string($db_connection, $id) . "'";
      $query = mysqli_query($db_connection, $query);
      if (!$query){
        $result  = 'error';
        $message = 'query error';
      } else {
        $result  = 'success';
        $message = 'query success';
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
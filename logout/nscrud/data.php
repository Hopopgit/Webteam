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
    $query = "SELECT * FROM i_user_details ORDER BY id";
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
         
          "first_name"  => $company['first_name'],
          "last_name"    => $company['last_name'],
          "login_name"       => $company['login_name'],
          "password"   => $company['password'],
          "email_id"     =>$company['email_id'],
          "user_role"    => $company['user_role'],
          "contact_number"  => $company['contact_number'],
		   "address"  => $company['address'],
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
      $query = "SELECT * FROM i_user_details WHERE id = '" . mysqli_real_escape_string($db_connection, $id) . "'";
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
            "first_name"  => $company['first_name'],
            "last_name"    => $company['last_name'],
            "login_name"       => $company['login_name'],
            "password"   => $company['password'],
            "email_id"     => $company['email_id'],
            "user_role"    => $company['user_role'],
            "contact_number"  => $company['contact_number'],
			"address"  => $company['address']
          );
        }
      }
    }
  
  } elseif ($job == 'add_company'){
    
    // Add company
     $query = "INSERT INTO i_user_details SET ";

	
    if (isset($_GET['first_name']))         { $query .= "first_name= '" . mysqli_real_escape_string($db_connection, $_GET['first_name']). "', "; }
    if (isset($_GET['last_name'])) { $query .= "last_name = '" . mysqli_real_escape_string($db_connection, $_GET['last_name']) . "', "; }
    if (isset($_GET['login_name']))   { $query .= "login_name   = '" . mysqli_real_escape_string($db_connection, $_GET['login_name'])   . "', "; }
    if (isset($_GET['password']))      { $query .= "password      = '" . mysqli_real_escape_string($db_connection, $_GET['password'])      . "', "; }
    if (isset($_GET['password']))  { $query .= "email_id  = '" . mysqli_real_escape_string($db_connection, $_GET['email_id'])  . "', "; }
    if (isset($_GET['user_role']))    { $query .= "user_role    = '" . mysqli_real_escape_string($db_connection, $_GET['user_role'])    . "', "; }
    if (isset($_GET['contact_number']))   { $query .= "contact_number   = '" . mysqli_real_escape_string($db_connection, $_GET['contact_number'])   . "', "; }
    if (isset($_GET['address'])) { $query .= "address = '" . mysqli_real_escape_string($db_connection, $_GET['address']) . "'";   }
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
		
       $query = "UPDATE i_user_details SET ";
	  	
      if (isset($_GET['first_name']))
		  
	  { 
	  $query .= "first_name= '" . mysqli_real_escape_string($db_connection, $_GET['first_name'])         . "', "; }
      if (isset($_GET['last_name']))
		  { $query .= "last_name = '" . mysqli_real_escape_string($db_connection, $_GET['last_name']) . "', "; }
      if (isset($_GET['login_name']))   
	  { $query .= "login_name = '" . mysqli_real_escape_string($db_connection, $_GET['login_name'])   . "', "; }
      if (isset($_GET['password']))     
		  { $query .= "password = '" . mysqli_real_escape_string($db_connection, $_GET['password'])      . "', "; }
      if (isset($_GET['email_id'])) 
		  { $query .= "email_id  = '" . mysqli_real_escape_string($db_connection, $_GET['email_id'])  . "', "; }
      if (isset($_GET['user_role']))   
		  { $query .= "user_role    = '" . mysqli_real_escape_string($db_connection, $_GET['user_role'])    . "', "; }
      if (isset($_GET['contact_number']))  
		  { $query .= "contact_number   = '" . mysqli_real_escape_string($db_connection, $_GET['contact_number'])   . "', "; }
      if (isset($_GET['address'])) 
	  { 
		$query .= "address = '" . mysqli_real_escape_string($db_connection, $_GET['address']) . "'";   }
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
      $query = "DELETE FROM i_user_details WHERE id = '" . mysqli_real_escape_string($db_connection, $id) . "'";
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
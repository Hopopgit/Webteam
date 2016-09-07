<?php
// Database details
$db_server   = 'bitnami-mysql-b07f.cloudapp.net';
$db_username = 'root';
$db_password = 'NpNpCI7K';
$db_name     = 'redbeak_db';

// Get job (and id)
//include("db_connection.php");
$job = '';
$mobile_number  = '';
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
    $query = "SELECT * FROM h_user_details ORDER BY mobile_number";
    $query = mysqli_query($db_connection, $query);
    if (!$query){
      $result  = 'error';
      $message = 'query error';
    } else {
      $result  = 'success';
      $message = 'query success';
      while ($company = mysqli_fetch_array($query)){
        $functions  = '<div class="function_buttons"><ul>';
        $functions .= '<li class="function_edit"><a data-id="'   . $company['mobile_number'] . '" data-name="' . $company['first_name'] . '"><span>Edit</span></a></li>';
        $functions .= '<li class="function_delete"><a data-id="' . $company['mobile_number'] . '" data-name="' . $company['first_name'] . '"><span>Delete</span></a></li>';
        $functions .= '</ul></div>';
        $mysql_data[] = array(
		
          "mobile_number"=> $company['mobile_number'],
          "first_name"  => $company['first_name'],
          "last_name"    => $company['last_name'],
          "mail_id"       => $company['mail_id'],
          "password"   => $company['password'],
          "auth_key"     =>$company['auth_key'],
          "gender"    => $company['gender'],
          "dob"  => $company['dob'],
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
      $query = "SELECT * FROM h_user_details WHERE mobile_number = '" . mysqli_real_escape_string($db_connection, $id) . "'";
      $query = mysqli_query($db_connection, $query);
      if (!$query){
        $result  = 'error';
        $message = 'query error';
      } else {
        $result  = 'success';
        $message = 'query success';
        while ($company = mysqli_fetch_array($query)){
          $mysql_data[] = array(
		 
            "mobile_number" => $company['mobile_number'],
            "first_name"  => $company['first_name'],
            "last_name"    => $company['last_name'],
            "mail_id"       => $company['mail_id'],
            "password"   => $company['password'],
            "auth_key"     => $company['auth_key'],
            "gender"    => $company['gender'],
            "dob"  => $company['dob']
          );
        }
      }
    }
  
  } elseif ($job == 'add_company'){
    
    // Add company
    $query = "INSERT INTO h_user_details SET ";

	
    if (isset($_GET['mobile_number']))         { $query .= "mobile_number= '" . mysqli_real_escape_string($db_connection, $_GET['mobile_number']). "', "; }
    if (isset($_GET['first_name'])) { $query .= "first_name = '" . mysqli_real_escape_string($db_connection, $_GET['first_name']) . "', "; }
    if (isset($_GET['last_name']))   { $query .= "last_name   = '" . mysqli_real_escape_string($db_connection, $_GET['last_name'])   . "', "; }
    if (isset($_GET['mail_id']))      { $query .= "mail_id      = '" . mysqli_real_escape_string($db_connection, $_GET['mail_id'])      . "', "; }
    if (isset($_GET['password']))  { $query .= "password  = '" . mysqli_real_escape_string($db_connection, $_GET['password'])  . "', "; }
    if (isset($_GET['auth_key']))    { $query .= "auth_key    = '" . mysqli_real_escape_string($db_connection, $_GET['auth_key'])    . "', "; }
    if (isset($_GET['gender']))   { $query .= "gender   = '" . mysqli_real_escape_string($db_connection, $_GET['gender'])   . "', "; }
    if (isset($_GET['dob'])) { $query .= "dob = '" . mysqli_real_escape_string($db_connection, $_GET['dob']) . "'";   }
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
		
      $query = "UPDATE h_user_details SET ";
	  	
      if (isset($_GET['mobile_number']))
		  
	  { 
	  $query .= "mobile_number= '" . mysqli_real_escape_string($db_connection, $_GET['mobile_number'])         . "', "; }
      if (isset($_GET['first_name']))
		  { $query .= "first_name = '" . mysqli_real_escape_string($db_connection, $_GET['first_name']) . "', "; }
      if (isset($_GET['last_name']))   
	  { $query .= "last_name = '" . mysqli_real_escape_string($db_connection, $_GET['last_name'])   . "', "; }
      if (isset($_GET['mail_id']))     
		  { $query .= "mail_id = '" . mysqli_real_escape_string($db_connection, $_GET['mail_id'])      . "', "; }
      if (isset($_GET['password'])) 
		  { $query .= "password  = '" . mysqli_real_escape_string($db_connection, $_GET['password'])  . "', "; }
      if (isset($_GET['auth_key']))   
		  { $query .= "auth_key    = '" . mysqli_real_escape_string($db_connection, $_GET['auth_key'])    . "', "; }
      if (isset($_GET['gender']))  
		  { $query .= "gender   = '" . mysqli_real_escape_string($db_connection, $_GET['gender'])   . "', "; }
      if (isset($_GET['dob'])) 
	  { 
		$query .= "dob = '" . mysqli_real_escape_string($db_connection, $_GET['dob']) . "'";   }
      $query .= "WHERE mobile_number = '" . mysqli_real_escape_string($db_connection, $id) . "'";
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
      $query = "DELETE FROM h_user_details WHERE mobile_number = '" . mysqli_real_escape_string($db_connection, $id) . "'";
      $query = mysqli_query($db_connection, $query);
      if (!$query){
        $result  = 'error';
        $message = 'query error';
		$mysql_data=$result;
      } else {
        $result  = 'success';
        $message = 'query success';
		$mysql_data=$result;
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
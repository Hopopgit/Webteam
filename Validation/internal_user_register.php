<?php
require_once 'connection.php';
header('Content-Type:application/json');

class User_internal {

	private $db;
	private $connection;

	function __construct() {
		$this->db = new DB_Connection();
		$this->connection = $this->db->get_connection();
	}

	public function register_internal_user($first_name, $last_name, $login_name, $encrypt_password, $email_id,
																				$user_role, $user_permission, $contact_number, $address) {

		$query = "select * from i_user_details where login_name='$login_name' and email_id='$email_id'";
		$result = mysqli_query($this->connection, $query);
		if(mysqli_num_rows($result)>0){
		$json['Error']='User Already registered';
		http_response_code(406);
		}
		else {
		$query = "insert into i_user_details(first_name, last_name, login_name, password, email_id, user_role, user_permission, contact_number, address)
		 					values('$first_name', '$last_name', '$login_name', '$encrypt_password', '$email_id',
											'$user_role', '$user_permission', '$contact_number', '$address')";
		$is_inserted = mysqli_query($this->connection, $query);
		//echo "Before insert check";
		//echo $query;
		if ($is_inserted==1) {
			$json['success']='Your account has been created';
			http_response_code(201);
		}else {
			$json['error']='Issue in User creation , Please try with different sets';
			http_response_code(406);
		}
		}
		echo json_encode($json);

		mysqli_close($this->connection);

	}
}

$User_internal = new User_internal();

	if (isset($_POST['first_name'],$_POST['last_name'],$_POST['login_name'],$_POST['password'],$_POST['email_id'],
						$_POST['user_role'],$_POST['user_permission'],$_POST['contact_number'],$_POST['address'])) {
	$first_name =$_POST['first_name'] ;
	$last_name = $_POST['last_name'];
	$login_name = $_POST['login_name'];
	$password = $_POST['password'];
	$email_id = $_POST['email_id'];
	$user_role = $_POST['user_role'];
	$user_permission = $_POST['user_permission'];
	$contact_number = $_POST['contact_number'];
	$address = $_POST['address'];

/*	echo "after assigning to variable";
	echo "<br>";
	echo $contact_number;
	echo $first_name;
	echo $last_name;
	echo $email_id;
	echo $password;*/

	if (!empty($first_name) && !empty($last_name) && !empty($login_name) && !empty($password) && !empty($email_id)
			&& !empty($user_role) && !empty($user_permission) && !empty($contact_number)	&& !empty($address) ) {
		$encrypt_password = md5($password);
		$User_internal->register_internal_user($first_name, $last_name, $login_name, $encrypt_password, $email_id,
																					$user_role, $user_permission, $contact_number, $address);
	}else {
		echo json_encode("Please enter manditatory fields");
		http_response_code(206);
	}
} else {
	echo "Nothing happening inside..";
	http_response_code(204);
}


?>

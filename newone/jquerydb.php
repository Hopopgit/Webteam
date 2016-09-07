<?php 
				$con=mysqli_connect('localhost','root','','redbeak_db');

				

				if(!$con)
				{
					echo "Failed to connect to MySQL: check your connection".mysqli_connect_error();
				}


				$sql="select * from i_user_details";
				if (!$sql) 
				{
				    printf("Error: %s\n", mysqli_error($con));
				    exit();	
				}
				
				$run_user=mysqli_query($con,$sql);
				$user_json=array();
				

				if(mysqli_num_rows($run_user) > 0 ){
				while($row_user=mysqli_fetch_array($run_user))
				{
					$id=$row_user['id'];
					$first_name=$row_user['first_name'];
					$last_name=$row_user['last_name'];
					$login_name=$row_user['login_name'];
					$password=$row_user['password'];
					$email_id=$row_user['email_id'];
					$user_role=$row_user['user_role'];
					$user_permission=$row_user['user_permission'];
					$contact_number=$row_user['contact_number'];
					$address=$row_user['address'];
					
					$user_json[]=$row_user;
					
				}
			}
				header("Content-type:application/json");
				echo json_encode($user_json);
?>
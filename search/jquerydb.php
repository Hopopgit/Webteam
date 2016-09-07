<?php 
				$con=mysqli_connect('localhost','root','','redbeak_db');

				

				if(!$con)
				{
					echo "Failed to connect to MySQL: check your connection".mysqli_connect_error();
				}


				$sql="select * from user";
				if (!$sql) 
				{
				    printf("Error: %s\n", mysqli_error($con));
				    exit();	
				}
				
				$run_employees=mysqli_query($con,$sql);
				$employees_json=array();
				

				if(mysqli_num_rows($run_employees) > 0 ){
				while($row_employees=mysqli_fetch_array($run_employees))
				{
					$id=$row_employees['id'];
					$firstname=$row_employees['firstname'];
					$lastname=$row_employees['lastname'];
					$gender=$row_employees['gender'];
					$jobtitle=$row_employees['jobtitle'];
					$website=$row_employees['website'];
					$salary=$row_employees['salary'];
					$hiredate=$row_employees['hiredate'];
					
					$employees_json[]=$row_employees;
					
				}
			}
				header("Content-type:application/json");
				echo json_encode($employees_json);
?>
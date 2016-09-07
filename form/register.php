<?php
	
	require_once 'dbconfig.php';

	if($_POST)
	{
		$name = $_POST['name'];
		$email_id = $_POST['email_id'];
		$contact_number = $_POST['contact_number'];
		$coupon_code = $_POST['coupon_code'];
		$location = $_POST['location'];
		$mode_of_transport = $_POST['mode_of_transport'];
		
		
		try
		{	
		
			$stmt = $db_con->prepare("SELECT * FROM alpha_users WHERE contact_number=:contact_number");
			$stmt->execute(array(":contact_number"=>$contact_number));
			$count = $stmt->rowCount();
			
			if($count==0){
				
			$stmt = $db_con->prepare("INSERT INTO alpha_users(name,email_id,contact_number,coupon_code,location,mode_of_transport) VALUES(:name, :email_id, :contact_number,:coupon_code, :location,:mode_of_transport)");
			$stmt->bindParam(":name",$name);
			$stmt->bindParam(":email_id",$email_id);
			$stmt->bindParam(":contact_number",$contact_number);
			$stmt->bindParam(":coupon_code",$coupon_code);
			$stmt->bindParam(":location",$location);
			$stmt->bindParam(":mode_of_transport",$mode_of_transport);
					
				if($stmt->execute())
				{
					echo "registered";
				}
				else
				{
					echo "Query could not execute !";
				}
			
			}
			else{
				
				echo "1"; //  not available
			}
				
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>
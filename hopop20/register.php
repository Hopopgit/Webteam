<?php
	
	require_once 'dbconfig.php';

	if($_POST)
	{
		$name = $_POST['name'];
		$email_id = $_POST['email_id'];
		$contact_number = $_POST['contact_number'];
		$location = $_POST['location'];
		$mode_of_transport = $_POST['mode_of_transport'];
		$coupon_code = $_POST['coupon_code'];
		
		try
		{

				 $url = 'https://api.sendgrid.com/';
				 $user = 'azure_0d981889317390e19f1746bfa7269952@azure.com';
				 $pass = 'Hopop@TBI2016'; 

				 $params = array(
				      'api_user' => $user,
				      'api_key' => $pass,
				      'to' => 'info@redbeak.co.in',
				      'subject' => 'Alpha User Form:'.$name.'!!!',
				      'html' => 'You have received a new registration from alpha registration form. Here are the details:Name:'.$name. '<br />'.'Email:' .$email_id. '<br />'.'Phone:'.$contact_number. '<br />'.'location:'.$location. '<br />'.'mode_of_transport:' .$mode_of_transport.'<br />'.'coupon_code'.$coupon_code,
				      'text' => 'You have received a new registration from alpha registration form. Here are the details:Name:'.$name. '<br />'.'Email:' .$email_id. '<br />'.'Phone:'.$contact_number. '<br />'.'location:'.$location. '<br />'.'mode_of_transport:' .$mode_of_transport.'<br />'.'coupon_code'.$coupon_code,
				      'from' => 'info@redbeak.com',
				   );

				 $request = $url.'api/mail.send.json';

				 // Generate curl request
				 $session = curl_init($request);
				 
				 //Not to look for peer SSL verification 
				 curl_setopt($session, CURLOPT_SSL_VERIFYPEER, false);

				 // Tell curl to use HTTP POST
				 curl_setopt ($session, CURLOPT_POST, true);

				 // Tell curl that this is the body of the POST
				 curl_setopt ($session, CURLOPT_POSTFIELDS, $params);

				 // Tell curl not to return headers, but do return the response
				 curl_setopt($session, CURLOPT_HEADER, false);
				 curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

				 // obtain response
				 $response = curl_exec($session);
				 curl_close($session);

				 // print everything out
				 //print_r($response);
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
		
		try
		{	
		
			$stmt = $db_con->prepare("SELECT * FROM alpha_users WHERE contact_number=:contact_number");
			$stmt->execute(array(":contact_number"=>$contact_number));
			$count = $stmt->rowCount();
			
			if($count==0){
				
			$stmt = $db_con->prepare("INSERT INTO alpha_users(name,email_id,contact_number,location,mode_of_transport,coupon_code) VALUES(:name, :email_id, :contact_number, :location,:mode_of_transport,:coupon_code)");
			$stmt->bindParam(":name",$name);
			$stmt->bindParam(":email_id",$email_id);
			$stmt->bindParam(":contact_number",$contact_number);
			$stmt->bindParam(":location",$location);
			$stmt->bindParam(":mode_of_transport",$mode_of_transport);
			$stmt->bindParam(":coupon_code",$coupon_code);
					
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
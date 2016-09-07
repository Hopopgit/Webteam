<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$dbhost = 'ap-cdbr-azure-east-c.cloudapp.net';
$dbuser = 'b3a47d178b538e';
$dbpass = 'cdd08848';
$dbname = 'hopop_db';

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$name = $_POST["name"];
$email = $_POST["email"];
$phone=$_POST["phone"];
$msg = $_POST["message"];


/*$sql = "INSERT INTO r_contact (name, email,phone, message) VALUES ('$name','$email','$phone','$msg')";
$response = $con->query($sql);

if($response ==1 ){
	echo "<h3>Message sent</h3>";
}
else
{
	echo "Issue in inserting";
}*/

//mail server testing starts



 $url = 'https://api.sendgrid.com/';
 $user = 'azure_9ff9d9c23b4c6d0b6b68e02ffa08aead@azure.com';
 $pass = 'Hopop@TBI2016'; 

 $params = array(
      'api_user' => $user,
      'api_key' => $pass,
      'to' => 'info@redbeak.co.in',
      'subject' => 'Website Contact Form:'.$name.'!!!',
      'html' => 'You have received a new message from your website contact form.Here are the details:<br>Name:  '.$name.'<br/>'.'Phone:  '.$phone.'<br/>'.'Message:  '.$msg,
      'text' => 'You have received a new message from your website contact form.Here are the details:Name:'.$name.'Email:' .$email.'Phone:'.$phone.'Message:'.$msg,
      'from' => $email,
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
 print_r($response);
 

//ail server testing ends

	
// Create the email and send the message
/*$to = 'yourname@yourdomain.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;*/			
?>
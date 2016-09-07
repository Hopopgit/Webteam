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

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'nagu';

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$name = $_POST["name"];
$email = $_POST["email"];
$phone=$_POST["phone"];
$msg = $_POST["message"];


$sql = "INSERT INTO pramoda (name, email,phone, message) VALUES ('$name','$email','$phone','$msg')";
$response = $con->query($sql);

if($response ==1 ){
	echo "<h3>Message sent</h3>";
}
else
{
	echo "Issue in inserting";
}
	
// Create the email and send the message
/*$to = 'yourname@yourdomain.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;*/			
?>
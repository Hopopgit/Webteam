<?php
// Check for empty fields
if(empty($_POST['first_name'])  		||
   empty($_POST['last_name']) 		||
   empty($_POST['login_name']) 		||
   empty($_POST['message'])	||
   empty($_POST['encrypt_password'])  		||
      empty($_POST['email_id']) 		||
      empty($_POST['phone']) 		||
      empty($_POST['user_role'])	||
      empty($_POST['contact_number'])	||
      empty($_POST['address'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'redbeak_db';

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$name = $_POST["first_name"];
$lname = $_POST["last_name"];
$loginname=$_POST["login_name"];
$msg = $_POST["message"];
$password = $_POST["encrypt_password"];
$email = $_POST["email_id"];
$phone=$_POST["phone"];
$userole = $_POST["user_role"];
$number = $_POST["contact_number"];
$add = $_POST["address"];



$sql = "INSERT INTO i_user_details (first_name,last_name,login_name, message,encrypt_password,email_id,phone,user_role,contact_number,address) VALUES
 ('$name','$lname','$loginname','$msg','$password','$email','$password','$phone','$userole','$number','$add',)";
$response = $con->query($sql);

if($response ==1 ){
	echo "<h3> Registered</h3>";
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

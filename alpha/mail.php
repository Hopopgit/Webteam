<?php

header('Content-Type: application/json; charset=utf-8');
//Fetching Values from URL
/*header('Content-Type: application/json; charset=utf-8');
$entityBody = file_get_contents('php://input');
$route_array = json_decode($entityBody,true);
if (isset($route_array['name'],$route_array['email'],$route_array['message'])){ */
    
  /* $name2 = $route_array['name'];
   $email2 = $route_array['email'];
  $message2 = $route_array['message'];*/
  $entityBody = file_get_contents('php://input');
  $array = json_decode($entityBody,true);
  echo "Testing for data".$entityBody;
  echo "Data are!!!!";
echo $array['name'];

$name = $array['name'];
$email = $array['email'];	
$message = $array['message'];
$template = '<div style="padding:50px; color:white;">Hello ' . $name . ',<br/>'
. '<br/>Thank you...! For Contacting Us.<br/><br/>'
. 'Email:' . $email . '<br/>'
. 'Message:' . $message . '<br/><br/>'
. '<h3>Redbeak technologies.</h3>'
. '<br/>'
. '<h4>info@redbeak.co.in</h4></div>';
$message="<div style=\"background-color:#7E7E7E; color:white;\">" . $template . "</div>";
/*echo $name2; echo $email2;echo $message2;
//sanitizing email
$email2 = filter_var($email2, FILTER_SANITIZE_EMAIL);
//After sanitization Validation is performed
if (filter_var($email2, FILTER_VALIDATE_EMAIL)) {
 $subject = $message2;
// To send HTML mail, the Content-type header must be set
//$headers = 'MIME-Version: 1.0' . "\r\n";
//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:' . $email2. "\r\n"; // Sender's Email
$headers .= 'Cc:' . $email2. "\r\n"; // Carbon copy to Sender
$template = '<div style="padding:50px; color:white;">Hello ' . $name2 . ',<br/>'
. '<br/>Thank you...! For Contacting Us.<br/><br/>'
. 'Email:' . $name2 . '<br/>'
. 'Email:' . $email2 . '<br/>'
. 'Message:' . $message2 . '<br/><br/>'
. 'This is a Contact Confirmation mail.'
. '<br/>'
. 'We Will contact You as soon as possible .</div>';
$sendmessage = "<div style=\"background-color:#7E7E7E; color:white;\">" . $template . "</div>";
// message lines should not exceed 70 characters (PHP rule), so wrap it
$sendmessage = wordwrap($sendmessage, 70);

// Send mail by PHP Mail Function
mail("receiver_email_id@abc.com", $subject, $sendmessage, $headers);
echo "Your Query has been received, We will contact you soon.";

} 
else {
echo "<span>* invalid email *</span>";
}
*/

//sendgrid api calls starts


/*
$name = $array['name'];
$email = $array['email'];	
$message = $array['message'];
*/
try
{
 $url = 'https://api.sendgrid.com/';
 $user = 'azure_0d981889317390e19f1746bfa7269952@azure.com';
 $pass = 'Hopop@TBI2016'; 

 $params = array(
      'api_user' => $user,
      'api_key' => $pass,
      'to' => $email,
      'subject' => 'Issue info mail',
      'html' =>$message, 
      'text' =>$message,
      'from' =>'info@redbeak.co.in',
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
}
catch(exception $e)
{
	echo "Issue with mailer calls yar.....";
}
//sendgrid api calls ends

?>
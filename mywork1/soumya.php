<html>
<body>
<?php

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
/*echo '<b>Name:</b>'.$_POST["name"]."<br>". '<b>email:</b>'.$_POST["email"]."<br>". '<b>message:</b>'.$_POST["message"]."<br>";

$sql1 = "SELECT name, email, message FROM user_info";
$result = $con->query($sql1);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo "<br>";
		//echo " <b> ID: </b>" . $row["id"];
		//echo "<br>"; 
		
		echo " <b> Name:</b> " . $row["name"];
		//echo "<br>";
		echo " <b> Email: </b> " . $row["email"];
		//echo "<br>";
		echo " <b> Message: </b> " . $row["message"];
	
    }
} else {
    echo "0 results";
}
	*/
?>
</body>
</html>

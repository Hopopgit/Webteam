<html>
<body>
<?php

include('connect-db.php');

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$login_name=$_POST["login_name"];
$password = $_POST["password"];
$email_id = $_POST["email_id"];
$user_role = $_POST["user_role"];
$user_permission=$_POST["user_permission"];
$contact_number = $_POST["contact_number"];
$address = $_POST["address"];

$query = "INSERT INTO i_user_details (first_name, last_name,login_name, password, email_id, user_role, user_permission
, contact_number, address) VALUES ('$first_name','$last_name','$login_name','$password','$email_id','$user_role','$user_permission','$contact_number','$address')";
$result = mysqli_query($connector,$query);

header("Location: view.php");

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

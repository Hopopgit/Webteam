<?php

 

session_start();


 
include('db_connection.php');
 

    

 

    // Get the login credentials from user

    $email_id = $_POST['email_id'];

    $password = $_POST['password'];

     

    // Secure the credentials

    $email_id = mysqli_real_escape_string($connector,$_POST['email_id']);

    $password = mysqli_real_escape_string($connector,$_POST['password']);

 

    // Check the users input against the DB.

    $query = "SELECT COUNT(`email_id`) AS `total` FROM `i_user_details` WHERE `email_id` = '$email_id' AND `password` = '$password'";

$result = mysqli_query($connector,$query);

$row = mysqli_fetch_array($result);


     

    if ($row['total'] == 1)

    {

        $_SESSION['loggedIn'] = "true";

        header("Location:view.php");

    }

    else

    {

        $_SESSION['loggedIn'] = "false";

        echo "<p>Login failed, email or password incorrect.</p>";

    }

?>



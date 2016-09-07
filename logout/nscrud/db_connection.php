
 
<?php
      /*$username = "root";
      $password = "";
      $host = "localhost";
      $database="register";*/
	  $db_server   = 'bitnami-mysql-b07f.cloudapp.net';
$db_username = 'root';
$db_password = 'NpNpCI7K';
$db_name     = 'redbeak_db';

      $connector = mysqli_connect($db_server,$db_username,$db_password,$db_name)
          or die("Unable to connect");

    //  $selected = mysqli_select_db("register", $connector)
        //or die("Unable to connect");

      //execute the SQL query and return records
     // $query = "SELECT * FROM  h_user_details";
      //$result = mysqli_query($connector, $query);
	  
      //$result = mysqli_query("SELECT * FROM user_data ");
	  
      ?>
 


 
<?php
      $username = "root";
      $password = "NpNpCI7K";//NpNpCI7K
      $host = "bitnami-mysql-b07f.cloudapp.net";//"localhost";
      $database="redbeak_db";//"register"

      $connector = mysqli_connect($host,$username,$password,$database)
          or die("Unable to connect");

    //  $selected = mysqli_select_db("register", $connector)
        //or die("Unable to connect");

      //execute the SQL query and return records
      $query = "SELECT * FROM  h_user_details";

      //$result = mysqli_query("SELECT * FROM user_data ");
	  
      ?>
 

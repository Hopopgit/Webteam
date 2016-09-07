<?php
      $username = "root";
      $password = "";
      $host = "localhost";
      $database="redbeak_db";

      $connector = mysqli_connect($host,$username,$password,$database)
          or die("Unable to connect");

    //  $selected = mysqli_select_db("register", $connector)
        //or die("Unable to connect");

      //execute the SQL query and return records
      $query = "SELECT * FROM  i_user_details";
      $result = mysqli_query($connector, $query);
	  
      //$result = mysqli_query("SELECT * FROM user_data ");
	  
      ?>
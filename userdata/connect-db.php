<?php
      $username = "root";
      $password = "";
      $host = "localhost";
      $database="records";

      $connector = mysqli_connect($host,$username,$password,$database)
          or die("Unable to connect");

    //  $selected = mysqli_select_db("register", $connector)
        //or die("Unable to connect");

      //execute the SQL query and return records
      $query = "SELECT * FROM players";
      $result = mysqli_query($connector, $query);
	  
      //$result = mysqli_query("SELECT * FROM user_data ");
	  
      ?>
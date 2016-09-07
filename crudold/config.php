<?php
      $username = "root";
      $password = "";
      $host = "localhost";
      $database="freeze_demo";

      $connector = mysqli_connect($host,$username,$password,$database)
          or die("Unable to connect");

    //  $selected = mysqli_select_db("freeze_demo", $connector)
        //or die("Unable to connect");

      //execute the SQL query and return records
      $query = "SELECT * FROM addd";
      $result = mysqli_query($connector, $query);
      //$result = mysqli_query("SELECT * FROM addd ");
      ?>
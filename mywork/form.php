<?php
include "connect.php"
mysqli_select_db($d,$con);
$sql="INSERT INTO nametable (fname,lname)
VALUES
('$_POST[fname]','$_POST[lname]')";
if (!mysqli_query($sql,$con))
  {
  die('Error: '. mysqli_error());
  }
echo "1 record added";
mysqli_close($con)
?>
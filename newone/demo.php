<html>
<body>
<form action="functioncalling.php">
    <input type="text" name="txt" />
    <input type="submit" name="insert" value="insert" onclick="insert()" />
    <input type="submit" name="select" value="select" onclick="select()" />
</form>
<?php
include('connect-db.php');

function select(){
   echo "The select function is called.";
}
function insert(){
   echo "The insert function is called.";
}
?>
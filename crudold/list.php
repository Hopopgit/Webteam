<html>
<style type="text/css">
td
{
padding:5px;
border:1px solid #ccc;

}
</style>
<body>
<?php
include('config.php');
$query = "SELECT * FROM addd";
      $result = mysqli_query($query);
//$query1=mysqli_query("select id, name, age from addd");
echo "<table><tr><td>Name</td><td>Age</td><td></td><td></td>";
while($query2=mysqli_fetch_array($result))
{
echo "<tr><td>".$query2['name']."</td>";
echo "<td>".$query2['age']."</td>";
echo "<td><a href='edit.php?id=".$query2['id']."'>Edit</a></td>";
echo "<td><a href='delete.php?id=".$query2['id']."'>x</a></td><tr>";
}
?>
</ol>
</table>
</body>
</html>
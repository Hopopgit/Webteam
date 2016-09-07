<html>
<body>
<?php
include('config.php');
if(isset($_GET['employee_id']))
{
$id=$_GET['employee_id'];
if(isset($_POST['submit']))
{
$Employee_id=$_POST['employee_id'];
$Empployee_name=$_POST['employee_name'];
$Employee_dob=$_POST['employee_dob'];
$Employee_addr=$_POST['employee_addr'];
$Employee_dept=$_POST['employee_dept'];
$Employee_sal=$_POST['employee_sal'];
$query3=mysqli_query("update user_data set employee_id='$Employee_id', employee_name='$Empployee_name' 
, employee_dob='$Employee_dob', employee_addr='$Employee_addr', employee_dept='$Employee_dept'
, employee_sal='$Employee_sal'where employee_id='$Employee_id'");
if($query3)
{
header('location:reg.php');
}
}
$query1=mysqli_query("select * from user_data where employee_id='$Employee_id'");
$query2=mysqli_fetch_array($query1);
?>
<form method="post" action="reg.php">
Employee_id:<input type="text" name="employee_id" value="<?php echo $query2['employee_id']; ?>" /><br />
Empployee_name:<input type="text" name="employee_name" value="<?php echo $query2['employee_name']; ?>" /><br /><br />
Employee_dob:<input type="text" name="employee_dob" value="<?php echo $query2['employee_dob']; ?>" /><br />
Employee_addr:<input type="text" name="employee_addr" value="<?php echo $query2['employee_addr']; ?>" /><br /><br />
Employee_dept:<input type="text" name="employee_dept" value="<?php echo $query2['employee_dept']; ?>" /><br />
Employee_sal:<input type="text" name="employee_sal" value="<?php echo $query2['employee_sal']; ?>" /><br /><br />
<br />
<input type="submit" name="submit" value="update" />
</form>
<?php
}
?>
</body>
</html>

 
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
$result=mysqli_query("select * from user_data where employee_id='$Employee_id'");

?>
<form method="post" action="edit.php?edit=<?= $Employee_id; ?>">
<tbody>
        <?php
          while( $row = mysqli_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row['employee_id']}</td>
              <td>{$row['employee_name']}</td>
              <td>{$row['employee_dob']}</td>
              <td>{$row['employee_addr']}</td>
              <td>{$row['employee_dept']}</td>
              <td>{$row['employee_sal']}</td>
			  
			  
          </tr>\n";
          }
        ?>
      </tbody>
<input type="submit" name="submit" value="update" />
</form>
<?php
}
?>
</body>
</html>

 
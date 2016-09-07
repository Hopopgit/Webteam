<!doctype html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>database connections</title>
    </head>
    <body>
     <?php include('config.php');
      ?>
      <table border="1" style= "background-color: #FFFFF; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
          <th>Employee_id</th>
          <th>Employee_Name</th>
          <th>Employee_dob</th>
          <th>Employee_Adress</th>
          <th>Employee_dept</th>
          <th>Employee_salary</th>
          <th>Function</th>

        </tr>
      </thead>
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
			  <td><a href='edit.php?.{$row['employee_id']}.'>Edit</a></td>
			   <td><a href=delete.php?.{$row['employee_id']}>delete</a></td>
			  
          </tr>\n";
          }
        ?>
      </tbody>
    </table>
     <?php mysqli_close($connector); ?>
    </body>
    </html>

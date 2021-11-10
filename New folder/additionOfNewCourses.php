<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'db'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
?>
<html>
    <head>
        <title>Addition Of New Courses</title>
    </head>
    <body>
        <form action="addition.php" method="post">
        $sql=mysql_query("SELECT id,name FROM table2");
if(mysql_num_rows($sql)){
$select= '<select name="select">';
while($rs=mysql_fetch_array($sql)){
      $select.='<option value="'.$rs['id'].'">'.$rs['name'].'</option>';
  }
}
$select.='</select>';

        
        </form>    
              
              
              
              
              </body>
    
    
    
</html>
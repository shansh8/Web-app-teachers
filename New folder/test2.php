<?php

$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'db'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

$data=$_GET['id'];


$sql1="SELECT registration.username FROM registration,registration2 WHERE registration2.id='$data' AND registration.id=registration2.id";
 	
$result= mysqli_query($conn,$sql1);
  while($row=mysqli_fetch_array($result))
  {
 
  echo $row['username'];

  }
?>

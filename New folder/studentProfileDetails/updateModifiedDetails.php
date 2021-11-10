<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'db'; // Database Name
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
$fname=$_POST['FirstName'];
$lname=$_POST['LastName'];
//$email=$_POST['Email'];
$sql1="UPDATE registration2 SET FirstName='$fname',LastName='$lname'";
mysqli_query($conn,$sql1);
?>
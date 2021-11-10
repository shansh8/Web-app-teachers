<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'db'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
mysqli_select_db($conn,'$db_name');
$sql="ALTER TABLE ";
if(mysqli_query($conn,$sql))
{
    header("refresh : 0.5 ; url=#");
}
else
{
    echo "not entered";
}
?>
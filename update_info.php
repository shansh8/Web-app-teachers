<?php

$user=$_POST["username"];
$pass=$_POST["password"];

$userna="root";
$passwor="pass";
$host="192.168.43.223";
$db_name="rahul";

$con=mysqli_connect($host,$userna,$passwor,$db_name);

$sql="select * from reg_values where username like '$user' and password like '$pass'";
$result=mysqli_fetch_array(mysqli_query($con,$sql));
if(isset($result)>0)
{
	echo "Success";	
}
else
{
	echo "Failed...";
}


?>

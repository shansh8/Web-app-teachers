<?php

$hostname="192.168.43.223";
$user_name="root";
$password="";
$db_name="dyslexia";

$con=mysqli_connect($hostname,$user_name,$password,$db_name);

if($con)
{
	echo "Connected";
}
else
{
	echo "Not connected";
}

?>


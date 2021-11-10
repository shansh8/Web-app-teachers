<?php

$hostname="localhost";
$user_name="root";
$password="";
$db_name="rahul";

$con=mysqli_connect($hostname,$user_name,$password,$db_name);

if($con)
{
		//echo "Connected";	
}
else
{
		//echo "Not conected";
}

?>


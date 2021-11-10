<?php
	
require "init.php";
if($con)
{
	$username=$_POST["username"];
	$sql="select  student.FirstName, student.LastName, supervisor.FirstName, supervisor.LastName, IP,Class from student NATURAL JOIN supervisor where StudentID like '$username'";
	if(mysqli_query($con,$sql))
	{
		echo json_encode(array("Name"=>$_row["student.FirstName"]+$_row["student.LastName"],"Supervisor"=>$_row["supervisor.FirstName"]+$_row["supervisor.LastName"],"StudentID"=>$_row["Class"],"Image"=>$_row["IP"]));

	}
	else
	{
		echo json_encode(array("Name"=>"Error","Supervisor"=>"Error","StudentID"=>"Error","Image"=>"Error"));
		

	}
	


}
else
{

	echo json_encode(array("Name"=>"Error","Supervisor"=>"Error","StudentID"=>"Error","Image"=>"Error"));



}



?>

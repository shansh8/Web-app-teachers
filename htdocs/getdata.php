<?php
	
require "init.php";
if($con)
{
	$username=$_POST["username"]
	$sql="select student.FirstName AS nameaa,supervisor.FirstName AS namebb,supervisor.LastName AS nameab,student.LastName as nameba,IP,Class  from student INNER JOIN supervisor ON student.SuperID= supervisor.SuperID";
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{	
			$namex=$row["nameaa"].' '.$row["nameba"];
			$namey=$row["nameab"].' '.$row["namebb"];
			echo json_encode(array("Name"=>$namex,"Supervisor"=>$namey,"Class"=>$row["Class"],"Image"=>$row["IP"]));

		}
	}
	else
	{
		echo "0 Results";		
	}
}
else
{

	echo json_encode(array("Name"=>"Error","Supervisor"=>"Error","StudentID"=>"Error","Image"=>"Error"));



}



?>

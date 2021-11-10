<?php

include "init.php";
	
if($con)
{	

	$super=$_POST["super_id"];
	$sql="select * from supervisor where SuperID like '.$super.'";
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{	
			$namex=$row["FirstName"].' '.$row["LastName"];
			echo json_encode(array("Name"=>$namex,"Reg"=>$row["Regno"],"Inst"=>$row["Institution"],"Mob"=>$row["Mobile"],"Img_IP"=>$row["image"]));

		}
	}
}
else
{


}




?>

<?php


	require "init.php";

	if($con)
	{
		$sql="SELECT * FROM image";
		$result=$con->query($sql);
		while($row=$result->fetch_assoc())
		{
			echo json_encode(array("URL"=>$row["image"]));			
		}
	
	}
	$con->close();

?>


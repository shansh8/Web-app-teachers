<?php


	require "init.php";

	if($con)
	{
		$sql="SELECT * FROM image";
		$result=$con->query($sql);
		$data=array();
		while($row=$result->fetch_assoc())
		{
			$data[] =array("URL"=>$row["name"]);			
		}
		echo json_encode($data);

	}
	$con->close();

?>


<?php

include "init.php";

if($con)
{
	$image=$_POST["image"];
	$name=$_POST["name"];
	$sql=" insert into final(name) values('.$name.')";
	$upload_path="$name.jpeg";
	
	if(mysqli_query($con,$sql))
	{
		file_put_contents($upload_path,base64_decode($image));
		echo json_encode(array('response'=>'Image Uploaded Successfully'));
	}
	else
	{	
		echo json_encode(array('response'=>'Image Upload Failed'));	
	}
}
else
{
	echo json_encode(array('response'=>'Could not connect to database'));
}

mysqli_close($con);
?>


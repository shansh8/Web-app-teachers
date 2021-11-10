<?php
session_start();
include 'dbh.php';

$msg=$_POST['msg'];
//$sender=$_SESSION['sender'];
//$destination=$_SESSION['destination'];

$sql="INSERT INTO fetchid(msg,sender,destination) VALUES('$msg','{$_SESSION['sender']}','{$_SESSION['destination']}')";
$result=$conn->query($sql);


header("Location:home.php");
?>
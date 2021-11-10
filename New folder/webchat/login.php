<?php
session_start();
include 'dbh.php';
$uname=$_POST['username'];
$pass=$_POST['password'];
$sql="SELECT *FROM login WHERE username='$uname' AND password='$pass'";
$result=$conn->query($sql);
if(!$row=$result->fetch_assoc())
{
    echo "errrorrrrr";
    header("Location:error.php");
    
}
else
{
    $_SESSION['username']=$_POST['username'];
    header("Location:home.php");
}
?>
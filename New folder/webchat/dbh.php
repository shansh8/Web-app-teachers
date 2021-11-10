<?php
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'db');

if(!$conn){
    die("connection failed".mysqli_connect_error());
}
?>
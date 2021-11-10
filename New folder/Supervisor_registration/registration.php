<?php
if($_POST["submit"]=="save")
{
    $name=$_POST["name"];
    $gender=$_POST["gender"];
    $email=$_POST["email"];
    $phoneCode=$_POST["phoneCode"];
    $phone=$_POST["phone"];;
    $registration=$_POST["registration"];
    $qualification=$_POST["qualification"];
    $filepath = "images/" . $_FILES["iimage"]["name"];
    
    mysql_connect('localhost','root','');
    mysql_select_db("db");
    $query="INSERT INTO contact(name,gender,email,phoneCode,phone,registration,qualification,image) VALUES('".$name."','".$gender."','".$email."','".$phoneCode."','".$phone."','".$registration."','".$qualification."','".$filepath."')";
    if(mysql_query($query))
    {
        echo "record saved";
    }
    else {
        echo mysql_error();
    }
}
?>
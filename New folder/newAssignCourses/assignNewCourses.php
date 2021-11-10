<?php $form_path='assignnewcourses_files/formoid1/form.php'; require_once $form_path;

//$superVisorID=$_POST['username'];
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'db'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
mysqli_select_db($conn,'$db_name');
$query="SELECT * FROM registration2 WHERE id='1'";
$records=mysqli_query($conn,$query);

?>

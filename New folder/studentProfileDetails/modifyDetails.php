
<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'db'; // Database Name
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
$sql="SELECT * FROM registration2 WHERE id='5'";
$result=mysqli_query($conn,$sql);

?>
<html> 
    
    <head><title>Update Data</title>
    

    </head>
       
       
 <body>

    
     <?php
     while($row=mysqli_fetch_array($result))
     {
         echo "<form action=updateModifiedDetails.php method=post>";
         echo "First Name"."<br>"."<input type=text name=FirstName value='".$row['FirstName']."'>"."<br>";
          echo "Last Name"."<br>"."<input type=text name=LastName value='".$row['LastName']."'>"."<br>";
          echo "Email Id"."<br>"."<input type=text name=Email value='".$row['Email']."'>"."<br>";
         echo "<input type=submit>";
         echo "</form>";
     }
     
     ?>
    
    </body>
    </html>

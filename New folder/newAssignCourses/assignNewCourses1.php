<!DOCTYPE html>
<?php
//$form_path='assignnewcourses_files/formoid1/form.php'; require_once $form_path;

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

<html>
<head>
	<meta charset="utf-8" />
	<title>My form - Formoid form css</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="blurBg-false" style="background-color:#EBEBEB">



<!-- Start Formoid form-->
<link rel="stylesheet" href="assignnewcourses_files/formoid1/formoid-solid-green.css" type="text/css" />
<script type="text/javascript" src="assignnewcourses_files/formoid1/jquery.min.js"></script>
<form class="formoid-solid-green" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post"><div class="title"><h2>My form</h2></div>
	<div class="element-select"><label class="title"></label><div class="item-cont"><div class="large"><span><select name="select" >

		<option value="option 1">option 1</option>
		<option value="option 2">option 2</option>
		<option value="option 3">option 3</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-input"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input" placeholder="Grade"/><span class="icon-place"></span></div></div>
	<div class="element-rating"><label class="title">Interactivity Level</label><div class="rating"><input type="radio" class="rating-input" id="rating-5" name="rating" value="5" /><label for="rating-5" class="rating-star"></label><input type="radio" class="rating-input" id="rating-4" name="rating" value="4" /><label for="rating-4" class="rating-star"></label><input type="radio" class="rating-input" id="rating-3" name="rating" value="3" /><label for="rating-3" class="rating-star"></label><input type="radio" class="rating-input" id="rating-2" name="rating" value="2" /><label for="rating-2" class="rating-star"></label><input type="radio" class="rating-input" id="rating-1" name="rating" value="1" /><label for="rating-1" class="rating-star"></label></div></div>
	<div class="element-rating"><label class="title">Difficulty Level</label><div class="rating"><input type="radio" class="rating-input" id="rating1-5" name="rating1" value="5" /><label for="rating1-5" class="rating-star"></label><input type="radio" class="rating-input" id="rating1-4" name="rating1" value="4" /><label for="rating1-4" class="rating-star"></label><input type="radio" class="rating-input" id="rating1-3" name="rating1" value="3" /><label for="rating1-3" class="rating-star"></label><input type="radio" class="rating-input" id="rating1-2" name="rating1" value="2" /><label for="rating1-2" class="rating-star"></label><input type="radio" class="rating-input" id="rating1-1" name="rating1" value="1" /><label for="rating1-1" class="rating-star"></label></div></div>
	<div class="element-multiple" title="Select Course Type"><label class="title"></label><div class="item-cont"><div class="large"><select data-no-selected="Nothing selected" name="multiple[]" multiple="multiple" >

		<option value="Training">Training</option>
		<option value="Test">Test</option>
		<option value="Game">Game</option></select><span class="icon-place"></span></div></div></div>
	<div class="element-multiple" title="Select Focus Area"><label class="title"></label><div class="item-cont"><div class="large"><select data-no-selected="Nothing selected" name="multiple1[]" multiple="multiple" >

		<option value="Reading Fluency">Reading Fluency</option>
		<option value="Spelling">Spelling</option>
		<option value="Auditory Discrimination">Auditory Discrimination</option>
		<option value="Writing">Writing</option></select><span class="icon-place"></span></div></div></div>
	<div class="element-multiple" title="Select Type of Activity"><label class="title"></label><div class="item-cont"><div class="large"><select data-no-selected="Nothing selected" name="multiple2[]" multiple="multiple" >

		<option value="option 1">option 1</option>
		<option value="option 2">option 2</option>
		<option value="option 3">option 3</option></select><span class="icon-place"></span></div></div></div>
	<div class="element-input"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input1" placeholder="Due Date"/><span class="icon-place"></span></div></div>
	<div class="element-input"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input2" placeholder="No of Repeatations"/><span class="icon-place"></span></div></div>
<div class="submit"><input type="submit" value="Submit"/></div></form><p class="frmd"><a href="http://formoid.com/v29.php">form css</a> Formoid.com 2.9</p><script type="text/javascript" src="assignnewcourses_files/formoid1/formoid-solid-green.js"></script>
<!-- Stop Formoid form-->

<?php
     //<form action="addition.php" method="post">
        $sql="SELECT name FROM registration2";
    $query=mysqli_query($conn,$sql);
    echo '<select name="Drop Down Menu">';
  while($row=mysqli_fetch_array($query))
  {
      echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
  }
    echo '</select>';
    
        //</form>    
?>    
    

</body>
</html>

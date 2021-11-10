<?php
//$superVisorID=$_POST['username'];
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'db'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
mysqli_select_db($conn,'$db_name');
//$query="SELECT CourseName FROM course WHERE OwnerID='$superVisorID'";
//$records=mysqli_query($conn,$query);
?>

<html>
<head>
	<meta charset="utf-8" />
	<title>New Activity - Formoid php form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="blurBg-false" style="background-color:#EBEBEB">



<!-- Start Formoid form-->
<link rel="stylesheet" href="newactivity_files/formoid1/formoid-solid-blue.css" type="text/css" />
<script type="text/javascript" src="newactivity_files/formoid1/jquery.min.js"></script>
<form action="sendCourses.php" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post"><div class="title"><h2>New Course</h2></div>
	<div class="element-input"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input" placeholder="Course Name"/><span class="icon-place"></span></div></div>
	<div class="element-number"><label class="title"></label><div class="item-cont"><input class="large" type="text" min="0" max="12" name="number" placeholder="Grade" value=""/><span class="icon-place"></span></div></div>
	<!--<div class="element-number"><label class="title"></label><div class="item-cont"><input class="large" type="text" min="0" max="12" name="number1" placeholder="Weightage" value=""/><span class="icon-place"></span></div></div>--->
	<div class="element-rating"><label class="title">Difficulty</label><div class="rating"><input type="radio" class="rating-input" id="rating-5" name="rating" value="5" /><label for="rating-5" class="rating-star"></label><input type="radio" class="rating-input" id="rating-4" name="rating" value="4" /><label for="rating-4" class="rating-star"></label><input type="radio" class="rating-input" id="rating-3" name="rating" value="3" /><label for="rating-3" class="rating-star"></label><input type="radio" class="rating-input" id="rating-2" name="rating" value="2" /><label for="rating-2" class="rating-star"></label><input type="radio" class="rating-input" id="rating-1" name="rating" value="1" /><label for="rating-1" class="rating-star"></label></div></div>
	<div class="element-rating"><label class="title">interactivity</label><div class="rating"><input type="radio" class="rating-input" id="rating1-5" name="rating1" value="5" /><label for="rating1-5" class="rating-star"></label><input type="radio" class="rating-input" id="rating1-4" name="rating1" value="4" /><label for="rating1-4" class="rating-star"></label><input type="radio" class="rating-input" id="rating1-3" name="rating1" value="3" /><label for="rating1-3" class="rating-star"></label><input type="radio" class="rating-input" id="rating1-2" name="rating1" value="2" /><label for="rating1-2" class="rating-star"></label><input type="radio" class="rating-input" id="rating1-1" name="rating1" value="1" /><label for="rating1-1" class="rating-star"></label></div></div>
	
	<!---<div class="element-multiple">
		<label class="title"></label><div class="item-cont"><div class="large"><select data-no-selected="Select" name="multiple[]" multiple="multiple" >

		<option value="option 1">Audio</option>
		<option value="option 2">Text</option>
		<option value="option 3">Video</option></select><span class="icon-place"></span></div></div>
		</div>-->
		
	<div class="element-multiple">
		<label class="title"></label><div class="item-cont"><div class="large"><select data-no-selected="Focus Area" name="multiple1[]" multiple="multiple" >

		<option value="option 1">Reading fluency</option>
		<option value="option 1">Spelling</option>
		<option value="option 2">Auditory discrimination</option>
		<option value="option 3">Writing</option></select><span class="icon-place"></span></div></div>
		</div>
	<!--<div class="element-select">
		<label class="title"></label><div class="item-cont"><div class="large"><span><select name="select" data-no-selected="Content Type">

		<option value="option 1">Audio</option>
		<option value="option 2">Video</option>
		<option value="option 3">Interactive</option></select><i></i><span class="icon-place"></span></span></div></div>
		</div>-->
		
	<!---<div class="element-separator"><hr><h3 class="section-break-title">Section Break</h3></div>-->
	<div class="element-multiple">
		<label class="title"></label><div class="item-cont"><div class="large"><select data-no-selected="Course Type" name="multiple2[]" multiple="multiple" >

		<option value="option 1">Training</option>
		<option value="option 2">Test</option>
		<option value="option 3">Game</option></select><span class="icon-place"></span></div></div>
		</div>
    <div class="element-multiple">
		<label class="title"></label><div class="item-cont"><div class="large"><select data-no-selected="Select Type of Activity" name="multiple2[]" multiple="multiple" >

		<option value="option 1">Activity1</option>
		<option value="option 2">Activity2</option>
		<option value="option 3">Activity3</option></select><span class="icon-place"></span></div></div>
		</div>
		
	<div class="element-input"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input1" placeholder="Due Date"/><span class="icon-place"></span></div></div>
	<div class="element-number"><label class="title"></label><div class="item-cont"><input class="large" type="text" min="0" max="100" name="number2" placeholder="No of repeatations" value=""/><span class="icon-place"></span></div></div>
	<!--<div class="element-input"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input2" placeholder="Rewards"/><span class="icon-place"></span></div></div>
	<div class="element-textarea"><label class="title"></label><div class="item-cont"><textarea class="medium" name="textarea" cols="20" rows="5" placeholder="Notes for parents"></textarea><span class="icon-place"></span></div></div>--->
<div class="submit"><input type="submit" value="Submit"/></div></form><p class="frmd"><a href="http://formoid.com/v29.php">php form</a> Formoid.com 2.9</p><script type="text/javascript" src="newactivity_files/formoid1/formoid-solid-blue.js"></script>
<!-- Stop Formoid form-->



</body>
</html>

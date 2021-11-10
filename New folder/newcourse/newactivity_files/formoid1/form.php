<?php

define('EMAIL_FOR_REPORTS', 'myidnan@gmail.com');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-blue.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-blue.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-solid-blue" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post"><div class="title"><h2>New Activity</h2></div>
	<div class="element-input<?php frmd_add_class("input"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input" placeholder="Activity Name"/><span class="icon-place"></span></div></div>
	<div class="element-number<?php frmd_add_class("number"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" min="0" max="12" name="number" placeholder="Number" value=""/><span class="icon-place"></span></div></div>
	<div class="element-number<?php frmd_add_class("number1"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" min="0" max="12" name="number1" placeholder="Number" value=""/><span class="icon-place"></span></div></div>
	<div class="element-rating<?php frmd_add_class("rating"); ?>"><label class="title">Difficulty</label><div class="rating"><input type="radio" class="rating-input" id="rating-5" name="rating" value="5" /><label for="rating-5" class="rating-star"></label><input type="radio" class="rating-input" id="rating-4" name="rating" value="4" /><label for="rating-4" class="rating-star"></label><input type="radio" class="rating-input" id="rating-3" name="rating" value="3" /><label for="rating-3" class="rating-star"></label><input type="radio" class="rating-input" id="rating-2" name="rating" value="2" /><label for="rating-2" class="rating-star"></label><input type="radio" class="rating-input" id="rating-1" name="rating" value="1" /><label for="rating-1" class="rating-star"></label></div></div>
	<div class="element-rating<?php frmd_add_class("rating1"); ?>"><label class="title">interactivity</label><div class="rating"><input type="radio" class="rating-input" id="rating1-5" name="rating1" value="5" /><label for="rating1-5" class="rating-star"></label><input type="radio" class="rating-input" id="rating1-4" name="rating1" value="4" /><label for="rating1-4" class="rating-star"></label><input type="radio" class="rating-input" id="rating1-3" name="rating1" value="3" /><label for="rating1-3" class="rating-star"></label><input type="radio" class="rating-input" id="rating1-2" name="rating1" value="2" /><label for="rating1-2" class="rating-star"></label><input type="radio" class="rating-input" id="rating1-1" name="rating1" value="1" /><label for="rating1-1" class="rating-star"></label></div></div>
	<div class="element-multiple<?php frmd_add_class("multiple"); ?>"><label class="title"></label><div class="item-cont"><div class="large"><select data-no-selected="Nothing selected" name="multiple[]" multiple="multiple" >

		<option value="option 1">option 1</option>
		<option value="option 2">option 2</option>
		<option value="option 3">option 3</option></select><span class="icon-place"></span></div></div></div>
	<div class="element-multiple<?php frmd_add_class("multiple1"); ?>"><label class="title"></label><div class="item-cont"><div class="large"><select data-no-selected="Nothing selected" name="multiple1[]" multiple="multiple" >

		<option value="option 1">option 1</option>
		<option value="option 2">option 2</option>
		<option value="option 3">option 3</option></select><span class="icon-place"></span></div></div></div>
	<div class="element-select<?php frmd_add_class("select"); ?>"><label class="title"></label><div class="item-cont"><div class="large"><span><select name="select" >

		<option value="option 1">option 1</option>
		<option value="option 2">option 2</option>
		<option value="option 3">option 3</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-separator"><hr><h3 class="section-break-title">Section Break</h3></div>
	<div class="element-multiple<?php frmd_add_class("multiple2"); ?>"><label class="title"></label><div class="item-cont"><div class="large"><select data-no-selected="Nothing selected" name="multiple2[]" multiple="multiple" >

		<option value="option 1">option 1</option>
		<option value="option 2">option 2</option>
		<option value="option 3">option 3</option></select><span class="icon-place"></span></div></div></div>
	<div class="element-input<?php frmd_add_class("input1"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input1" placeholder="Duration"/><span class="icon-place"></span></div></div>
	<div class="element-number<?php frmd_add_class("number2"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" min="0" max="100" name="number2" placeholder="No of repetitions" value=""/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input2"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input2" placeholder="Rewards"/><span class="icon-place"></span></div></div>
	<div class="element-textarea<?php frmd_add_class("textarea"); ?>"><label class="title"></label><div class="item-cont"><textarea class="medium" name="textarea" cols="20" rows="5" placeholder="Notes for parents"></textarea><span class="icon-place"></span></div></div>
<div class="submit"><input type="submit" value="Submit"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-solid-blue.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>
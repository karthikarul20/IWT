<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Simple HTML Form</title>
	<style type="text/css" title="text/css" media="all">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>
<!-- Script - form.php -->

<form action="handle_form2.php" method="post">
	<fieldset><legend>Enter your information in the form below:</legend>
	
	<p><label>Name: <input type="text" name="name" size="20" maxlength="40" /></label></p>
	
	<p><label>Email Address: <input type="text" name="email" size="40" maxlength="60" /></label></p>
	
	<p><label for="gender">Gender: </label><input type="radio" name="gender" value="M" /> Male <input type="radio" name="gender" value="F" /> Female</p>


<?php # Script for date of birth
// This script makes three pull-down menus
// for an HTML form: months (Jan – Dec), days (1 – 31), years (1912-2013).
// use arrays and foreach statements

// Make the months array:
$months = array (1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

// Make the days and years arrays:
$days = range (1, 31);
$years = range (1912, 2017);


echo '<p><label>Date of Birth:</label>';

// Make the months pull-down menu:
echo '<select name="month">';
foreach ($months as $key => $value) {
	echo "<option value=\"$key\">$value</option>\n";
}
echo '</select>';

// Make the days pull-down menu:
echo '<select name="day">';
foreach ($days as $value) {
	echo "<option value=\"$value\">$value</option>\n";
}
echo '</select>';

// Make the years pull-down menu:
echo '<select name="year">';
foreach ($years as $value) {
	echo "<option value=\"$value\">$value</option>\n";
}
echo '</select></p>';

?>

<?php # Script for citizenship
// This script makes a pull-down menu
// for an HTML form: citizenship.
// use an array, a sort function, and foreach statements
?> 
	
<!-- 
	<p><label>Age:
	<select name="age">
		<option value="0-29">Under 30</option>
		<option value="30-60">Between 30 and 60</option>
		<option value="60+">Over 60</option>
	</select></label></p>
	
-->
    
	<p><label>Comments: <textarea name="comments" rows="3" cols="40"></textarea></label></p>
	
	</fieldset>
	
	<p align="center"><input type="submit" name="submit" value="Submit My Information" /></p>

</form>

</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Error Test 3</title>
</head>
<body>


<?php # errortest3.php



function my_error_handler ($e_number, $e_message, $e_file, $e_line, $e_vars) {
	
	$err_msg = "An error has been handled by my own error handling function.<br />";
	$err_msg .= "<i>An error occurred in script '$e_file' on line $e_line: $e_message</i>\n";
	echo $err_msg.'<br />';
}

// open not_existing_file
fopen('not_existing_file','r');

echo 'File has been successfully opened';

?>
</body>
</html>
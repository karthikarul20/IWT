<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Error Test 1</title>
</head>
<body>
<?php 
#errortest1.php
function print_matrix($matrix){
	echo '<table border="1">';
	for($i=0; $i< count($matrix);$i++){
	  echo '<tr>';
		for($j=0; $j< count($matrix[$i]);$j++){
			echo '<td>';
			echo $matrix[$i][$j];
			echo '</td>';
		}
	  echo '</tr>';		
	}
	
}

function add_matrix($matrix1, $matrix2){

  	$matrix3=Array();
	for($i=0; $i< count($matrix1);$i++){
		for($j=0; $j< count($matrix1[$i]);$j++){
			$matrix3[$i][$j]=$matrix1[$i][$j]+$matrix2[$j][$i];
		}	

	return $matrix3;
}


  $matrix1=Array(Array(1,2,3),Array(1,2,3),Array(1,2,3));
  $matrix2=Array(Array(1,2,3),Array(1,2,3),Array(1,2,3));
  $matrix3=add_matrix($matrix1,$matrix2);

	echo "<h2>Matrix Addition</h2><br />";
		
	echo '<table border="1"><tr><th>Matrix1</th><th rowspan="2" valign="middle" width="20">+</th><th>Matrix2</th><th rowspan="2" valign="middle" width="20">=</th><th>Result Matrix</th></tr>';
	
	echo '<tr><td align="center">';
  	print_matrix($matrix1);
  	echo '</td><td align="center">';
  	print_matrix($matrix2);
	echo '</td><td align="center">';
	print_matrix($matrix3);
	echo '</td></tr>';
	echo '</table>';
    
?>
</body>
</html>
